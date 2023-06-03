<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\AgendaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DiagramController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\ConversationController;
use App\Http\Controllers\HistoriqueController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome')->name('homme');
// });


Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/admin', [WelcomeController::class, 'vueAdmin'])->name('admin');


Route::get('/jobs',[JobController::class, 'index'])->name('jobs.index');
Route::get('/jobs/{id}',[JobController::class, 'show'])->name('jobs.show');


//il faut grouper le deux route post et get jop et proposal ,on a besoin d'un middleware car il faut deja etre connecter pour faire cella
//il faut deja etre authenthifie zay ny dikany io grouper io authenfie alo vo manao ajout na raha
///acceptProposal/{$proposal}' miaraka @id
Route::group(['middleware' => ['auth']], function (){

    // Route::get('/home',function(){
        
    //     //  dd(auth())
    //     // ^ Illuminate\Auth\AuthManager {#427 ▼
    //     // dd(auth()->user());
    //     // ^ App\Models\User {#1129 ▶}

    //     // $test=auth()->user();
    //     // echo(gettype($test));
    //     // // object

    //     // dd(auth()->user()->jobs);

    //     // ^ Illuminate\Database\Eloquent\Relations\HasMany {#1166 ▶  #items: array:6 [▶]}

    //     // foreach(auth()->user()->jobs as $job){
    //     //     echo $job->title;
    //     //  } ;
    //     //  dd();
    //     //  // Premiere MissionDeuxieme MissionTroisieme missionreactJAVADerniere

    //     // foreach(auth()->user()->jobs() as $job)
    //     // HTTP ERROR 500



    //     // dd(auth()->user()->jobs()->price):
    //     // err:Undefined property: Illuminate\Database\Eloquent\Relations\HasMany::$price
    //     // atao foreach de azo 


    //     // dd(auth()->user()->jobs()->count());
    //     // ^ 6

    //     // dd(gettype(auth()->user()->jobs()));
    //     // ^ "object"

    //     // dd(auth()->user()->jobs()->count()) de mtovy fona @ny dd(auth()->user()->jobs->count());;
    //     // ^ 6

        
    //     // dd(auth()->user()->likes()->count());
    //     // ^ 1

        

    //     if(auth()->user()->role_id==1){
    //         return view('home');
    //     } 

    //     if(auth()->user()->role_id==3){


            
    //         return view('admin.home');
    //     }
        
    //    return view('homeclient');

     
    
    
    // })->name('home');
    
    
    Route::get('/home',[Admin::class, 'index'])->name('home');
    Route::get("/uptade/{id}", [HomeController::class, 'uptadeHome'])->name("uptadeHome");
    Route::post('/modifierHomme/{id}', [HomeController::class, 'updateHomme'])->name("modifier_home");
    Route::get('/historique',[HistoriqueController::class, 'index'])->name('histo');
   
    Route::get('/confirmProposal/{proposal}',[ProposalController::class, 'confirm'])->name('confirm.proposal');
    Route::get('/conversations',[ConversationController::class, 'index'])->name('conversation.index');
    Route::get('/conversations/{conversation}',[ConversationController::class, 'show'])->name('conversation.show');
    Route::get('/insert', [JobController::class, 'list'])->name("jobs.insert");
    Route::get('/edit/{id}', [JobController::class, 'edit'])->name("jobs.edit");
    
    Route::post('/store', [JobController::class, 'store'])->name("jobs.store");

    Route::get('/download/{id}', [JobController::class, 'telecharger'])->name("dowload");

    // Route::get('/lister', [JobController::class, 'list'])->name("lister_jobs");
    Route::post('/getEtudiant', [JobController::class, 'getJob'])->name("getJobsById");
    Route::post('/modifier/{id}', [JobController::class, 'updateJob'])->name("modifier_Jobs");
    Route::get('/supprimer/{id}', [JobController::class, 'delete'])->name("supprimer_jobs");
    Route::get("/diagram", [DiagramController::class, 'diagram'])->name("diagram");
    Route::get("/agenda", [AgendaController::class, 'agenda'])->name("agenda");
    Route::view('users','livewire.home')->name("user");
   

 
 
});


Route::group(['middleware' => ['auth', 'proposal']], function (){

    Route::post('/submit/{job}', [ProposalController::class, 'store'])->name('proposals.store');
    
});

Route::get('/test',function(){  
//     $a=5;
//   return $a+5;
  
// echo(auth());
// Object of class Illuminate\Auth\AuthManager could not be converted to string


// $frisco =new user();
// user();
// $frisco->user();

// err:Class "user" not found

// echo( auth()->user()->conversations());

// return view('test');


});

