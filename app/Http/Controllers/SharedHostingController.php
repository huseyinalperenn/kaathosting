<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\ProductsResource;

class SharedHostingController extends Controller
{
    public function index(Request $request)
    {
        $products = cache('getProducts');
        //return findByGroupId(1, $products['products']['product']);
        $products = ProductsResource::collection(findByGroupId(1, $products['products']['product']));
        //return $products;
        $data = [
            "products" => $products->resolve(),
        ];

        return view('shared-hosting', $data);
    }
}
