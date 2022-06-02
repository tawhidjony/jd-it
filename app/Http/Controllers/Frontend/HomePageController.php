<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\Portfolio;
use App\Models\Slider;
use App\Models\Testimonials;
use Illuminate\Http\Request;

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
}
