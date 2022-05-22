<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\EmailAddress;
use App\Models\Knowledge;
use App\Models\Solutions;
use App\Models\Telephone;
use Illuminate\Http\Request;

class SolutionsController extends Controller
{
    public function index(){
        $telephone = Telephone::all();

        $address = Address::all();

        $email_address = EmailAddress::all();

        $solutions = Solutions::all();

        return view('pages.solutions',[
            'telephone' => $telephone,
            'address' => $address,
            'email_address' => $email_address,
            'solutions' => $solutions
        ]);
    }
}
