@extends('layouts.admin')
@section('content')
<div class="col-12">

<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data booking Barang</h3>
              <center>
     
    </center>
            </div>
            <!-- /.box-header -->
            <div class="box-body">



              <table id="example2" class="table table-bordered table-hover">
          	<form id="form-wizard" class="form-horizontal">
          		
              <div class="control-group">
			  			<label class="control-label"><h5>Nama  : {{ $booking->nama}}</h5></label>
			  			
			  	</div>

			  		<div class="control-group">
			  			<label class="control-label"><h5>Jenis Paket: {{ $booking->Harga->jenispaket}}</label>	</h5>
			  		</div>
                      <div class="control-group">
			  			<label class="control-label"><h5>Harga : {{ $booking->Harga->harga }}</h5></label>
			  			
			  	</div>
                  <div class="control-group">
			  			<label class="control-label"><h5>Uang Muka: {{ $booking->dp}}</label>	</h5>
			  		</div>
                      <div class="control-group">
			  			<label class="control-label"><h5>Uang sisa: {{ $booking->sisa}}</label>	</h5>
			  		</div>
			  	
				  <a href="{{ route('sukses.create') }}" class="fa fa-plus-square btn btn-primary btn-rounded btn-floating ">
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