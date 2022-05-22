<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\EmailAddress;
use App\Models\Knowledge;
use App\Models\Telephone;
use Illuminate\Http\Request;

class KnowledgeController extends Controller
{
    public function index(){
        $telephone = Telephone::all();

        $address = Address::all();

        $email_address = EmailAddress::all();

        $knowledge = Knowledge::all();

        return view('pages.knowledge',[
            'telephone' => $telephone,
            'address' => $address,
            'email_address' => $email_address,
            'knowledge' => $knowledge
        ]);
    }
}
