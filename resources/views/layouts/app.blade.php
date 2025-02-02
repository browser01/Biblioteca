<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css" />
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/">{{ config('app.name') }}</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="{{ Request::is('clientes') ? 'active' :'' }} dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Clientes <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="/clientes">Ver</a></li>
                    <li><a href="/clientes/create">Crear</a></li>
                  </ul>
                </li>
                <li class="{{ Request::is('contact') ? 'active' :'' }}"><a href="/contact">Contacto</a></li>
              </ul>
              
              
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
</div>

<div class="container">

  @yield('content')
 
</div>


      <footer>
          <div class="container">
             {{ config('app.name') }}&copy;.  Todos Los derechos Reservados
          </div>
      </footer>

      <script src="/js/app.js"></script>
</body>
</html>