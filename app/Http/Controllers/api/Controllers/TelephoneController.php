<?php

namespace App\Http\Controllers\api\Controllers;

use App\Models\Telephone;
use Illuminate\Http\Request;

class TelephoneController extends BaseController
{
    public $modelName = Telephone::class;
}
