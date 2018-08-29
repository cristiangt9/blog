@extends('admin.layout')


@section('content-header')

	<section class="content-header">
      <h1>
        Todas las publicaciones
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Posts</li>
      </ol>
    </section>
@stop



@section('content')

	          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="posts-table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Título</th>
                  <th>Extracto</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                               <tbody>
               	@foreach ($posts as $post )
				<tr>
               		<th>{{$post->id}}</th>
               		<th>{{$post->title}}</th>
               		<th>{{$post->excerpt}}</th>
               		<th>
               			<a href="{{ route('posts.show', ['post' => $post->url] ) }}" target="_blank" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></a>
               			<a href="{{ route('posts.edit', ['post' => $post->url] ) }}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                    <form style="display:inline" method="POST" action="{{ route('posts.delete', ['post' => $post->url] ) }}"> 
                      @csrf
                      @method('DELETE')

                    <button class="btn btn-xs btn-danger" onclick="return confirm('¿Estás seguro de querer eliminar esta publicación?')" type="submit"><i class="fa fa-remove"></i></button>
                    </form>
                    
               	@endforeach
               </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Título</th>
                  <th>Extracto</th>
                  <th>Acciones</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
@stop

