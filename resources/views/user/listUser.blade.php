@extends('site.master.layout')

@section('content')
    <div class="container-fluid">
      <h1>Usuário</h1>

              <h2>{{$user->name }}</h2>
              <p>{{$user->email }}</p>
              <p>{{ date('d/m/Y H:i', strtotime( $user->created_at))}}</p>


    </div>
@endsection
@section('scripts')

@endsection
