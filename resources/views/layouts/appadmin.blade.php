<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
    <title>Responsiive Admin Dashboard | CodingLab</title>
    <link rel="stylesheet" href="{{ url('/') }}/admin/style.css" />
    <!-- Boxicons CDN Link -->
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="icon" type="image/png" href="{{ asset('fav.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>
     

      
    <body>
      <div class="container mx-auto px-4 ">
        
       
     
        @yield('content')


      </div>
    </body>
</html>
