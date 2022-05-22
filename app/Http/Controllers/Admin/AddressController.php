<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class AddressController
{
    public function getAddress (Request $request)
    {
        return view('request_views.address', ['response' => $request['address']]);
    }
}
