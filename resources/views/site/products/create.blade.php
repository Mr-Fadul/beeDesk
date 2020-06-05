@extends('site.master.layout')

@section('content')
<div class="container-fluid py-5">
    <div class="container">
        <div class="container">
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                <h3>Cadastar produtos</h3>
                @csrf
                <div class="form-group">
                  <label for="">Nome do produto</label>
                  <input type="text"
                    class="form-control" name="title" id="" aria-describedby="helpId" placeholder="">
                  <small id="helpId" class="form-text text-muted">titulo do produto</small>
                </div>
                <div class="form-group">
                  <label for="">Arquivo</label>
                  <input type="file" class="custon-file-input" name="images[]" id="" placeholder="" aria-describedby="fileHelpId" multiple>
                  <small id="fileHelpId" class="form-text text-muted">Upload de arquivos</small>
                </div>
               
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>    

</div>    
@endsection
