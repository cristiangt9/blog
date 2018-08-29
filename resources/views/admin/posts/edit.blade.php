@extends('admin.layout')


@section('content-header')

	<section class="content-header">
      <h1>
        Editar Post
        <small>Editar Publicación</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li> <a href="{{route('posts')}}"><i class="fa fa-list"></i>Posts</a></li>
        <li class="active">Editar</li>
      </ol>
    </section>
@stop



@section('content')

  <div class="row">
  <form method="POST" action="{{ route('posts.update',$post)}}">
    @csrf
    @method('PUT')
    <div class="col-md-8">
      <div class="box box-success">
        <div class="box-header">
          <h3 class="box-title">Editar Publicación</h3>
        </div>
          <div class="box-body">
            <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
              <label>Título de la publicación</label>
                <input class="form-control" type="text" name="title" placeholder="Ingresa aquí el título de la publicación" value="{{old('title', $post->title)}}">
                <div>{!! $errors->first('title','<span class="help-block">:message</span>') !!}</div>
            </div>
            <div class="form-group {{ $errors->has('body') ? 'has-error' : ''}}">
              <label>Contenido de la publicación</label>
              <textarea type="text" class="form-control" name="body" id="editor" placeholder="Ingresa aquí el contenido de la publicación"  >{{old('body', $post->body)}}</textarea>
              <div class="text-danger">{!! $errors->first('body','<span class="help-block">:message</span>') !!} </div>
            </div>
          </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="box box-success">
        <div class="box-content">
          <div class="form-group {{ $errors->has('published_at') ? 'has-error' : ''}}">
                <label>Fecha de Publicación:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input name="published_at" type="text" class="form-control pull-right" id="datepicker" value="{{old('published_at', $post->published_at->format('m/d/Y'))}}">
                  <div class="text-danger">{!! $errors->first('published_at','<span class="help-block">:message</span>') !!}</div>
                </div>
                <!-- /.input group -->
          </div>
          <div class="form-group {{ $errors->has('category_id') ? 'has-error' : ''}}">
            <label>Categoria</label>
            <select name="category_id" class="form-control select2">
              <option value="">Seleciona una categoría</option>
              @foreach($categories as $category)
                <option value="{{$category->id}}" {{ old('category_id', $post->category_id) == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
              @endforeach
            </select>
            <div class="text-danger">{!! $errors->first('category_id','<span class="help-block">:message</span>') !!}</div>
          </div>
          <div class="form-group {{ $errors->has('tags') ? 'has-error' : ''}}">
                <label>Etiquetas</label>
                <select name="tags[]" class="form-control select2" multiple="multiple" data-placeholder="Seleccione una o varias Etiquetas"
                        style="width: 100%;" >
                  @foreach($tags as $tag)
                    <option {{ collect(old('tags',$post->tags->pluck('id')))->contains($tag->id) ? 'selected' : ''}} value="{{$tag->id}}">{{$tag->name}}</option>
                  @endforeach
                </select>
                <div class="text-danger">{!! $errors->first('tags','<span class="help-block">:message</span>') !!}</div>
              </div>
          <div class="form-group {{ $errors->has('excerpt') ? 'has-error' : ''}}">
            <label>Extracto de la publicación</label>
            <input type="text" class="form-control" name="excerpt" placeholder="Ingresa aquí el extracto de la publicación" value="{{old('excerpt', $post->excerpt)}}">
            <div class="text-danger">{!! $errors->first('excerpt','<span class="help-block">:message</span>') !!}</div>
          </div>
          <div class="form-group">
          	<div class="dropzone"></div>
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-success btn-block" name="Actualizar Publicación">
          </div>
        </div>
      </div>
    </div>
  </form>
  @if($post->photos->count()>0)
    <div class="col-md-12">
      <div class="box box-success">
        <div class="box-body">
          <div class="row">
            <label>Fotos:</label>
            @foreach( $post->photos as $photo)
              <form method="POST" action="{{ route('photos.delete', $photo)}}">
                @csrf
                @method('DELETE')
                <div class="col-md-2">
                  <button class="btn btn-xs btn-danger" type="submit" style="position: absolute"><i class="fa fa-remove"></i></button>
                  <img src="{{ url($photo->url) }}" class="img-responisve" style="width: 40%; height: 40%; ">
                </div>
              </form>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  @endif
  </div>
@stop


@section('script')
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="{{ asset('adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">

  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('adminlte/bower_components/select2/dist/css/select2.min.css')}}">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css">

 
<!-- CK Editor -->
<script src="{{ asset('adminlte/bower_components/ckeditor/ckeditor.js')}}"></script>

<script src="{{ asset('adminlte/bower_components/select2/dist/js/select2.full.min.js')}}"></script>

  <!-- datepicker -->
<script src="{{ asset('adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
 <script>
    $(function () {
      $('#datepicker').datepicker({
          autoclose: true
      })
      
    })
  </script>

  <script>
    //Initialize Select2 Elements
    $('.select2').select2({
      tags: true
    });

  </script>
  
  <script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('body');
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5();






</script>

<script>

		var myDropzone = new Dropzone("div.dropzone",{
    		url: "/admin/posts/{{ $post->url }}/photos",
    		acceptedFiles: 'image/*',
    		maxFilesize: 2,
    		paramName: 'photo',
    		headers: {
    			'X-CSRF-TOKEN': '{{ csrf_token()}}'
    		},
    		dictDefaultMessage: 'Arrastra las fotos hasta aquí para subirlas ó haz click aqui'
   		});

   		myDropzone.on('error', function(file, res){
   			var msg = res.photo[0];
   			$('.dz-error-message:last > span').text(msg);
   		})

    	Dropzone.autoDiscover = false;
</script>

@endsection

