<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <title>Laravel</title>
    </head>
    <body>
        
        <style type="text/css">
            .tabel { border-collapse: collapse; }
            .tabel th { padding: 8px 5px; background-color: #f60; color: #fff; }
            .tabel td { padding: 3px; }
        </style>
       
        

            <div style="padding: 4mm; border: 1px solid;" align="center">
                <p>
                <span style="font-size: 25px;">Data Pembayaran per Customer</span>
                
            </p>
            </div>
            <br>
            <br>
           
      
        
            <table class="table" border="1px" >
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
                         <?php $nomor = 2; ?>
                         @php $no = 2; @endphp
                         @foreach($pinjam as $data)
                       <tr>
                       <td>{{ $no++ }}</td>
                   
                       <td>{{ $data->nama_kons }}</td>
                       <td>{!! $data->alamat !!}</td>
                       <td>{{ $data->no_hp }}</td>
                       <td>{{ $data->Barangg->nama_barang}}</td>
               
                
            </table>
        </page>
      @endforeach

        </div>
    </body>
</html>