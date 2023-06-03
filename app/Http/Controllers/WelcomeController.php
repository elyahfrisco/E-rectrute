<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {

        $data['home'] = Home::all();

        return view('welcome',$data);
    }

    public function vueAdmin()
    {
       

        return view('auth.loginadmin');
    }
}
