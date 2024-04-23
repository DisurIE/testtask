<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class MainController extends Controller
{
    public function index()
    {
        return view('input');
    }

    public function reverse(Request $request)
    {
        $words = $request['words'];
        $reverseWords = $this->service->reverse($words);
        //dd($this->service->reverse($words));
        return view('input', compact('reverseWords'));
    }
}
