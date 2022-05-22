<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\EmailAddress;
use App\Models\News;
use Illuminate\Http\Request;
use App\Models\Telephone;
use App\Models\HomeSliderItems;

class HomeController extends Controller
{
    public function index(){
        $telephone = Telephone::all();

        $home_slider_items = HomeSliderItems::all();

        $address = Address::all();

        $email_address = EmailAddress::all();

        $news = News::orderByDesc('created_at')->get();

        return view('pages.index', [
            'telephone' => $telephone,
            'home_slider_items' => $home_slider_items,
            'address' => $address,
            'email_address' => $email_address,
            'news' => $news
        ]);
    }
}
