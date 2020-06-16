@extends('menu.layout')

@section('content')
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
@endsection
