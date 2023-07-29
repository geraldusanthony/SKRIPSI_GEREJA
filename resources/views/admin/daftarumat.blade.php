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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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

tr:hover {background-color: rgba(255, 99, 71, 0.5);
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 40%;
  font-size: 14px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

</style>
</head>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-white w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">
     <img src="asset\images\logo2.jpg" class="w3-circle" style="width:70px">
     <span class="w3-bar-item w3-right">Data Umat St Maria Assumpta Gamping</span>
  </span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="asset\images\user.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Berkah dalem, Selamat Datang <strong>Admin</strong></span><br>
      <a href="homeadmin" class="w3-bar-item w3-button"><i class="fa fa-dashboard"></i></a>
      <a href="loginpage" class="w3-bar-item w3-button"><i class="fa fa-sign-out"></i></a>
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
    <a href="daftarumat" class="w3-bar-item w3-button w3-padding w3-orange"><i class="fa fa-users fa-fw"></i>  Daftar Umat</a>
    <a href="jadwalmisa" class="w3-bar-item w3-button w3-padding"><i class="	fa fa-calendar fa-fw"></i>  Tambah Jadwal Misa</a>
    <a href="pendaftaran" class="w3-bar-item w3-button w3-padding"><i class="fa fa-plus-square fa-fw"></i>  Jadwal Misa</a>
    <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn"><i class="fa fa-credit-card fa-fw fa fa-caret-down"></i>  Data Persembahan</a>
    <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <a href="persembahan" class="w3-bar-item w3-button w3-light-white"><i class="fa fa-credit-card w3-margin-right"></i>Kolekte</a>
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
  <header class="w3-container" style="padding-top:22px">
    <h2><b>Data Umat Paroki Santa Maria Assumpta Gamping</b></h2>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Cari nama umat" title="Masukkan nama umat"></input>
    <div class="w3-row">
    </div>
        <table id="myTable" class="table, center">
        <tr>
        <th>Nama Umat</th>
        <th>Warga Negara</th> 
        <th>NIK</th>
        <th>Tanggal Lahir</th> 
        <th>Jenis Kelamin</th> 
        <th>Asal Lingkungan</th>
        <th>Aksi</th>
        </tr>
        @foreach ($umat as $umat)
        <tr>
        <td>{{$umat->nama_umat}}</td>   
        <td>{{$umat->warga}}</td> 
        <td>{{$umat->nik}}</td> 
        <td>{{$umat->tgl_lahir}}</td> 
        <td>{{$umat->jns_kelamin}}</td>
        <td>{{$umat->ling}}</td>
        <td><a href="/prosesviewdata/{{$umat->id}}" class="btn fa fa-edit w3-orange"></a>
        <!-- Modal -->
        <button type="button" class="btn fa fa-trash w3-red" data-toggle="modal" data-target="#myModal"></button>
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
        <a href="/deleteumat/{{$umat->id}}" class="btn fa fa-trash w3-orangemary w3-red"> Hapus</a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
        <a href="/profileumat/{{$umat->id}}" class="btn fa fa-eye w3-blue"></a></td>
        @endforeach
        </tr>
        </div>
      </div>
      </header>
    </div>  
  </div>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

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

</body>
</html>
