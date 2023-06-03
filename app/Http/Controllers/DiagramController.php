<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DiagramController extends Controller
{
    // L'action de la route "diagram"
	public function diagram () {

        $data['user'] = Role::with("users")->get();
		// $data['user']=DB::table('users')->select(DB::raw('count(*) as user_count, role_id'))->groupBy('role_id')->get();
		// $data['user'] = Role::with("users")->get();

	 
		

         
        // dd(  $data['user']);

       
		// La vue "diagram"
		return view("diagram", $data);
	}
}
