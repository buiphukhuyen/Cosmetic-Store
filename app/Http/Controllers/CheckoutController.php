<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Cart;
use App\Customer;
use App\Order;
use App\OrderDetails;
use App\Shipping;
use App\Product;
use App\Coupon;
use PDF;
use Mail;
class CheckoutController extends Controller
{

    public function login_checkout() {
        $customer_id = Session::get('customer_id');
        $customer_name =Session::get('customer_name');
        if($customer_id!=NULL || $customer_name!=NULL) {
            return Redirect::to('/checkout');
        }

        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','1')->orderby('brand_id', 'desc')->get();

        return view('customer.checkout.login_checkout')->with('category',$cate_product)->with('brand', $brand_product);
    }

    public function login_customer(Request $request) {
        $customer_email = $request->customer_email;
        $customer_password = md5($request->customer_password);
        $result = DB::table('tbl_customer')->where('customer_email', $customer_email)->where('customer_password', $customer_password)->first();
        if($result) {
            Session::put('customer_id',$result->customer_id);
            Session::put('customer_name',$result->customer_name);
            return Redirect::to('/');
        } else {
            Session::put('error_login', 'Đăng nhập không thành công! Hãy thử lại!');
            return Redirect::to('/login-checkout');
        }
    }
    public function add_customer(Request $request) {
        $data = array();
        $data['customer_name'] = $request->reg_name;
        $data['customer_email'] = $request->reg_email;
        $data['customer_password'] = md5($request->reg_password);
        $data['customer_phone'] = $request->reg_phone;

        $customer_id     = DB::table('tbl_customer')->insertGetId($data);

        Session::put('customer_id', $customer_id);
        Session::put('customer_name', $request->customer_name);
        return Redirect::to('/checkout');
    }

    public function checkout() {
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','1')->orderby('brand_id', 'desc')->get();
        return view('customer.checkout.checkout')->with('category',$cate_product)->with('brand', $brand_product);
    }

    public function logout_checkout() {
        Session::flush();
        return Redirect::to('/login-checkout');
    }

    public function save_shipping_order_customer(Request $request) {

        //Thêm thông tin shipping
        $data = array();
        $data['shipping_name'] = $request->shipping_name;
        $data['shipping_phone'] = $request->shipping_phone;
        $data['shipping_email'] = $request->shipping_email;
        $data['shipping_notes'] = $request->shipping_notes;
        $data['shipping_address'] = $request->shipping_address;
        $shipping_id = DB::table('tbl_shipping')->insertGetId($data);
        Session::put('shipping_id',$shipping_id);

        //Thêm thông tin thanh toán
        $payment_data = array();
        $payment_data['payment_method'] = $request->payment_option;
        $payment_data['payment_status'] = 'Đang chờ xử lý';
        $payment_id = DB::table('tbl_payment')->insertGetId($payment_data);
        Session::put('payment_id',$payment_id);

        //Thêm thông tin hoá đơn
        $order_data = array();
        $order_data['customer_id'] = Session::get('customer_id');
        $order_data['shipping_id'] = Session::get('shipping_id');
        $order_data['payment_id'] = $payment_id;
        $order_data['order_subtotal'] = Cart::discount();
        $order_data['order_total'] = Cart::total();
        $order_data['order_status'] = 'Đang chờ xử lý';
        $order_id = DB::table('tbl_order')->insertGetId($order_data);
        Session::put('order_id',$order_id);

        //Thêm chi tiết hoá đơn
        $content = Cart::content();
        foreach($content as $v_content){
            $order_d_data['order_id'] = $order_id;
            $order_d_data['product_id'] = $v_content->id;
            $order_d_data['product_name'] = $v_content->name;
            $order_d_data['product_price'] = $v_content->price;
            $order_d_data['product_sales_quantity'] = $v_content->qty;
            $order_d_data['product_coupon'] = $request->product_coupon;
            DB::table('tbl_order_details')->insert($order_d_data);
        }
        return Redirect::to('/done-payment');
    }

    public function done_payment() {
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','1')->orderby('brand_id', 'desc')->get();
        $order_id = Session::get("order_id");
        $payment_id = Session::get("payment_id");

        $result = DB::table('tbl_order')
            ->join('tbl_order_details','tbl_order_details.order_id','=','tbl_order.order_id')
            ->join('tbl_payment', 'tbl_payment.payment_id','=','tbl_order.payment_id')
            ->where('tbl_order.order_id',$order_id)
            ->where('tbl_order.payment_id', $payment_id)->get();
        $order_total = DB::table('tbl_order')->where('tbl_order.order_id',$order_id)->limit(1)->get();
        $payment_method = DB::table('tbl_payment')->where('tbl_payment.payment_id',$payment_id)->limit(1)->get();
        Cart::destroy();
        return view('customer.checkout.done_payment')->with('category',$cate_product)->with('brand', $brand_product)->with('res', $result)->with('order',$order_total)->with('payment',$payment_method);
    }


    //Admin
    public function manage_order() {
        $all_order = DB::table('tbl_order')
            ->join('tbl_customer','tbl_order.customer_id','=','tbl_customer.customer_id')
            ->select('tbl_order.*','tbl_customer.customer_name')
            ->orderby('tbl_order.order_id','desc')->get();
        $manager_order  = view('admin.manage.order')->with('all_order',$all_order);
        return view('admin.admin_layout')->with('admin.manage.order', $manager_order);
    }

    public function view_order($order_id) {
        $order_by_id = DB::table('tbl_order')
            ->join('tbl_customer','tbl_order.customer_id','=','tbl_customer.customer_id')
            ->join('tbl_shipping','tbl_order.shipping_id','=','tbl_shipping.shipping_id')
            ->join('tbl_payment','tbl_payment.payment_id','=','tbl_order.payment_id')
            ->join('tbl_order_details','tbl_order.order_id','=','tbl_order_details.order_id')
            ->where('tbl_order.order_id', $order_id)
            ->select('tbl_order.*','tbl_customer.*','tbl_shipping.*','tbl_order_details.*','tbl_payment.*')->get();

        $manager_order_by_id  = view('admin.manage.view_order')->with('order_by_id',$order_by_id);

        return view('admin.admin_layout')->with('admin.manage.view_order', $manager_order_by_id);
    }


    public function print_order($checkout_code){
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->print_order_convert($checkout_code));
        return $pdf->stream();
    }

    public function print_order_convert($checkout_code){
        $order = Order::where('order_id',$checkout_code)->get();
        foreach($order as $key => $ord){
            $customer_id = $ord->customer_id;
            $shipping_id = $ord->shipping_id;
        }
        $customer = Customer::where('customer_id',$customer_id)->first();
        $shipping = Shipping::where('shipping_id',$shipping_id)->first();

        $order_details_product = OrderDetails::with('product')->where('order_id', $checkout_code)->get();

        foreach($order_details_product as $key => $order_d){

            $product_coupon = $order_d->product_coupon;
        }
        if($product_coupon != null){
            $coupon = Coupon::where('coupon_code',$product_coupon)->first();
            $coupon_number = $coupon->coupon_discount;
            $coupon_echo = $coupon_number.'%';

        }else{
            $coupon_number = 0;
            $coupon_echo = '0';
        }

        $output = '';

        $output.='<style>body{
			font-family: DejaVu Sans;
		}
		.table-styling{
			border:1px solid #000;
		}
		.table-styling tbody tr td{
			border:1px solid #000;
		}
		</style>
		<h3><center>Cửa hàng Mỹ phẩm - Cosmetic Store</center></h3>
		<h3><center>ĐƠN ĐẶT HÀNG</center></h3>
		<p>Người đặt hàng</p>
		<table class="table-styling">
				<thead>
					<tr>
						<th>Tên khách đặt</th>
						<th>Số điện thoại</th>
						<th>Email</th>
					</tr>
				</thead>
				<tbody>';

        $output.='
					<tr>
						<td>'.$customer->customer_name.'</td>
						<td>'.$customer->customer_phone.'</td>
						<td>'.$customer->customer_email.'</td>

					</tr>';


        $output.='
				</tbody>

		</table>

		<p>Ship hàng tới</p>
			<table class="table-styling">
				<thead>
					<tr>
						<th>Tên người nhận</th>
						<th>Địa chỉ</th>
						<th>SĐT</th>
						<th>Email</th>
						<th>Ghi chú</th>
					</tr>
				</thead>
				<tbody>';

        $output.='
					<tr>
						<td>'.$shipping->shipping_name.'</td>
						<td>'.$shipping->shipping_address.'</td>
						<td>'.$shipping->shipping_phone.'</td>
						<td>'.$shipping->shipping_email.'</td>
						<td>'.$shipping->shipping_notes.'</td>

					</tr>';
        $output.='
				</tbody>

		</table>

		<p>Đơn hàng đặt</p>
			<table class="table-styling">
				<thead>
					<tr>
						<th>Tên sản phẩm</th>
						<th>Mã giảm giá</th>
						<th>Số lượng</th>
						<th>Giá sản phẩm</th>
						<th>Thành tiền</th>
					</tr>
				</thead>
				<tbody>';

        $total = 0;

        foreach($order_details_product as $key => $product){

            $subtotal = $product->product_price*$product->product_sales_quantity;
            $total+=$subtotal;

            if($product->product_coupon!='no'){
                $product_coupon = $product->product_coupon;
            }else{
                $product_coupon = 'Không mã';
            }

            $output.='
					<tr>
						<td>'.$product->product_name.'</td>
						<td>'.$product_coupon.'</td>
						<td>'.$product->product_sales_quantity.'</td>
						<td>'.number_format($product->product_price,0,',','.').'đ'.'</td>
						<td>'.number_format($subtotal,0,',','.').'đ'.'</td>

					</tr>';
        }
            $total_coupon = $total - $coupon_number;


        $output.= '<tr>
				<td colspan="2">
					<p>Tổng giảm: '.$coupon_echo.'</p>
					<p>Thanh toán : '.number_format($total_coupon,0,',','.').'đ'.'</p>
				</td>
		</tr>';
        $output.='
				</tbody>

		</table>

		<br/>
			<table>
				<thead>
					<tr>
						<th width="200px">Người lập phiếu</th>
						<th width="800px">Người nhận</th>

					</tr>
				</thead>
				<tbody>';

        $now = Carbon::now();
        $output.='

				</tbody>

		</table>
		<br/><br/><br/><br/><br/><br/><br/><br/>
        <p style="text-align: right">Ngày lập phiếu: '.$now.'</p>
		';


        return $output;

    }


    public function verify_order($order_id) {
        DB::table('tbl_order')->where('order_id', $order_id)->update(['order_status' => 'Đã duyệt']);

        //Gửi mail xác nhận
        $to_name = "Customer Store";
        $to_email = "boysmarts98@gmail.com";//send to this email

        //Gửi mail xác nhận
        $to_name = "Customer Store";
        $to_email = "boysmarts98@gmail.com";//send to this email

        $data = array("name"=>"Nội dung","body"=>"Xác nhận đơn hàng");

        //body of mail.blade.php
        Mail::send('admin.manage.send_mail',$data,function($message) use ($to_name,$to_email){
            $message->to($to_email)->subject('Xác nhận thông tin đặt hàng!');//send this mail with subject
            $message->from($to_email,$to_name);//send from this mail
        });


        return Redirect::to('manage-order');
    }

    public function unverify_order($order_id) {
        DB::table('tbl_order')->where('order_id', $order_id)->update(['order_status' => 'Đang chờ xử lý']);
        return Redirect::to('manage-order');
    }
}
