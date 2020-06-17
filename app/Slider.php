<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'slider_name',  'slider_image',  'slider_status', 'slider_description'
    ];

    protected $primaryKey = 'slider_id';
    protected $table = 'tbl_slider';
    /**
     * @var mixed
     */
}
