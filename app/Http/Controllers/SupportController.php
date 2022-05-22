<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\EmailAddress;
use App\Models\SupportMeasures;
use App\Models\Telephone;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index()
    {
        $telephone = Telephone::all();

        $address = Address::all();

        $email_address = EmailAddress::all();

        $supportMeasures = SupportMeasures::all();

        return view('pages.support',[
            'telephone' => $telephone,
            'address' => $address,
            'email_address' => $email_address,
            'supportMeasures' => $supportMeasures,
        ]);
    }

    public function getSupport($id)
    {
        $telephone = Telephone::all();

        $address = Address::all();

        $email_address = EmailAddress::all();

        return view('pages.single-support', [
            'telephone' => $telephone,
            'address' => $address,
            'email_address' => $email_address,
            'content' => SupportMeasures::find($id)
        ]);
    }
}
