<!doctype html>
<html lang="pt-br">
  <head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url(mix('site/css/bootstrapplus.css'))}}" >
    <link rel="stylesheet" href="{{ url(mix('site/css/style.css'))}}" >
  </head>
  <body>
    <body>

        <header>
          <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#">Laratip´s</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item {{(Route::current()->getName() === 'site.home' ? 'active' : '')}} ">
                <a class="nav-link" href="{{route('site.home')}}">Home <span class="sr-only">(atual)</span></a>
                </li>
                <li class="nav-item  {{(Route::current()->getName() === 'site.curses' ? 'active' : '')}}">
                  <a class="nav-link" href="{{route('site.curses')}}">Cursos</a>
                </li>
                <li class="nav-item  {{(Route::current()->getName() === 'site.contact' ? 'active' : '')}}">
                  <a class="nav-link" href="{{route('site.contact')}}">Contato</a>
                </li>
              </ul>
              <form class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
              </form>
            </div>
          </nav>
        </header>
    
        <main role="main">

            @yield('content')

          <!-- FOOTER -->
          <footer class="container">
            <p class="float-right"><a href="#">Voltar ao topo</a></p>
            <p>&copy; Companhia S.A., {{date('Y')}} &middot; <a href="#">Privacidade</a> &middot; <a href="#">Termos</a></p>
          </footer>
        </main>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('site/js/jquery.js') }}"></script>
    <script src="{{ asset('site/js/bootstrap.js') }}"></script>
   
  </body>
</html>