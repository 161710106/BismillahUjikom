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
        <li class="breadcrumb-item"><a href="javascript:void(0)">fortopolios</a></li>
    </ol>
</nav>
@endsection
@section('content')
<div class="col-12">

    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Fortopolio</h3>
              <center>
        <a href="{{ route('fortopolios.create') }}" class="fa fa-plus-square btn btn-primary btn-rounded btn-floating ">
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
                        <th>Foto</th>
                        <th>deskripsi</th>
                        <th>Kategori</th>
                      <th colspan="3"><center>Action</center></th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $nomor = 1; ?>
                        @php $no = 1; @endphp
                        @foreach($fortopolios as $data)
                      <tr>
                            <td>{{ $no++ }}</td>
                            <td><img src="{{asset('/assets/img/fotofortopolio/'.$data->foto.'')}}" width="70" height="70"></td>
                          
                            <td>{!! $data->deskripsi !!}</td>
                            <td><p>{{ $data->kategori->kategori }}</p></td>
                         
                    <td>
                        <form method="post" action="{{ route('fortopolios.destroy',$data->id) }}">
                        <a href="{{ route('fortopolios.edit',$data->id) }}" class="btn btn-warning btn-outline">Edit</a>
                                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger btn-outline js-submit-confirm" type="submit">Delete</button>
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
