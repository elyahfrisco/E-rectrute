

    
@extends('layouts.appclient')


@section('content')

<br>
<form method='POST' action="{{ route('modifier_Jobs', $job->id ) }}" id="formulaire" class="w-full max-w-lg " enctype="multipart/form-data"  >
    @csrf
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
          Title
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" value="{{ $job->title }}" id="title"  name="title"  type="text"placeholder="Titre" required >
        <input type="hidden" class="w3-input" name="id" id="id">
        <input type="hidden" name="user_id" id="user_id" value="{{Auth()->user()->id}}">
        
      </div>
      <div class="w-full md:w-1/2 px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
          Description
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" value="{{ $job->description }}" id="description" name="description" type="text" placeholder="Description" required>
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
      
    </div>
    <div class="flex flex-wrap -mx-3 mb-2">
      <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
          Price
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" value="{{ $job->price }}" id="price" name="price" type="text" placeholder="Price" required >
      </div>
      <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
          Status
        </label>
        <div class="relative">
          <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="status" name="status">
            <option value="1">Enable</option>
            <option value="0">Disable</option>
          </select>
          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
          </div>
        </div>
      </div>
    </div>
    <button type="submit" class="bg-green-500 text-white hover:bg-green-700 transition ease-in-out duration-500 rounded-md shadow-md w-full block px-4 py-2 mt-5" id="boutton">Modifier</button>
    <button type="submit" class="bg-green-500 text-white hover:bg-green-700 transition ease-in-out duration-500 rounded-md shadow-md w-full block px-4 py-2 mt-5" id="boutton"><a href="{{ url()->previous() }}">Annuler</a></button>
  </form>
  <br><br>

    
   



@endsection




    

