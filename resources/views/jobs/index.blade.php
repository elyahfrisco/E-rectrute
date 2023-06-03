@extends('layouts.app')


@section('content')


    <h1 class="text-3xl text-green-500 mb-5 ">Nos derninières missions</h1>
     
    @foreach($jobs as $job)
        
       <livewire:job :job="$job"/>
      
      
    
    @endforeach
@endsection