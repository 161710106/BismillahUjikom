@extends('layouts.admin')
@section('css')

@endsection
@section('js')
<script src="{{asset('/asset/js/components/datatables-init.js')}}"></script>
@endsection
@section('header')
<nav class="breadcrumb-wrapper" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/admin')}}"><i class="icon dripicons-home"></i></a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">testimonis</a></li>
    </ol>
</nav>
@endsection
@section('content')
<div class="col-12">

<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Kategori Barang</h3>
              <center>
        <a href="{{ route('testi.create') }}" class="fa fa-plus-square btn btn-primary btn-rounded btn-floating ">
            Tambah Data
        </a>

    </center>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
						<thead>
			  		<tr>
			  		<th>No</th>
			  		  <th>Nama</th>
			  		  <th>Gambar</th>
			  		  <th>Testimoni</th>
			  		 
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($testimonis as $data)
				  	  <tr>
				  	  <td>{{ $no++ }}</td>
				    	<td><p>{{ $data->nama}}</p></td>
				  	    <td><p><a href="" class="thumbnail">
				  	    	<img src=" {{ asset ('assets/img/testimoni/' .$data->gambar. '' ) }}" width="100" height="100"></p></td>
				    	<td><p>{!! $data->testimoni !!}</p></td>
				    	
                    <td>
                        <form method="post" action="{{ route('testi.destroy',$data->id) }}">
                        <a href="{{ route('testi.edit',$data->id) }}" class="btn btn-warning">Edit</a>
                                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger js-submit-confirm" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach

                </tbody>

            </table>

   </div>
    </div>
        </div>
    </div>
</div>
@endsection
