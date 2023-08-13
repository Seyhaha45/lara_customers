<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){

        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact(){
        return view('Frontend.contact');
    }

    public function listing_page(){
        return view('Frontend.listing-page');
    }

    public function detail_page(){
        return view( 'Frontend.detail-page');
    }
}


