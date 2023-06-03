<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>Freelance SN CORP </title>
    <link rel="stylesheet" href="{{ url('/') }}/admin/style.css" />
    <!-- Boxicons CDN Link -->
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    
    <link rel="icon" type="image/png" href="{{ asset('fav.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://kit.fontawesome.com/03c31d6660.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="sidebar">
      <div class="logo-details">
        <i class="bx bxl-c-plus-plus"></i>
       <span class="logo_name">Dashboard</span>
      </div>
      <ul class="nav-links">
        <li>
          <a href="{{route('home')}}" >
            <i class="fa-sharp fa-solid fa-chart-simple"></i>
            <span class="links_name">Stats</span>
          </a>
        </li>
        <li>
          <a href="{{route('user')}}" >
            <i class="fa-sharp fa-solid fa-users"></i>
            <span class="links_name">User</span>
          </a>
        </li>

        <li>
          <a href="{{route('histo')}}">
            <i class="fa-solid fa-clock-rotate-left"></i>
            <span class="links_name">Historique</span>
          </a>
        </li>
        <li>
          <a href="{{ route('uptadeHome', 1)}}" class="active">
            <i class="fa-solid fa-house-user"></i>
            <span class="links_name">Home</span>
          </a>
        </li>

        <li>
          <a href="{{route('agenda')}}">
            <i class="fa-solid fa-calendar-days"></i>
            <span class="links_name">Agenda</span>
          </a>
        </li>
        
        
       
        <li class="log_out">
          <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="hover:text-green-400 " style="font-family: cursive;font-size: 17px" >
            <i class="bx bx-log-out"></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
      </ul>
    </div>
    <section class="home-section">
      <nav>
        <div class="sidebar-button">
          <i class="bx bx-menu sidebarBtn"></i>
          <span class="dashboard"> </span>
        </div>

        <div class="profile-details">
          <i class="fa-solid fa-user"></i>
          <span class="admin_name">{{auth()->user()->name}}</span>
         
        </div>
      </nav>

      <div class="home-content" style="margin-left: 30%">
       

        <div class="sales-boxes">
            <form method='POST' action="{{ route('modifier_home', 1) }}" id="formulaire" class="w-full max-w-lg " enctype="multipart/form-data"  >
                @csrf

                
                <div class="flex flex-wrap -mx-3 mb-6">
                  <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Mission:
                    </label>
                    {{-- <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" value="{{ $home->mission }}" id="mission"  name="mission"  type="text"placeholder="Titre" required > --}}
                   
                    <textarea class="form-control" id="mission"  name="mission" rows="4">
                      {{$home->mission}}
                    </textarea>
                   
                    
                    
                  </div>
                  <br>
                  <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                      Value :
                    </label>
                   
                    {{-- <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" value="{{ $home->value }}" id="value" name="value" type="text" placeholder="Description" required> --}}
                 
                    <textarea class="form-control" id="value"  name="value" rows="4">
                      {{$home->value}}
                    </textarea>
                  </div>
                </div>
                <br>
                <div class="flex flex-wrap -mx-3 mb-6">
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                      Consulting:
                      </label>
                      {{-- <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" value="{{ $home->consulting }}" id="consulting"  name="consulting"  type="text"placeholder="Titre" required > --}}
                 
                      <textarea class="form-control" id="consulting"  name="consulting" rows="4">
                        {{$home->consulting}}
                      </textarea>
                      
                    </div>
                    <br>
                    <div class="w-full md:w-1/2 px-3">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                        Support :
                      </label>
                      {{-- <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" value="{{ $home->support }}" id="support" name="support" type="text" placeholder="Description" required> --}}
                      
                      <textarea class="form-control" id="support"  name="support" rows="4" style="width: 500px;">
                        {{$home->support}}
                      </textarea>
                      <input type="hidden" class="w3-input" name="id" id="id">
                    
                    </div>
                  </div>
                  <div class="flex flex-wrap -mx-3 mb-6">
                  </div>
                  <br>

                  <div class="mx-auto" style="width: 200px">
                    <button type="submit" class="btn btn-primary btn-block mb-4" id="boutton">
                      Modifier
                    </button>
                  </div>
                
                {{-- <button type="submit" class="bg-green-500 text-white hover:bg-green-700 transition ease-in-out duration-500 rounded-md shadow-md w-full block px-4 py-2 mt-3" id="boutton">Modifier</button> --}}
               
              </form>
        </div>
      </div>
    </section>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
     <script type="text/javascript">
      let sidebar = document.querySelector(".sidebar");
      let sidebarBtn = document.querySelector(".sidebarBtn");
      sidebarBtn.onclick = function () {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
          sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      };


 
    </script>
  </body>
</html>
