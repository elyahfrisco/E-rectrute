@extends('layouts.app')

@section('content')

    <h1 class="text-3xl text-green-500 mb-5 ">{{$job->title}}</h1>
     


     <div class="px-2 py-5 mb-3 shadow-md hover:shadow-2xl rounded border border-2 border-gray-300">
         
       
        <p class="text-md text-gray-800">{{$job->description}}</p>
        
        {{-- <span class="text-sm text-gray-600">{{number_format($job->price/100, 2, ',', '')}}€</span> --}}
        <span class="text-sm text-gray-600">{{number_format($job->price, 2, ',', '')}}€</span>
     </div>
      
     @if (auth()->user()->role_id==1)
        
     <section x-data="{open: false}">

      <a href="#" class="text-green-500" @click="open = !open">Cliquez ici pour soumettre une candidature</a>

      <form  x-show="open" x-cloak method="POST" action="{{route('proposals.store', $job)}}">

         @csrf

       <textarea class="p-3 font-thin w-full max-w-md " name="content"></textarea>

       <button type="submit" class="block bg-green-700 text-white px-3 py-2 mt-3">Soumettre ma lettre de motivation</button>
      </form>

     </section>
        
     @endif

    
@endsection