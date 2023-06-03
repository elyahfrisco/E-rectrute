<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    

    public function uptadeHome ($id)
    {
      

        $home = Home::find($id);

        // $job=Job::where('id',$id);
        // dd( $job->title);
         
       
        return view('updateHome', compact('home'));
    }



      public function updateHomme(Request $request,$id){
        

        $validatedData = $request->validate([
            'mission' => 'required',
            'value' => 'required',
            'consulting' => 'required',
            'support' => 'required',
        ]);

        Home::whereId($id)->update($validatedData);

        return redirect('home');
          
    }
}
