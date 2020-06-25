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
    </div>
@endsection
@section('scripts')

@endsection
