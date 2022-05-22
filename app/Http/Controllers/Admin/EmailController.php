<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class EmailController
{
    public function getEmail (Request $request)
    {
        return view('request_views.email', ['response' => $request['email']]);
    }
}
