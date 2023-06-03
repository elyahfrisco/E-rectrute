<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Home;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class Admin extends Controller
{
   
    public function index(){

        

        
        if(auth()->user()->role_id==1){
            return view('home');
        } 

        if(auth()->user()->role_id==3){

            $data['users'] = Role::with("users")->get();
            $data['job'] = Job::online()->latest()->get()->sortByDesc('id');
            $data['user'] = User::all();
            $data['role'] = User::with("role")->get();
            // $data['user'] = User::with("role")->get();
            $data['home'] = Home::all();
          

           
            
            return view('admin.home', $data);
        }
        
       return view('homeclient');

    }
    
   

}
