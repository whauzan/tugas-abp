<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site extends Controller
{
    public function index() {
        return view('login');
    }

    public function auth(Request $req) {
        $data= $req->input();
        $req->session()->put('user',$data['user']);
        return redirect()->action([Site::class, 'home']);
    }

    function home() {
        return view('home', ['user' => session('user')]);
    }
}
