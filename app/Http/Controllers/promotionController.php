<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class promotionController extends Controller
{
    public function promotion()
    {
        return view('frontend.promotion.index');
    }
}
