<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Umat Pendaftar Misa</title>
    <link rel="icon" type="image/x-icon" href="asset/images/logo2.jpg">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<style>
table {
  font-family: arial, sans-serif;
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

tr:nth-child(even) {
  background-color: #dddddd;
}
tr:hover {background-color: rgba(255, 99, 71, 0.5);}
</style>
<body class="w3-light-grey">
<div class="w3-bar w3-white w3-border-bottom w3-xxlarge w3-card">
  <img src="http://localhost:8000/asset/images/logogereja.png" class="w3-bar-item w3-left" style="width:12%;"></img>
</div>
    <header class="w3-container" style="padding-top:22px">
    <p><a href="/pendaftaran" class="w3-button w3-orange w3-round-large"><i class="fa fa-home"> </i>Kembali</a></p>
    <h2><b>Data umat yang telah mendaftar misa</b></h2>
    <h2 class="font3">Jadwal Kosong</h2>
    <button type="button" class="btn fa fa-download w3-blue" onclick="window.location.href='/cetakdetailmisa_pdf/{{$id}}';"> Download Data</button>
    <h4>Jumlah Umat Terdaftar : <b>{{count($daftarmisa)}} Orang</b></h4>
    <div class="w3-row">
    </div>
        <table id="myTable" class="table, center">
        <tr>
        <th>Nama Lengkap</th> 
        <th>Asal Lingkungan</th>
        <th>Tempat Duduk</td>
        <th>Jumlah Terdaftar</th>
        </tr>
        @foreach ($daftarmisa as $daftarmisa)
        <tr>
        <td>{{$daftarmisa->nama}}</td> 
        <td>{{$daftarmisa->lingkungan}}</td> 
        <td>{{$daftarmisa->duduk}}</td> 
        <td>{{$daftarmisa->jumlah}} Orang</td>
        @endforeach
        </tr>
        </div>
      </div>
  </header>
  
  </body>
</html>