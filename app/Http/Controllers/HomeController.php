<?php namespace App\Http\Controllers;
use App\Page;
class HomeController extends Controller {
    public function __construct()
    {
//        		$this->middleware('auth');
//        +		$this->middleware('guest');
    }

    public function index()
    {
        return view('home')->withPages(Page::all());
    }
}