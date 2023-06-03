<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Job extends Component
{   

    public $job;
    public $jobs;

   

    public function addLike()
    {

        if(auth()->check()){
        
            // dd('liked');
        auth()->user()->likes()->toggle($this->job->id);
        } else{
            $this->emit('flash', 'Merci de vous connecter pour ajouter une mission à vos favoris','error');
        }
        
    }
    public function render()
    {
        return view('livewire.job');
    }

    
}
