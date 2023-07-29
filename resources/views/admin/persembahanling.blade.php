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
    <a href="daftarumat" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Daftar Umat</a>
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
  <header class="w3-container w3-center w3-khaki" style="padding-top:30px">
    <h2><b>FORM TAMBAH DATA PERSEMBAHAN LINGKUNGAN</b></h2>
    <p>Berikut merupakan halaman yang dipergunakan untuk menambahkan data persembahan Lingkungan</p>
      <p> Baik Berupa Dana persembahan dan Dana Pembangunan</p>
  </header>
  <header class="w3-container w3-khaki" style="padding-top:10px;">
  <div class="modal-body" style="margin-left:250px;margin-right:250px">
    <div class="modal-body">
        <form action="/addpersembahanling" method="POST">
          {{csrf_field()}}
          <div class="form-group">
              <label for="exampleInputEmail1">Tanggal</label>
              <input name="tanggal" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
           </div>
          <div class="form-group">
                 <label for="exampleInputEmail1">Tahun </label>
                 <select class="select2 form-control" name="tahun" type="">
                 <option></option>
                 <option>2022</option>
                 <option>2023</option>
                 <option>2024</option>
                 <option>2025</option>
                 <option>2026</option>
                 <option>2027</option>
                 </select>
            </div> 
            <div class="form-group">
              <label for="exampleInputEmail1">Keterangan Persembahan</label>
              <div>
              <input type="radio" id="" name="ket" value="Dana Persembahan" class=" @error('') is-invalid @enderror"  required autocomplete="" autofocus />
                  <label for="">Dana Persembahan</label><br>
                  <input type="radio" id="" name="ket" value="Dana Pembangunan"/>
                  <label for="">Dana Pembangunan</label>
                @error('ket')
                <span class="invalid-feedback" role="alert" >
                	<strong>{{ $message }}</strong>
                </span>
                @enderror
           </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Lingkungan</label>
              <select class="form-control select2 @error('nama_ling') is-invalid @enderror" required autocomplete="nama_ling" name="nama_ling">
                 <option></option>
                 <option>St. Yohanes Pemandi Gamping lor</option>
                 <option>St. Agatha Gamping Tengah</option>
                 <option>St. Agustinus Gamping</option>
                 <option>St. Yusuf Gamping</option>
                 <option>St. Maria Fatimmah Demak Ijo</option>
                 <option>St. Ignatius Loyola Kaliabu</option>
                 <option>St. Caecilia Onggobayan</option>
                 <option>St. Antonius Mejing</option>
                 <option>St. Gregorius Mejing</option>
                 <option>St. Stefanus Mejing</option>
                 <option>St. Monica Mejing</option>
                 <option>St. Mateus Mejing</option>
                 <option>St. Paulus Sidoarum</option>
                 <option>St. Thomas Aquinas Sidoarum</option>
                 <option>St. Yustinus Martir Sidoarum</option>
                 <option>St. Anna Gesikan</option>
                 <option>St. Yoakim Gesikan</option>
                 <option>St. Hieronimus Gesikan</option>
                 <option>St. Fransiscus Asisi Pelem Hijau</option>
                 <option>St. Lucia Ngawen</option>
                 <option>St. Veronica Bantulan</option>
                 <option>St. Agustinus Gancahan</option>
                 <option>St. Petrus Gancahan</option>
                 <option>St. Tarcisius Semboh (Perak Bulus)</option>
                 <option>St. Maria Gancahan</option>
                 <option>St. Yohanes Pembaptis Sidokarto</option>
                 <option>St. Yusuf Gejawan Pasekan</option>
                 <option>St. Margareta Gejawan Puri</option>
                 <option>St. Georgius Nyamplung</option>
                 <option>St. Ludoviskus Nyamplung</option>
                 <option>St. Frans. Xaverius Sumber Gamol</option>
                 <option>St. Theodorikus Jatimas</option>
                 <option>St. Antonius Padua Jatisawit</option>
                 <option>St. Kristoforus Baleasri</option>
                 </select>
                 @error('ling')
                <span class="invalid-feedback" role="alert" >
                	<strong>{{ $message }}</strong>
                </span>
                @enderror
           </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Jumlah Persembahan</label>
              <input name="jumlah" type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
           </div>
           <p><b>- PERHATIAN! -</b></p>
           <p>Pastikan Data Yang Anda Tambahkan Telah Benar!</p>
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary w3-orange">Tambah</button>
    </form>
    </div> 
</header>
    <header class="w3-container" style="padding-top:22px">
    <h2><b>Data Persembahan Lingkungan</b></h2>
    <button type="button" class="btn fa fa-download w3-blue" onclick="window.location.href='/cetakpersembahanling_pdf';"> Download Data</button>
    <P></P>
    
    <div class="w3-row">
    </div>
        <table class="table, center">
        <tr>
        <th>Tanggal</th>
        <th>Tahun</th>
        <th>Keterangan Persembahan</th>  
        <th>Nama Lingkungan</th> 
        <th>Jumlah</th>
        <th>Update Data</th>
        <th>Aksi</th>
        </tr>
        @foreach ($persembahanling as $persembahanling)
        <tr>
        <td>{{$persembahanling->tanggal}}</td>   
        <td>{{$persembahanling->tahun}}</td> 
        <td>{{$persembahanling->ket}}</td>
        <td>{{$persembahanling->nama_ling}}</td> 
        <td>Rp.{{$persembahanling->jumlah}}</td>
        <td>{{$persembahanling->updated_at}}</td> 
        <td><a href="/viewdatapersembahanling/{{$persembahanling->id}}" class="btn fa fa-edit w3-orange"></a>
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
        <a href="/deletepersembahanling/{{$persembahanling->id}}" class="btn fa fa-trash w3-orangemary w3-red"> Hapus</a>
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

</body>
</html>
