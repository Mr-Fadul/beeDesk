@extends('site.master.layout')

@section('content')
    <div class="container-fluid">
      <div class="container">

          <div class="card mb-4">
              <div class="card-header">
                  <i class="fas fa-table mr-1"></i>Listagem da fila de Atendimento
                  
              </div>
              <div class="card-body">
                  <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-inverse">
                          <tr>
                            <th>Chamado</th>
                            <th>Prioridade</th>
                            <th>Status</th>
                            <th>Responsável</th>
                            <th>Observação</th>
                            <th>Atualizado</th>
                            <th>Ação</th>
                          </tr>
                          </thead>
                          <tbody>
                            @foreach ($queues as $queue)
                            <tr>
                                <td class="align-middle">{{$queue->ticket()->first()->id }}</td>
                                <td class="align-middle">{{$queue->priority()->first()->title }}</td>
                                <td class="align-middle">{{$queue->status()->first()->title}}</td>
                                <td class="align-middle">{{optional($queue->technician()->first())->name }}</td>
                                <td class="align-middle">{{$queue->observation }}</td>
                                <td class="align-middle">{{$queue->updated_at }}</td>
                                <td class="align-middle">
                                    <div style="margin-bottom: 4px;">
                                    <a class="btn btn-light btn-sm" role="button" style="margin-bttom: 5px;" href="{{route('queue.listTicket',['ticket' => $queue->ticket()->first()->id])}}">Visualizar</a>
                                  </div>
                                  <div>
                                     <a class="btn btn-light btn-sm" role="button" href="{{route('queue.editQueue',['queue' => $queue->id, 'ticket' => $queue->ticket()->first()->id])}}">Editar</a>
                                     </div>
                                </td>
                                
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
