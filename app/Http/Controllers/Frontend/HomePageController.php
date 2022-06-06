<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\NewsLetter;
use App\Models\Partner;
use App\Models\Portfolio;
use App\Models\Slider;
use App\Models\Testimonials;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomePageController extends Controller
{
    public function index()
    {
        $sliders = Slider::latest()->take(5)->get();
        $portfolios = Portfolio::latest()->take(8)->get();
        $testimonials = Testimonials::take(3)->get();
        $partners = Partner::latest()->take(8)->get();
        return view('frontend.home.index',[
            'sliders'       => $sliders,
            'portfolios'    => $portfolios,
            'testimonials'  => $testimonials,
            'partners'      => $partners,
        ]);
    }


    public function newsLetter(Request $request){
        $request->validate([
            'email' => 'required|email|unique:news_letters',
        ]);

        $newsLetter = new NewsLetter();
        $newsLetter->uuid = Str::uuid();
        $newsLetter->email = $request->email;
        $newsLetter->save();
        return redirect()->back()->with('success','Your Email has been added successfully');
    }
}
