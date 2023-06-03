<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/') }}/admin/style.css" />
    <!-- Boxicons CDN Link -->
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://kit.fontawesome.com/03c31d6660.js" crossorigin="anonymous"></script>
    @livewireStyles
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
            <a href="{{route('user')}}" class="active">
              <i class="fa-sharp fa-solid fa-users"></i>
              <span class="links_name">User</span>
            </a>
          </li>

          <li>
              <a href="{{route('histo')}}" >
                  <i class="fa-solid fa-clock-rotate-left"></i>
                <span class="links_name">Historique</span>
              </a>
            </li>
          <li>
            <a href="{{ route('uptadeHome', 1)}}">
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

        <div class="home-content">
       

            
          
                    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    {{-- <div class="card-header">
                        <h2>Laravel Livewire Crud</h2>
                    </div> --}}
                    <div class="card-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        @livewire('users')
                    </div>
                </div>
            </div>
        </div>
    </div>
                  
        
    

    @livewireScripts
    <script type="text/javascript">
        window.livewire.on('userStore', () => {
            $('#exampleModal').modal('hide');
        });
    </script>
</body>
</html>