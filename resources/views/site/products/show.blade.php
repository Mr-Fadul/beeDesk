@extends('site.master.layout')

@section('content')
<div class="container-fluid py-5">
    <div class="container">
        <div class="container">
        <h3>{{$product->title}}</h3>
        @foreach ($product->images as $image)
           <img  src="{{env('APP_URL')}}/storage/{{$image->path}}" >
        @endforeach
        </div>
    </div>    

</div>    
@endsection
