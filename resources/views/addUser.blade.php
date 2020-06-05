<!doctype html>
<html lang="pt-br">
  <head>
    <title>Novo usuário</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
        <b4-h1>Novo Usuário</b4-h1>
    <form action="{{route('user.store')}}" method="post">
        @csrf
            <div class="col-md-12">
                <div class="form-group row">
                    <label for="nome" class="col-md-1-4 col-form-label"></label>
                    <div class="col-md-1-4">
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="nome">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-md-1-4 col-form-label"></label>
                    <div class="col-md-1-4">
                        <input type="email" class="form-control" name="email" id="email" placeholder="E-mail">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="senha" class="col-md-1-4 col-form-label"></label>
                    <div class="col-md-1-4">
                        <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="salvar" class="col-md-1-3 col-form-label"></label>
                    <div class="col-md-3">
                        <button type="submit" id="salvar" class="btn btn-primary">Salvar</button>
                    </div>
                </div>
            </div>
        </form>
       








    </div>  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>