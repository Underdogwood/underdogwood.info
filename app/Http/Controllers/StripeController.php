<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StripeController extends Controller
{


    public function buy()
    {
        return view('pages.buy');
    }
}
