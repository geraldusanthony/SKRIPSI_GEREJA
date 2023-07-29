<!DOCTYPE html>
<html>
<head>
	<title>Laporan Data Persembahan Kolekte Gereja St. Maria Assumpta Gamping</title>
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
  padding: 8px;
  text-align: center;
}

th{
  background-color: orange;
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
	</style>
      
    <h4>Data Kolekte Persembahan Umat</h4>
    <P>Gereja Santa Maria Assumpta Gamping</P>
	<table class='table table-bordered'>
		<thead>
			<tr>
            <th>Hari</th>
            <th>Tanggal</th> 
            <th>Jam</th>
            <th>Keterangan</th>
            <th>Kuota</th>
			</tr>
		</thead>
        @foreach($jadwalmisa as $jadwalmisa) 
		<tbody>       
            <tr>
            <td>{{$jadwalmisa->hari}}</td>   
            <td>{{$jadwalmisa->tanggal}}</td>  
            <td>{{$jadwalmisa->jam}}</td>
            <td>{{$jadwalmisa->keterangan}}</td>  
            <td>{{$jadwalmisa->kuota}}</td> 
			</tr>	          
		</tbody>
        @endforeach
	</table>
    
</body>
</html>










