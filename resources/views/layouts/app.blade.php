<html>
	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
		<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
		<link rel="stylesheet" type="text/css"  href="{{asset('css/style.css')}}" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
	</head>
	<title>@yield('title') CRUD Laravel</title>

<body>

<div class="container-fluid">
	<div class="menu">

<ul class="nav">
	@if(auth()->check())

  <li class="nav-item">
    <a class="nav-link" href="{{route('home.index')}}">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('category.index')}}">Categorias</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('product.index')}}">Productos</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" href="{{route('precio.index')}}">Precios</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('inventario.index')}}">Inventario</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('login.destroy')}}">Log out</a>
  </li>
  @else

  <li class="nav-item">
    <a class="nav-link" href="{{route('login.index')}}">Log in</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('register.index')}}">Register</a>
  </li>
  @endif
</ul>
	</div>
</div>
	@yield('content')
</body>
  
  <div class="container-fluid footer">
    <div >

        <div class="row">

          <div class="col-xs-12 col-md-6 col-lg-6 ">

          <h1>Programador:</h1>

          <p>Norberth Avilan</p>
          
        </div>
         <div class="col-xs-12 col-md-6 col-lg-6 ">

           <h1>Proyecto:</h1>

          <p>CRUD</p>
          
          
        </div>
      
    </div>

  </div>

</html>
