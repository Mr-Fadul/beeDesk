<!doctype html>
<html lang="pt-br">
  <head>
    <title>Post</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
              <h1>artigo</h1>
            
              <p>Titulo:{{$post->title }} / subtitulo: {{$post->subtitle }}</p>  
             
              <div class="form-group">
                <label for=""></label>
              <textarea class="form-control" name="" id="" rows="3">{{$post->content}}</textarea>
              </div>
              <h3>Autor</h3>

              <h4>{{$user->name }}</h4>
              <p>{{$user->email }}</p>
              <p>{{ date('d/m/Y H:i', strtotime( $user->created_at))}}</p>

              <h4>categorias </h4>
              @foreach ($categories as $categorie)
                  <p>{{$categorie->title}} // {{$categorie->description}}</p>
              @endforeach
              

    </div>  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>