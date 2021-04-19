<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function promotion()
    {
        return view('frontend.promotion.index');
    }

    // public function booking()
    // {
    //     return view('frontend.promotion.detail');
    // }
}
