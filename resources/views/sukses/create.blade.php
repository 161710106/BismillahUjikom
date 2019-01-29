@extends('layouts.admin')
@section('js')
<script src="{{ asset('asset/tinymce/js/tinymce/tinymce.js') }}"></script>
<script type="text/javascript">
    tinymce.init({
  selector: 'textarea',
  height: 300,
  theme: 'modern',
  plugins: 'print preview fullpage  searchreplace autolink directionality  visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount   imagetools  contextmenu colorpicker textpattern help',
  toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });

</script>
@endsection
@section('header')
<nav class="breadcrumb-wrapper" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/admin')}}"><i class="icon dripicons-home"></i></a></li>
        <li class="breadcrumb-item"><a href="{{route('sukses.index')}}">suksess</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">Tambah suksess</a></li>
    </ol>
</nav>
@endsection
@section('content')
<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            <center><h3 class="box-title">Tambah Data suksess</h3></center>
                <form action="{{ route('sukses.store') }}" method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="form-group {{$errors->has('nama') ? 'has-error' : '' }}">
				<label class="control-label">Nama Pemesan</label>
				<input type="text"  name="nama" class="form-control" required>
				@if ($errors->has('nama'))
				<span class="help-block"><strong>{{ $errors->first('nama') }}</strong></span>
				@endif
			</div> 
                    <div class="form-group {{$errors->has('dp') ? 'has-error' : '' }}">
				<label class="control-label">Uang Muka</label>
				<input type="number"  name="dp" class="form-control" required>
				@if ($errors->has('dp'))
				<span class="help-block"><strong>{{ $errors->first('dp') }}</strong></span>
				@endif
			</div>
            <div class="form-group {{$errors->has('sisa') ? 'has-error' : '' }}">
				<label class="control-label">Uang Sisa</label>
				<input type="number"  name="sisa" class="form-control" required>
				@if ($errors->has('sisa'))
				<span class="help-block"><strong>{{ $errors->first('sisa') }}</strong></span>
				@endif
			</div>
            <div class="form-group {{$errors->has('lunas') ? 'has-error' : '' }}">
				<label class="control-label">Uang Perlunasan</label>
				<input type="number"  name="lunas" class="form-control" required>
				@if ($errors->has('lunas'))
				<span class="help-block"><strong>{{ $errors->first('lunas') }}</strong></span>
				@endif
			</div>
            <div class="form-group {{ $errors->has('kategori_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Kategori</label>	
			  			<select name="kategori_id" class="form-control">
			  				@foreach($kategoris as $data)
			  				<option value="{{ $data->id }}">{{ $data->kategori }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('kategori_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kategori_id') }}</strong>
                            </span>
                        @endif
					</div> 
                    </div>  
					<div class="form-group {{ $errors->has('harga_id') ? ' has-error' : '' }}">
			  			<label class="control-label">paket</label>	
			  			<select name="harga_id" class="form-control">
			  				@foreach($hargas as $data)
			  				<option value="{{ $data->id }}">{{ $data->jenispaket}}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('harga_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga_id') }}</strong>
                            </span>
                        @endif
					</div> 
                   
  <div class="card-footer bg-light">
                <button type="submit" class="btn btn-success">Simpan</button>
                <button type="button" class="btn btn-secondary clear-form">Clear</button>
            </div>
        </form>
    </div>
	<script type="text/javascript" src="{{asset ('ckeditor/ckeditor.js')}}"></script>
</div>
@endsection

