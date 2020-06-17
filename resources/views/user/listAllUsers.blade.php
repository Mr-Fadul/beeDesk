@extends('site.master.layout')

@section('content')
    <div class="container-fluid">
      <div class="container">
        <h1 style="align-content: center;"><i class="fas fa-h1"></i>Usuários</h1>
          <div class="card mb-4">
              <div class="card-header">
                  <i class="fas fa-table mr-1"></i>Listagem de Usuários
                  <div class="float-right">
                      <a href="{{route('user.add')}}" >
                        <button type="button" class="btn btn-dark" >Cadastrar</button>
                      </a>
                  </div>
              </div>
              <div class="card-body">
                  <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-inverse">
                          <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Setor</th>
                            <th>Level</th>
                            <th>Ações</th>
                          </tr>
                          </thead>
                          <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td scope="row">{{$user->id }}</td>
                                <td>{{$user->name }}</td>
                                <td>{{$user->email }}</td>
                                <td>{{$user->setor()->first()->name}}</td>
                                <td>{{$user->level()->first()->name }}</td>
                                <td>
                                    <a href="{{route('user.list',['user' => $user->id])}}">Ver Usuário</a>

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
