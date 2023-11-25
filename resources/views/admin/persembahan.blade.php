<!DOCTYPE html>
<html>
<head>
<title>Gereja Santa Maria Assumpta Gamping</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="asset/images/logo2.jpg">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}

.w3-sidebar {
  z-index: 3;
  width: 250px;
  top: 43px;
  bottom: 0;
  height: inherit;
}

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
</head>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-orange w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="">
  <img src="asset\images\logogereja.png" class="w3-bar-item w3-left" style="width:10%;"></img>
  </span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="asset\images\user.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
    @if($user)
      <span>Berkah dalem, Selamat Datang <strong>{{$user->name}}</strong></span><br>
      @endif
      <a href="homeadmin" class="w3-bar-item w3-button"><i class="fa fa-dashboard"></i></a>
      <form action="{{ route('logout') }}" method="POST">
		  @csrf
      <button type="submit" class="w3-bar-item w3-button"><i class="fa fa-sign-out"></i></button>
      </form>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    
    <a href="tambahumat" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user-plus fa-fw"></i>  Tambah Umat</a>
    <a onclick="myAccFunc2()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn2"><i class="fa fa-credit-card fa-fw fa fa-caret-down"></i>  Data Umat</a>
    <div id="demoAcc2" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <a href="daftarumat" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Daftar Umat</a>
      <a href="baptis" class="w3-bar-item w3-button w3-padding "><i class="fa fa-user fa-fw"></i>  Umat Belum baptis</a>
      <a href="komuni" class="w3-bar-item w3-button w3-padding "><i class="fa fa-user fa-fw"></i>  Umat Belum Komuni</a>
    </div>
    <a href="jadwalmisa" class="w3-bar-item w3-button w3-padding"><i class="	fa fa-calendar fa-fw"></i>  Tambah Jadwal Misa</a>
    <a href="pendaftaran" class="w3-bar-item w3-button w3-padding"><i class="fa fa-plus-square fa-fw"></i>  Jadwal Misa</a>
    <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn"><i class="fa fa-credit-card fa-fw fa fa-caret-down"></i>  Data Persembahan</a>
    <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <a href="persembahan" class="w3-bar-item w3-button w3-orange"><i class="fa fa-credit-card w3-margin-right"></i>Kolekte</a>
      <a href="persembahanling" class="w3-bar-item w3-button w3-light-white"><i class="fa fa-credit-card w3-margin-right"></i>Persembahan Lingkungan</a>
    </div>
    <a href="datamisaumat" class="w3-bar-item w3-button w3-padding"><i class="	fa fa-database fa-fw"></i>  Data Misa</a>
    <a href="jadwalkegiatan" class="w3-bar-item w3-button w3-padding"><i class="fa fa-calendar fa-fw"></i>  Tambah Jadwal Kegiatan</a>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">
  <header class="w3-container w3-lght-gray w3-center" style="padding-top:30px;">
    <h2><b>FORM TAMBAH DATA KOLEKTE UMAT</b></h2>
    <p>Berikut merupakan halaman untuk menambahkan data persembahan kolekte umat pada misa</p>
</header>
<header class="w3-container w3-lght-gray" style="padding-top:10px;">
    <div class="modal-body" style="margin-left:350px;margin-right:350px">
        <form action="/addpersembahan" method="POST">
          {{csrf_field()}}
          <div class="form-group">
              <label for="exampleInputEmail1">Tanggal</label>
              <input name="tanggal" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
           </div>
          <div class="form-group">
                 <label for="exampleInputEmail1">Keterangan Misa</label>
                 <select class="select2 form-control" name="keterangan" type="">
                 <option></option>
                 @foreach($jadwalmisa as $jadwalmisa)
                 <option>{{$jadwalmisa->keterangan}} - Hari {{$jadwalmisa->hari}} - Tanggal {{$jadwalmisa->tanggal}} - Jam {{$jadwalmisa->jam}}</option>
                 @endforeach
                 </select>
            </div> 
            <div class="form-group">
              <label for="exampleInputEmail1">Kolekte 1</label>
              <input name="jumlah" type="number" min="1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
           </div>
           <div class="form-group">
              <label for="exampleInputEmail1">Kolekte 2</label>
              <input name="jumlah2" type="number" min="1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
           </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary w3-orange">Tambah</button>
    </form>
    </div> 
    </header>
    <header class="w3-container">
    <h2><b>Data Persembahan Gereja</b></h2>
    <button type="button" class="btn fa fa-download w3-blue" onclick="window.location.href='/cetakpersembahan_pdf';"> Download Data</button>
    <P></P>
    <div class="w3-row">
    </div>
        <table class="table, center">
        <tr>
        <th>Tanggal</th>
        <th>Keterangan Misa</th>
        <th>Kolekte 1</th>
        <th>Kolekte 2</th>
        <th>Total</th> 
        <th>Aksi</th>
        </tr>
        @foreach ($persembahan as $persembahan)
        <tr>
        <td>{{$persembahan->tanggal}}</td> 
        <td>{{$persembahan->keterangan}}</td>
        <td>Rp.{{$persembahan->jumlah}}</td> 
        <td>Rp.{{$persembahan->jumlah2}}</td>
        <td>Rp.{{$persembahan->jumlah + $persembahan->jumlah2}}</td>
        <td><a href="/viewdatapersembahan/{{$persembahan->id}}" class="btn fa fa-edit w3-orange"></a>
        <!-- Modal -->
        <button type="button" class="btn fa fa-trash w3-red" data-toggle="modal" data-target="#myModal"></button></td>
          <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog modal-sm">
        <div class="modal-content">
        <div class="modal-header w3-orange">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title w3-center"><b>PERINGATAN !</b></h4>
        </div>
        <div class="modal-body">
          <p>Apakah anda yakin menghapus data ini ?</p>
        </div>
        <div class="modal-footer">
        <a href="/deletepersembahan/{{$persembahan->id}}" class="btn fa fa-trash w3-orangemary w3-red"> Hapus</a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
        @endforeach
        </tr>
        </div>
      </div>
  </header>
  

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

<script>
    $('.select2').select2();
</script>

<script>
// Accordion 
function myAccFunc() {
  var x = document.getElementById("demoAcc");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

// Click on the "Jeans" link on page load to open the accordion for demo purposes
document.getElementById("myBtn").click();
</script>

<script>
// Accordion 
function myAccFunc2() {
  var x = document.getElementById("demoAcc2");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

// Click on the "Jeans" link on page load to open the accordion for demo purposes
document.getElementById("myBtn2").click();
</script>

</body>
</html>
