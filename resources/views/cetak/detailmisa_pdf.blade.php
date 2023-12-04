<!DOCTYPE html>
<html>
<head>
	<title>Laporan Data Pendaftar Misa  </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table {
  border-collapse: collapse;
  width: 100%;
}

td{
  border: 1px solid #dddddd;
  text-align: left;
  text-align: center;
}

th{
  background-color: white;
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  text-align: center;
}

h4{
    text-align: center;
}

p{
    text-align: center;
}

b{
    text-align: left;
}
	</style>
      
    <h4>Data Umat Pendaftar Misa</h4>
    <P>Gereja Santa Maria Assumpta Gamping</P>
	<table class="table table-bordered" style="padding-top:15px">
		<thead>
			<tr>
            <th>Jadwal Misa</th> 
            <th>Nama Lengkap</th> 
            <th>Asal Lingkungan</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Jumlah Terdaftar</th>
			</tr>
		</thead>
		<tbody>    
            @foreach ($view_data as $daftarmisa)   
            <tr>
            <td>{{$daftarmisa->jadwal}}</td> 
            <td>{{$daftarmisa->nama}}</td> 
            <td>{{$daftarmisa->lingkungan}}</td> 
            <td>{{$daftarmisa->alamat}}</td>
            <td>{{$daftarmisa->jns_klmn}}</td>
            <td>{{$daftarmisa->jumlah}} Orang</td> 
			</tr>	
            @endforeach          
		</tbody>
	</table> 
</body>
</html>










