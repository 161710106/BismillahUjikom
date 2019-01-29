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
        <li class="breadcrumb-item"><a href="javascript:void(0)">suksess</a></li>
    </ol>
</nav>
@endsection
@section('content')
<div class="col-12">

    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
              <center>
        <a href="{{ route('sukses.create') }}" class="fa fa-plus-square btn btn-primary btn-rounded btn-floating ">
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
                                <th>Nama Pemesan</th>
			  		
                      <th>kategori</th>
                      <th>Jenis Paket</th>
                      <th>Harga</th>
                      <th>Uang Muka</th>
                      <th>Uang Sisa</th>
                      <th>Uang Perlunasan</th>
                      <th>Status</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($sukses as $data)
				  	  <tr>
				  	  <td>{{ $no++ }}</td>
                        <td>{{ $data->nama}}</td>
				    	
							<td><p>{{ $data->kategori->kategori }}</p></td>
                            <td><p>{{ $data->Harga->jenispaket }}</p></td>
                            <td>Rp. {{ number_format ($data->Harga->harga)}},</td>
                            <td>Rp. {{ number_format ($data->dp)}},</td>
                            <td>Rp. {{ number_format ($data->sisa)}},</td>
                            <td>Rp. {{ number_format ($data->lunas)}},</td>
                           <td> @if($data->status == 1)
                                <form action="{{ route('sukses.publish',$data->id) }}" method="post">
                                   {{ csrf_field() }}
                                <a class="fa fa-check-square btn btn-primary btn-rounded btn-floating" data-toggle="modal" data-target="#MediumModal" ></a>
                                </form>
                                @elseif($data->publish == 0)
                                <form action="{{ route('sukses.publish',$data->id) }}" method="post">
                                    {{ csrf_field() }}
                                <button class="btn btn-info" type="submit"> Sewa </button>
                                </form>
                                </td>
                                @endif
                    <td>
                        <form method="post" action="{{ route('sukses.destroy',$data->id) }}">
                        <a href="{{ route('sukses.edit',$data->id) }}" class="btn btn-warning ">Edit</a>
                        
                                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger  js-submit-confirm" type="submit">Delete</button>
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
