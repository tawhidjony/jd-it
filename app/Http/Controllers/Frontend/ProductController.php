<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function index()
    {
        $perPage = 1;
        $allProduct = [];
        $response = Http::get('https://contents.jadroo.com/api/v1/partner/products?slug=jadroo-it-bd-ltd&page='.$perPage);
        $products = $response->json()['results']['products'];
        $items = (object)collect($products);
        array_push($allProduct, ...$items['data']);
        return view('frontend.products.index', compact('allProduct'));
    }
}
