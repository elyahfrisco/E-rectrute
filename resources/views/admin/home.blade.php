<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>Freelance SN CORP </title>
    <link rel="stylesheet" href="{{ url('/') }}/admin/style.css" />
    <link rel="icon" type="image/png" href="{{ asset('fav.png') }}">
    <!-- Boxicons CDN Link -->
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />

    
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
          <a href="{{route('home')}}" class="active">
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
        <div class="overview-boxes">
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Total Projet</div>
              <div class="number">{{$job->count()}}</div>
              <div class="indicator">

              </div>
            </div>
            <i class="bx bx-cart-alt cart"></i>
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Fond</div>
              <div class="number">{{$job->sum('price').'€'}}</div>
              <div class="indicator">
                
              </div>
            </div>
            <i class="bx bxs-cart-add cart two"></i>
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Max</div>
              <div class="number">{{$job->max('price').'€'}}</div>
              <div class="indicator">
                
              </div>
            </div>
            <i class="bx bx-cart cart three"></i>
          </div>
          <div class="box">
            <div class="right-side">
              <div class="box-topic">Min</div>
              <div class="number">{{$job->min('price').'€'}}</div>
              <div class="indicator">
                
              </div>
            </div>
            <i class="bx bxs-cart-download cart four"></i>
          </div>
        </div>

        <div class="sales-boxes" >
          <div id="mon-chart" class="" style="height: 500px; width: 900px;" ></div>
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


 google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['user', 'role'],
      @foreach ($users as $users) // On parcourt les catégories
      [ "{{ $users->name }}", {{ $users->users->count() }} ], // Proportion des produits de la catégorie
      @endforeach
    ]);

    var options = {
      title: 'Proportion des utilisaturs par roles:', // Le titre
      is3D : true // En 3D
    };

    // On crée le chart en indiquant l'élément où le placer "#mon-chart"
    var chart = new google.visualization.PieChart(document.getElementById('mon-chart'));

    // On désine le chart avec les données et les options
    chart.draw(data, options);
  }
    </script>
  </body>
</html>
