@extends('admin.layout')

@section('header')
<h1>
        Todas las publicaciones
        <small>Crear Publicacion</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route ('dashboard') }}" ><i class="fa fa-home"></i> Inicio</a></li>
        <li><a href="{{route ('admin.posts.index') }}" ><i class="fa fa-list"></i> Posts</a></li>
        <li class="active">Crear</li>
      </ol>
@stop

@section('content')
<div class="row">
<form method="POST" action="{{route('admin.posts.store')}}">
  {{csrf_field()}}
    <div class="col-md-8">

        <div class="box box-primary">
      
       
            <div class="box-body">
                <div class="form-group" {{ $errors->has('titulo') ? 'has-error':''}} >
                    <label>Titulo de la publicacion</label>
                    <input name="titulo" 
                    type="text" 
                    class="form-control" 
                    value="{{ old('titulo')}}"
                    placeholder="Ingresa aqui el titulo de la publicacion">
                    {!!$errors->first('titulo', '<span class="help-block">:message</span>')!!}  
                    
                  </div>
            </div>

            <div class="box-body" {{ $errors->has('body') ? 'has-error' : ''}}>
                <div class="form-group">
                    <label>Body de la publicacion</label>
                    <textarea rows = 10 
                    name="body" 
                    id="editor" 
                    type="text" 
                    class="form-control" 
                    placeholder="Ingresa el contenido completo de la publicacion">{{ old('body')}}</textarea>
                    {!!$errors->first('body', '<span class="help-block">:message</span>')!!}  
                </div>
            </div>
        
        
    </div>
</div>
<div class="col-md-4">
        <div class="box box-primary">

            <div class="box-body">
            <div class="form-group">
                <label>Fecha de publicacion:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input name="fecha_publicacion" 
                  type="text" 
                  value="{{ old('fecha_publicacion')}}"
                  class="form-control pull-right" 
                  id="datepicker">
                </div>                
              </div>
              
              <div class="form-froup" {{ $errors->has('category') ? 'has-error' : ''}}>
                <label>Categorias</label>
                <select name="category" id="" class="form-control">
                  <option value="">Selecciona una categoria</option>
                  @foreach($categories as $category)
                    <option value="{{ $category-> id}}"
                        {{ old ('category') ==$category->id ? 'selected' : '' }}
                    >{{$category->categoria}}</option>
                  @endforeach
                </select>
                {!!$errors->first('category', '<span class="help-block">:message</span>')!!}  
              </div>
              <div class="form-group">
              <label>Etiquetas</label>
              <select name="tags[]" id="" class="form-control select2" 
              multiple="multiple" 
              data-placeholder="Seleciona una o mas etiquetas" style="width: 100%;">
                @foreach($tags as $tag)
                  <option value="{{$tag->id}}">{{$tag->nombre}}</option>
                @endforeach
                </select>
              </div>
                <div class="form-group" {{ $errors->has('contenido') ? 'has-error' : ''}}>
                    <label>Descripcion de la publicacion</label>
                    <textarea rows = 4 name="contenido" type="text" class="form-control" placeholder="Ingresa la descripcion de la publicacion"></textarea>
                    {!!$errors->first('contenido', '<span class="help-block">:message</span>')!!}  
                  </div>
                <div class="form-group">
                  <button type = "submit" class="btn btn-primary btn-block">Guardar Publicacion</button>
                </div>
            </div>
        </div>
    </div>

    </form>
</div>


@stop
@push('styles')
<link rel="stylesheet" href="/adminlte/plugins/select2/select2.min.css">
<link rel="stylesheet" href="/adminlte/plugins/datepicker/datepicker3.css">
@endpush

@push('scripts')
<script src="/adminlte/plugins/select2/select2.full.min.js"></script>
<script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
<script src="/adminlte/plugins/datepicker/bootstrap-datepicker.js"></script>

<script>
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });
    CKEDITOR.replace('editor');
    $(".select2").select2();
</script>
@endpush

