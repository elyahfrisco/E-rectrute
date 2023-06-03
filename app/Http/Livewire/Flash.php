<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Flash extends Component
{
    public $message;
    public $type;
    public $colors = [
        'success' => 'border-green-700 bg-green-100  text-green-700',
        'info' => 'border-blue-700 bg-blue-100  text-blue-700',
        'warning' => 'border-yellow-700 bg-yellow-100  text-yellow-700',
        'error' => 'border-red-700 bg-red-100  text-red-700',
    ];
    protected $listeners = ['flash' => 'setFlashMessage'];
    
 

    public function setFlashMessage($message, $type)
    {
        $this->message = $message;
        $this->type = $type;
        $this->dispatchBrowserEvent('flash-message');
    }

    public function render()
    {
        return view('livewire.flash');
    }
}
