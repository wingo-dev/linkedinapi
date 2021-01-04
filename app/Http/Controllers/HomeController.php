<?php

namespace App\Http\Controllers;

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
        return view('home');
    }
    public function adminHome()
    {
        return view('admin.adminHome');
    }
    public function newCampain()
    {
        return view('newCampain');
    }
    public function manageCampains()
    {
        return view('manage_campaigns');
    }
    public function savecampain()
    {
        return view('save_campain');
    }
    public function manageConnections()
    {
        return view('manage_connections');
    }
    public function followUp()
    {
        return view('followup');
    }
    public function linkedinDetail()
    {
        return view('linkedin');
    }
    public function account()
    {
        return view('account');
    }
    public function faq()
    {
        return view('faq');
    }
}
