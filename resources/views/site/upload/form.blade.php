@extends('site.master.layout')

@section('content')
<div class="container-fluid py-5">
    <div class="container">
        <div class="container">
            <form action="{{ route('site.upload') }}" method="POST" enctype="multipart/form-data">
                <h3>Upload de arquivo</h3>
                @csrf
                <div class="form-group">
                  <label for="">Arquivo</label>
                  <input type="file" class="form-control-file" name="arquivo" id="" placeholder="" aria-describedby="fileHelpId">
                  <small id="fileHelpId" class="form-text text-muted">Upload de arquivo</small>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>    












</div>    
@endsection