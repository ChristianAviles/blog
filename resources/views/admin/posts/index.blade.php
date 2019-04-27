@extends('admin.layout')

@section('header')
<h1>
        Todas las publicaciones
        <small>Todas las publicaciones</small>
      </h1>
      <ol class="breadcrumb">
      <li><a href="{{route ('dashboard') }}" ><i class="fa fa-home"></i> Inicio</a></li>
        <li class="active">Posts</li>
      </ol>
@stop

@section('content')
 <!-- /.box -->

 <div class="box">
            <div class="box-header">
              <h3 class="box-title">Listado de publicaciones</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="posts-table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Titulo</th>
                  <th>Contenido</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($posts as $post)
                    <tr>
                      <td> {{$post ->id}} </td>
                      <td> {{$post ->titulo}} </td>
                      <td> {{$post ->contenido}} </td>
                      <td>
                         <a href="#" class="btn btn-xs btn-info"><i class = "fa fa-pencil"></i></a>
                         <a href="#" class="btn btn-xs btn-danger"><i class = "fa fa-times"></i></a>
                    </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
@stop

@push('styles')
<link rel="stylesheet" href="/adminlte/plugins/datatables/dataTables.bootstrap.css">
@endpush

@push('scripts')
<script src="/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/adminlte/plugins/datatables/dataTables.bootstrap.min.js"></script>

<script>
    $(function () {
      $('#posts-table').DataTable({
    /*     "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false
      }); */
    });
  </script>

@endpush
