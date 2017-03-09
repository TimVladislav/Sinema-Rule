<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = Report::orderBy('updated_at', 'desc')->limit(5)->get();
        return view('home', [
          'reports' => $reports,
        ]);
    }
}
