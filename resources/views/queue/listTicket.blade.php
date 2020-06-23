@extends('site.master.layout')

@section('content')
    <div class="container-fluid">
      <div class="container">
        <h1 style="align-content: center;"><i class="fas fa-h1"></i>Chamados</h1>
          <div class="card mb-4">
              <div class="card-header">
                  <i class="fas fa-table mr-1"></i>Listagem de Chamados
                 
              </div>
              <div class="card-body">
                  <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-inverse">
                          <tr>
                            <th>ID</th>
                            <th>Resumo</th>
                            <th>Descrição</th>
                            <th>Categoria</th>
                            <th>Setor</th>
                          </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td scope="row">{{$ticket->id }}</td>
                                <td>{{$ticket->summary }}</td>
                                <td>{{$ticket->description }}</td>
                                <td>{{$ticket->category()->first()->title}}</td>
                                <td>{{$ticket->setor()->first()->name }}</td>
                                
                                
                            </tr>
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
