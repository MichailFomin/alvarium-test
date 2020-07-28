@extends('alvarium.app')

@section('content')

   <div class="row">
      <div class="col-12">
         <form action="{{ route('upload.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
               <label for="exampleFormControlFile1">Загрузите файл XML</label>
               <input type="file" name=file_xml class="form-control-file" id="exampleFormControlFile1">
            </div>
            <div class="form-group row">
               <button class="btn btn-primary btn-sm">Загрузить</button>
            </div>
         </form>
      </div>
   </div>

@endsection


