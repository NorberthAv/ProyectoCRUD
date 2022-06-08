<html>
	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
	  	<link rel="stylesheet" type="text/css"  href="{{asset('css/style.css')}}" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
	</head>
	<title>@yield('title') CRUD Laravel</title>

<body>

<div class="container-fluid">
	<div class="menu">
    <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    @if(auth()->check())
    <ul class="navbar-nav">
      <li class="nav-item active">
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
</nav>
	</div>
</div>
	@yield('content')
</body>

  <div class="container-fluid footer">
    <div >

        <div class="row">

          <div class="col-xs-12 col-md-6 col-lg-6 ">

          <h1>Programador:</h1>

         <b> <h4>Norberth Avilan</h4></b>
          <p>norberthavilan@gmail.com</p>
          <p>+58-4164135060</p>
          <p>+58-4129295288</p>
          
        </div>
         <div class="col-xs-12 col-md-6 col-lg-6 ">

           <h1>Proyecto:</h1>

         <b> <p>CRUD</p></b>
          <br>
          <p>Especificaciones:</p>
          <p>Laravel 8 | PostgreSQL 14 | Bootstrap</p>

          
          
        </div>
      
    </div>

  </div>
 
  <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/boot.js')}}"></script>
  
</html>
