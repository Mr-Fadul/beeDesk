<!doctype html>
<html lang="pt-br">
  <head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url(mix('menu/css/bootstrapplus.css'))}}" >
    <link rel="stylesheet" href="{{ url(mix('menu/css/style.css'))}}" >
  </head>
  <body>
    <body>



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
    <script src="{{ asset('menu/js/jquery.js') }}"></script>
    <script src="{{ asset('menu/js/bootstrap.js') }}"></script>

  </body>
</html>
