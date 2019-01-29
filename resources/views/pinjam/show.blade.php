@extends('layouts.admin')
@section('content')
<div class="col-12">

<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pinjam Barang</h3>
              <center>
     
    </center>
            </div>
            <!-- /.box-header -->
            <div class="box-body">



              <table id="example2" class="table table-bordered table-hover">
          	<form id="form-wizard" class="form-horizontal">
          		
        			<div class="control-group">
			  			<label class="control-label"><h5>Nama  : {{ $pinjam->nama_kons}}</h5></label>
			  			
			  	</div>

			  		<div class="control-group">
			  			<label class="control-label"><h5>Alamat : {!! $pinjam->alamat !!}</h5></label>
			  			
			  	</div>

			  		<div class="control-group">
			  			<label class="control-label"><h5>No Hp : {{ $pinjam->no_hp}}</label>	</h5>
			  		</div>

			  		<div class="control-group">
			  			<label class="control-label"><h5>Tanggal sewa : {{ $pinjam->tgl_sewa }}</h5></label>
			  			
			  	</div>

			  		<div class="control-group">
			  			<label class="control-label"><h5>Tanggal Kembali : {{ $pinjam->tgl_kembali}}</h5></label>
			  	</div>

			  		<div class="control-group">
			  			<label class="control-label"><h5>Jenis Barang : {{ $pinjam->Barangg->nama_barang}}</h5></label>	
			  			
			  	</div>
				  <a href="{{ route('pengembalian.create') }}" class="fa fa-plus-square btn btn-primary btn-rounded btn-floating ">
            Kembalikan
        </a>  	</label>
			  </div>
			
		</form>
		</table>
	</div>
	</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

@endsection