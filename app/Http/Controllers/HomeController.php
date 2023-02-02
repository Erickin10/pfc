<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('site.home');
    }

    /**
     * show
     *
     * @param mixed $slug
     * @return void
     *
     */
    public function show ($slug)
    {
        return view('site.post-individual', ['post' => $slug]);
    }

}
