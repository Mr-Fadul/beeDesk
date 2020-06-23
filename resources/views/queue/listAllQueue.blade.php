@extends('site.master.layout')

@section('content')
    <div class="container-fluid">
      <div class="container">
        <h1 style="align-content: center;"><i class="fas fa-h1"></i>Fila de atendimento</h1>
          <div class="card mb-4">
              <div class="card-header">
                  <i class="fas fa-table mr-1"></i>Listagem da fila de Atendimento
                  
              </div>
              <div class="card-body">
                  <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-inverse">
                          <tr>
                            <th>ID</th>
                            <th>Chamado</th>
                            <th>Prioridade</th>
                            <th>Status</th>
                            <th>Responsável</th>
                            <th>Observação</th>
                            <th>Ação</th>
                          </tr>
                          </thead>
                          <tbody>
                            @foreach ($queues as $queue)
                            <tr>
                                <td scope="row">{{$queue->id }}</td>
                                <td>{{$queue->ticket()->first()->id }}</td>
                                <td>{{$queue->priority()->first()->title }}</td>
                                <td>{{$queue->status()->first()->title}}</td>
                                <td>{{optional($queue->technician()->first())->name }}</td>
                                <td>{{$queue->observation }}</td>
                                <td>editar</td>
                                
                            </tr>

                            @endforeach
                          </tbody>
                      </table>
                  </div>
              </div>
        </div>
      </div>
    </div>
@endsection
@section('scripts')

@endsection
