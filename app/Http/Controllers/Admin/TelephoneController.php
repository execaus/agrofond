<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class TelephoneController
{
    public function getTelephone (Request $request)
    {
        return view('request_views.telephone', ['response' => $request['telephone']]);
    }
}
