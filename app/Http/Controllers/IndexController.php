<?php

namespace App\Http\Controllers;
use App\Portfolio;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Show the application data.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::all();  
        return view('index', ['portfolios' => $portfolios]);
    }
}
