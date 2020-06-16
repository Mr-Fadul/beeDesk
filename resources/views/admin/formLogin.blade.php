<!doctype html>
<html lang="pt-br">
    <head>
        <title>Login admin</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            html,body {
            height: 100%;
            }

            body {
            display: -ms-flexbox;
            display: -webkit-box;
            display: flex;
            -ms-flex-align: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
            }

            .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
            }
            .form-signin .checkbox {
            font-weight: 400;
            }
            .form-signin .form-control {
            position: relative;
            box-sizing: border-box;
            height: auto;
            padding: 10px;
            font-size: 16px;
            }
            .form-signin .form-control:focus {
            z-index: 2;
            }
            .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            }
            .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            }
        </style>
    </head>

  <body class="text-center">
    <div class="container-fluid">
        <div class="container">

            <form class="form-signin" name="formLogin">
                @csrf
                <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

                        <div class="alert alert-danger d-none messageBox" role="alert">

                        </div>

                <div class="form-group">
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="text" id="email" name="email" class="form-control" value="marcello@email.com" placeholder="Email address" required autofocus>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                </div>

                <div class="checkbox mb-3">
                    <label>
                    <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <div class="form-group">
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                </div>
                {{-- <p class="mt-5 mb-3 text-muted">&copy; </p> --}}
            </form>
        </div>
    </div>
    <script src="{{'../site/js/jquery.js'}}"></script>
    <script src="{{'../site/js/bootstrap.js'}}"></script>
    <script>
        $(function(){
            $('form[name="formLogin"]').submit(function(){
                event.preventDefault();
              $.ajax({
                url:"{{route('admin.login.do')}}",
                type:"post",
                data:$(this).serialize(),
                dataType:"json",
                success: function(response){
                    if(response.success === true){
                        window.location.href="{{route('home')}}";
                    }else{
                        $('.messageBox').removeClass('d-none').html("Erro! "+response.message);
                    }
                }
              });
            });
        });
    </script>
  </body>
</html>
