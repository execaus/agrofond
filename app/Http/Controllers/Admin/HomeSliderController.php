<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\api\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\HomeSliderItems;
use Illuminate\Http\Request;

class HomeSliderController extends BaseController
{
    public $modelName = HomeSliderItems::class;

    public function index()
    {
        $slider_items = HomeSliderItems::get()->all();
        return view('admin_panel.pages.home-slider', ['slider_items' => $slider_items]);
    }
}
