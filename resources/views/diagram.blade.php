<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel - Google Chart</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
</head>
<body>
<div class="container">
	
	<h1>Mon diagramme</h1>

	<!-- L'élément "#mon-chart" où placer le chart -->
	<div id="mon-chart" style="height: 500px; width: 800px;" ></div>

</div>
<!-- Importation de l'API AJAX Google Charts -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['user', 'role'],
      @foreach ($user as $user) // On parcourt les catégories
      [ "{{ $user->name }}", {{ $user->users->count() }} ], // Proportion des produits de la catégorie
      @endforeach
    ]);

    var options = {
      title: 'Proportion des utilisaturs par roles', // Le titre
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