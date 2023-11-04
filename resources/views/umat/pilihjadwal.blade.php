<!DOCTYPE html>
<html>
<head>
<title>Pilih Jadwal</title>
<link rel="icon" type="image/x-icon" href="asset/images/foto4.jpg">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 350px;
  margin: auto;
  text-align: center;
  font-family: arial;
  border-radius: 10px 10px;
}

.font {
  color: orange;
  font-size: 17px;
  text-transform: uppercase;
}

.font2 {
  color: black;
  font-size: 20px;
  text-transform: uppercase;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 15px;
  border-radius: 10px 10px;
}

.card button:hover {
  opacity: 0.7;
}

.font3 {
  color: orange;
  font-size: 50px;
  text-align: center;
  margin-top: 150px;
  text-transform: uppercase;
}


</style>
</head>
<body>
<div class="w3-bar w3-white w3-border-bottom w3-xlarge w3-card">
  <img src="asset\images\logogereja.png" class="w3-bar-item w3-left" style="width:12%;"></img>
  <a href="/indexumat" class="w3-bar-item w3-right w3-hide-small"><i class="font2 fa fa-home "> Home</i></a>
  <a href="/viewtiket" class="w3-bar-item w3-right w3-hide-small"><i class="font fa fa-ticket"> Lihat Tiket Anda</i></a>
</div>
@if(count($jadwalmisa) == 0)
    <h2 class="font3">Jadwal Kosong</h2>
@else
@foreach ($jadwalmisa as $jadwalmisa)
<div class="w3-col l3 m6 w3-margin-top ">
<div class="card">
  <img class="w3-round-large" src="asset/images/gamping.png" alt="Denim Jeans" style="width:52%">
  <h4 class="font2">{{$jadwalmisa->hari}} - {{$jadwalmisa->tanggal}}</h4>
  <h4 class="font">Kuota Tersedia : {{$jadwalmisa->kuota}}</h4>
  <p class="font">{{$jadwalmisa->keterangan}} - {{$jadwalmisa->jam}}</p>
  @if($jadwalmisa->kuota == "0")
  <p class="w3-red font w3-round-large">KUOTA TELAH PENUH</p>
  @else
  <p><a href="/lihatjadwal/{{$jadwalmisa->id}}" class="w3-button w3-black w3-block w3-round-large">PILIH JADWAL</a></p>
  @endif
</div>
</div>
@endforeach
@endif
</body>
</html>
