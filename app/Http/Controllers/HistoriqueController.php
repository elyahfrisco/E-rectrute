<?php

namespace App\Http\Controllers;

use App\Models\Historique;
use Illuminate\Http\Request;

class HistoriqueController extends Controller
{
    

    public function index ()
    {
    //    $data['historique']=Historique::paginate(8);

        $historique=Historique::paginate(10);

    
       
        // dd($historique->count());
        return view('historique')->with('historique',$historique);
    }
}
