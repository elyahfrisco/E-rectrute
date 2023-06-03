<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Historique;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;


class JobController extends Controller
{
    public function index()
    {
        // return Job::all();
          
           $jobs=Job::online()->latest()->get()->sortByDesc('id');

        //    dd($jobs);
        //    return $jobs;
        return view('jobs.index',[

            'jobs' => $jobs
        ]);
    }

    public function show(Job $id)
    {

        
        return view('jobs.show',[

            'job' => $id
        ]);
    }

    public function insert()
    {


        return view('jobs.insert');
       
    }


    public function list(){
   
        
        $job = Job::where('user_id',auth()->user()->id)->paginate(3);
        
        // $job=$jobs->paginate(5);

        
        // if(auth()->user()->id==$job->user_id)

  
        return view('jobs.insert',compact('job'));
    }


   
    public function store(Request $request)
    {
        

        $request->validate([
        'price'=>'required|integer|min:0',
        ]);

        $name=Storage::disk('local')->put('attachment',$request->attachment);

        dd($request);

        $job = array(
           
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'status' => $request->input('status'),
            'attachment' => $name,
            'price' => $request->input('price'),
            
            'user_id' => $request->input('user_id')
    
            );
    
            echo json_encode(Job::create($job));

             
            session()->flash('success', 'Enregistrement reussi.');
          
            return redirect()->route('jobs.insert')->with('success','Enregistrement reussi!');
         
            

    }


    public function telecharger(Job $id){

        $NomAchange=Job::find($id);

        foreach ($NomAchange as $key) {
           
            $NomAchange= $key->attachment;

            // dd(  gettype($NomAchange));

        }
        
         
     
        //  $file=str_replace('/','\/',$NomAchange);

        //  dd( $file);
    
        //  $NomFichier=explode("/",$NomAchange);

        //  $fichier= $NomFichier[1];

        //  dd( $fichier);

        // $file="attachment/ $fichier";

        // dd(  $file);
    
        

        return Storage::download($NomAchange);

        

    }


    public function getJob(Request $request){
        $id = $request->input('id');
        $job = Job::find($id);
        echo json_encode($job);
    }

    
    public function edit($id){
        

        $job = Job::find($id);

        // $job=Job::where('id',$id);
        // dd( $job->title);

        return view('jobs.edit', compact('job'));
    

    }

    


    public function updateJob(Request $request,$id){
        

        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'status' => 'required',
            'price' => 'required',
        ]);

        Job::whereId($id)->update($validatedData);


        $user=auth()->user()->email;
        Historique::create([
           'evenement'=>'Edit Jobs',
           'utisateur'=> $user,
        ]);

        return redirect('/insert');


          
    }

    public function delete(Job $id){
          
        
       $job = Job::find($id);
        
     
      $job->each->delete();

      return redirect('/insert');



    

    }


    

}
