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
        <li class="breadcrumb-item"><a href="javascript:void(0)">pinjams</a></li>
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
        <a href="{{ route('pinjam.create') }}" class="fa fa-plus-square btn btn-primary btn-rounded btn-floating ">
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
					 
					  <th>Nama Konsumen</th>
					  <th>Alamat Konsumen</th>
                      <th>No Hp</th>
                      <th>Jenis Barang</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($pinjam as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    
				    	<td>{{ $data->nama_kons }}</td>
				    	<td>{!! $data->alamat !!}</td>
                        <td>{{ $data->no_hp }}</td>
                        <td>{{ $data->Barangg->nama_barang}}</td>

                    <td>
                        <form method="post" action="{{ route('pinjam.destroy',$data->id) }}">
                        <a href="{{ route('pinjam.edit',$data->id) }}" class="btn btn-warning ">Edit</a>
                        <a href="{{ route('pinjam.show',$data->id) }}" class="btn btn-warning ">Show</a>
                        <a class="fa fa-plus-square btn btn-primary btn-rounded btn-floating" href="{{ url('/pinjam/report/{view_type}') }}">
        PDF</a>
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
