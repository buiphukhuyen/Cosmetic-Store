<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryProduct extends Controller
{
    public function add_category() {
        return view("admin.category.add_category");
    }

    public function list_category() {
        return view("admin.category.list_category");
    }
}
