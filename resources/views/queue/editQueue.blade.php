@extends('site.master.layout')

@section('content')
<div class="container-fluid">
      <div class="container">
      <div class="card mb-4">
              <div class="card-header">
                  <i class="fas fa-table mr-1"></i>Caracteristicas do chamado
                 
              </div>
              <div class="card-body">
                          <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-inverse">
                          <tr>
                            <th>Número</th>
                            <th>Usuário</th>
                            <th>Resumo</th>
                            <th>Descrição</th>
                            <th>Categoria</th>
                            <th>Setor</th>
                            <th>Criado</th>
                          </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td class="align-middle" scope="row">{{$ticket->id }}</td>
                                <td class="align-middle">{{$ticket->user()->first()->name }}</td>
                                <td class="align-middle">{{$ticket->summary }}</td>
                                <td class="align-middle">{{$ticket->description }}</td>
                                <td class="align-middle">{{$ticket->category()->first()->title}}</td>
                                <td class="align-middle">{{$ticket->setor()->first()->name }}</td>
                                <td class="align-middle">{{$ticket->created_at }}</td>
                                
                                
                            </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
        </div>
    </div>
<div class="container-fluid">
    <div class="container">
        <div class="card mb-4">
            <div class="card-header">
                Detalhes do atendimento
            </div>
            <div class="card-body">

                <form action="{{route('queue.store')}}" method="post">
                    @csrf
                    <div class="col-md-12">
                        <div class="row" >
                           
                        <div class="form-group col-md-6">
                            <label for="observation" class="col-form-label">Observações</label>
                            <div class="col-md-1-4">
                                <textarea type="text" class="form-control" name="observation" id="observation" placeholder="Observações sobre o atendimento do chamado" rows="5">{{$queue->observation}}</textarea>
                            </div>
                        </div>
                        
                        <div class="row" >
                            <div class="form-group col-md-6">
                                <label for="technician" >Responsável</label>
                                   <select name="technician" id="technician" class="form-control" required>
                                       <option>Selecione...</option>
                                   </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="priority" >Prioridade</label>
                                    <select name="priority" id="priority" class="form-control" required>
                                        <option>Selecione...</option>
                                    </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="status" >Status</label>
                                    <select name="status" id="status" class="form-control" required>
                                        <option>Selecione...</option>
                                    </select>
                            </div>   
                            <div class="form-group col-md-6">
                            
                            <div class="col-md-1-4">
                                <textarea type="text" class="form-control" name="queueid" id="queueid" placeholder="Observações sobre o atendimento do chamado" rows="1" width="2px" style="display:none;">{{$queue->id}}</textarea>
                            </div>
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
       selectStatus();
       selectPriority();
       selectUser();
    });
    function selectStatus(){
        $.get("{{route('select.status',['status' => $queue->status()->first()->title])}}", function(data){
            $('#status').html(data);
        });
    }
    function selectPriority(){
        $.get("{{route('select.priority',['priority' => $queue->priority()->first()->title])}}", function(data){
            $('#priority').html(data);
        });
    }
    function selectUser(){
        $.get("{{route('select.user',['technician' => optional($queue->technician()->first())->name])}}", function(data){
            $('#technician').html(data);
        });
    }
</script>
@endsection
