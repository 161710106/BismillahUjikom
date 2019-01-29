@extends('layouts.admin')
@section('content')
<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            
				<center><h1>Y o u t u b e</h1></center>
			  
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('youtube.update',$youtube->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
			  			<label class="control-label">Title</label>	
			  			<input type="text" name="title" class="form-control" value="{{ $youtube->title }}"  required>
			  			@if ($errors->has('title'))
                            <span class="help-block">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('url') ? ' has-error' : '' }}">
			  			<label class="control-label">Url</label>	
			  			<input type="text" name="url" class="form-control" value="{{ $youtube->url }}"  required>
			  			@if ($errors->has('url'))
                            <span class="help-block">
                                <strong>{{ $errors->first('url') }}</strong>
                            </span>
                        @endif
			  		</div>
			  	

			  		
			  		<div class="form-group">
						  <button type="submit" class="btn btn-primary">Edit</button>
						  <a href="{{ route('youtube.index') }}" class="btn btn-danger btn-rounded btn-floating "> Back </a>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection