<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Freelance SN CORP</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet"  >
        <link rel="icon" type="image/png" href="{{ asset('fav.png') }}">

        <style>
          [x-cloak] {display: none;}
          
        </style>
        
        @livewireStyles
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
     
     

      
    <body>
      
      <div class="container mx-auto px-4 ">
        
       
        @include('partials.navbar')

        <livewire:flash />
        @yield('content')


      </div>
   @livewireScripts
    </body>
</html>