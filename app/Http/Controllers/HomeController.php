<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'getProducts' => cache('getProducts'),
            'getTLDPricing' => cache('getTLDPricing'),
        ];

        return view('index', $data);
    }
}
