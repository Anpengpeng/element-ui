<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yxk\Hello\Facades\Hello;


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

    public function getUser()
    {
        $user = Auth::user();

        $id = Auth::id();
        return $id;
    }

    public function say()
    {
        $ret = Hello::sayHello();
//        $re = $ret->sayHello();
        dd($ret);
    }

}
