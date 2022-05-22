<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\EmailAddress;
use App\Models\Telephone;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index(){
        $telephone = Telephone::all();

        $address = Address::all();

        $email_address = EmailAddress::all();

        $news = News::orderByDesc('created_at')->limit(6)->get();

        return view('pages.news',[
            'telephone' => $telephone,
            'address' => $address,
            'email_address' => $email_address,
            'news' => $news
        ]);
    }

    public function getNews($id)
    {
        $telephone = Telephone::all();

        $address = Address::all();

        $email_address = EmailAddress::all();

        return view('pages.single-news', [
            'telephone' => $telephone,
            'address' => $address,
            'email_address' => $email_address,
            'content' => News::find($id)
        ]);
    }
}
