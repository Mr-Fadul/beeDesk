@extends('site.master.layout')

@section('content')
<div class="jumbotron">
    <div class="container text-center">
        <h1 class="display-4">Contato</h1>
        <hr class="my-4">
        <p class="lead">Este é um simples componente jumbotron para chamar mais atenção a um determinado conteúdo ou informação.</p>      
        <p>Ele usa classes utilitárias para tipografia e espaçamento de conteúdo, dentro do maior container.</p>
    </div>
  </div>
<div class="container-fluid">
    <div class="container">
        <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Endereço de email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
              <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Senha</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Clique em mim</label>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
    </div>
</div>
@endsection