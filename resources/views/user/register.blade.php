@extends('site.master.layout')

@section('content')
<div class="container-fluid">
    <div class="container">
        <div class="card mb-4">
            <div class="card-header">
                Novo Usuário
            </div>
            <div class="card-body">

                <form action="{{route('user.store')}}" method="post">
                    @csrf
                    <div class="col-md-12">
                        <div class="row" >
                            <div class="form-group col-md-6">
                                <label for="name">Nome</label>


                                    <input name="nome" id="nome" placeholder="nome" type="text" class="form-control" required autofocus>


                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input id="email" type="email" class="form-control" placeholder="E-mail" name="email" value="{{ old('email') }}" required autocomplete="email">
                            </div>
                        </div>
                        <div class="row" >
                            <div class="form-group col-md-6">
                                <label for="setor" >Setor</label>
                                   <select name="setor" id="setor" class="form-control">
                                       <option>Selecione...</option>
                                   </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="level" >Level</label>
                                    <select name="level" id="level" class="form-control">
                                        <option>Selecione...</option>
                                    </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="senha" class="col-form-label">Senha</label>
                            <div class="col-md-1-4">
                                <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="salvar" class="col-md-1-3 col-form-label"></label>
                            <div class="col-md-3">
                                <button type="submit" id="salvar" class="btn btn-primary">Salvar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
@section('scripts')
<script>
    $( document ).ready(function() {
       selectSetor();
       selectlevel();
    });
    function selectSetor(){
        $.get("{{route('select.setores')}}", function(data){
            $('#setor').html(data);
        });
    }
    function selectlevel(){
        $.get("{{route('select.levels')}}", function(data){
            $('#level').html(data);
        });
    }
</script>
@endsection
