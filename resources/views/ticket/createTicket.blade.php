@extends('site.master.layout')

@section('content')
<div class="container-fluid">
    <div class="container">
        <div class="card mb-4">
            <div class="card-header">
                Novo Chamado
            </div>
            <div class="card-body">

                <form action="{{route('ticket.store')}}" method="post">
                    @csrf
                    <div class="col-md-12">
                        <div class="row" >
                            <div class="form-group col-md-6">
                                <label for="name">Resumo</label>


                                    <input name="summary" id="summary" placeholder="Resumo do chamado" type="text" class="form-control" required autofocus>


                            </div>
                        </div>
                        <div class="form-group">
                            <label for="senha" class="col-form-label">Descrição</label>
                            <div class="col-md-1-4">
                                <textarea type="text" class="form-control" name="description" id="description" placeholder="Descrição detalhada do chamado" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="row" >
                            <div class="form-group col-md-6">
                                <label for="setor" >Categoria</label>
                                   <select name="category" id="category" class="form-control">
                                       <option>Selecione...</option>
                                   </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="level" >Setor</label>
                                    <select name="setor" id="setor" class="form-control">
                                        <option>Selecione...</option>
                                    </select>
                            </div>
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
        $.get("{{route('select.categorias')}}", function(data){
            $('#category').html(data);
        });
    }
</script>
@endsection
