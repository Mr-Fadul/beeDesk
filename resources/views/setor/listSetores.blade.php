@extends('site.master.layout')

@section('content')
<div class="container-fluid">
    <div class="container">
        

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>Listagem de Setores
                <div class="float-right">
                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">Cadastrar</button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-inverse">
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($setores as $setor)
                            <tr>
                                <td scope="row">{{$setor->id }}</td>
                                <td>{{$setor->name }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastro Setor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form name="formSetor" method="post">
                <div class="modal-body">

                        @csrf
                        <div class="form-group">
                            <label>Nome do Setor</label>
                            <input type="text" name="nome" id="nome" class="form-control">
                        </div>

                    <div class="alert alert-danger d-none messageBox" role="alert">
                    </div>
                    <div class="alert alert-success d-none messageBoxTrue" role="alert">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(function(){
        $('form[name="formSetor"]').submit(function(){
            event.preventDefault();
            $.ajax({
                url:"{{route('add.setores')}}",
                type:"post",
                data:$(this).serialize(),
                dataType:"json",
                success: function(response){
                    if(response.success === true){
                        $('.messageBoxTrue').removeClass('d-none').html(response.message);
                    }else{
                        $('.messageBox').removeClass('d-none').html("Erro! "+response.message);
                    }
                }
            });
        });
    });
</script>
@endsection
