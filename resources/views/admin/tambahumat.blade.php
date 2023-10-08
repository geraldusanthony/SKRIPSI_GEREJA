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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

.select2-container .select2-selection--single{
    height:34px !important;
}
.select2-container--default .select2-selection--single{
         border: 1px solid #ccc !important; 
     border-radius: 0px !important; 
}

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
    
    <a href="tambahumat" class="w3-bar-item w3-button w3-padding w3-orange"><i class="fa fa-user-plus fa-fw"></i>  Tambah Umat</a>
    <a onclick="myAccFunc2()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn2"><i class="fa fa-credit-card fa-fw fa fa-caret-down"></i>  Data Umat</a>
    <div id="demoAcc2" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <a href="daftarumat" class="w3-bar-item w3-button w3-padding "><i class="fa fa-users fa-fw"></i>  Daftar Umat</a>
      <a href="baptis" class="w3-bar-item w3-button w3-padding "><i class="fa fa-user fa-fw"></i>  Umat Belum baptis</a>
      <a href="komuni" class="w3-bar-item w3-button w3-padding "><i class="fa fa-user fa-fw"></i>  Umat Belum Komuni</a>
    </div>
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
<div class="w3-main" style="margin-left:300px; margin-top:43px">
<header class="w3-container w3-lght-gray w3-center" style="padding-top:30px;">
    <h2><b>FORM TAMBAH DATA UMAT</b></h2>
    <p>Berikut merupakan halaman untuk menambahkan data umat Paroki St. Maria Assumpta Gamping</p>
</header>
<header class="w3-container w3-lght-gray">
    <div class="modal-body" style="margin-left:300px;margin-right:300px">
    <div class="modal-body">
        <form action="/addumat" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="form-group">
              <label for="exampleInputEmail1">Nama Umat : </label>
              <input name="nama_umat" type="text" class="form-control @error('nama_umat') is-invalid @enderror" required autocomplete="nama_umat" id="exampleInputEmail1" aria-describedby="emailHelp">  
               @error('nama_umat')
                <span class="invalid-feedback" role="alert" >
                	<strong>{{ $message }}</strong>
                </span>
              @enderror
           </div>
           <div class="form-group">
                 <label for="exampleInputEmail1">Baptis : </label>
                 <div>
                 <input type="radio" id="" name="baptis" value="sudah" class=" @error('') is-invalid @enderror"  required autocomplete="" autofocus />
                  <label for="">Sudah</label><br>
                  <input type="radio" id="" name="baptis" value="belum"/>
                  <label for="">Belum</label>
                @error('baptis')
                <span class="invalid-feedback" role="alert" >
                	<strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
           <div class="form-group">
              <label for="exampleInputEmail1">Nama Baptis : </label>
              <input name="nama_bpts" type="text" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp">  
           </div>
           <div class="form-group" style="width:50%">
              <label for="exampleInputEmail1">Tanggal Baptis : </label>
              <input name="tgl_bpts" type="date" class="form-control" value="" id="exampleInputEmail1" aria-describedby="emailHelp">              
           </div>
           <div class="form-group">
              <label for="exampleInputEmail1">Paroki Baptis/Penerima : </label>
              <input name="paroki" type="text" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp">               
           </div>
           <div class="form-group">
              <label for="exampleInputEmail1">Wali Baptis : </label>
              <input name="wali_bpts" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">                
           </div>
           <div class="form-group">
                 <label for="exampleInputEmail1">Komuni Pertama: </label>
                 <div>
                 <input type="radio" id="" name="komuni" value="sudah" class=" @error('') is-invalid @enderror"  required autocomplete="" autofocus />
                  <label for="">Sudah</label><br>
                  <input type="radio" id="" name="komuni" value="belum"/>
                  <label for="">Belum</label>
                @error('komuni')
                <span class="invalid-feedback" role="alert" >
                	<strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
           <div class="form-group" style="width:50%">
              <label for="exampleInputEmail1">Tanggal Komuni Pertama : </label>
              <input name="tgl_kp" type="date" class="form-control" value="-" id="exampleInputEmail1" aria-describedby="emailHelp">             
           </div>
           <div class="form-group">
              <label for="exampleInputEmail1">Paroki Komuni Pertama : </label>
              <input name="paroki_kp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">             
           </div>
           <div class="form-group">
                 <label for="exampleInputEmail1">Warga Negara : </label>
                 <div>
                 <input type="radio" id="" name="warga" value="WNI" class=" @error('') is-invalid @enderror"  required autocomplete="" autofocus />
                  <label for="">WNI</label><br>
                  <input type="radio" id="" name="warga" value="WNA"/>
                  <label for="">WNA</label>
                @error('warga')
                <span class="invalid-feedback" role="alert" >
                	<strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                 <label for="exampleInputEmail1"> Negara : </label>
                 <select class="form-control select2 @error('negara') is-invalid @enderror" required autocomplete="negara" name="negara">
                  <option></option>
                  <option>Indonesia</option>
                  <option>Afganistan</option>
                  <option>Albania</option>
                  <option>Aljazir</option>
                  <option>Amerika Serikat</option>
                  <option>Andorra</option>
                  <option>Angola</option>
                  <option>Arab Saudi</option>
                  <option>Argentina</option>
                  <option>Australia</option>
                  <option>Austria</option>
                  <option>Belanda</option>
                  <option>Belgia</option>
                  <option>Brunei</option>
                  <option>Brasil</option>
                 </select>
                 @error('negara')
                <span class="invalid-feedback" role="alert" >
                	<strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
          <div class="form-group">
            <label for="exampleInputEmail1">NIK :</label> 
            <input name="nik"type="number" class="form-control @error('nik') is-invalid @enderror" required autocomplete="nik" id="exampleInputEmail1" aria-describedby="emailHelp" >
            @error('nik')
              <span class="invalid-feedback" role="alert" >
                <strong>{{ $message }}</strong>
              </span>
            @enderror
         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">No. Kartu Keluarga :</label> 
            <input name="no_kk" type="number" class="form-control @error('no_kk') is-invalid @enderror" required autocomplete="no_kk" id="exampleInputEmail1" aria-describedby="emailHelp" >
            @error('no_kk')
              <span class="invalid-feedback" role="alert" >
              	<strong>{{ $message }}</strong>
              </span>
            @enderror
         </div>
         <div class="form-group">
                 <label for="exampleInputEmail1">Jenis Kelamin : </label>
                 <div>
                 <input type="radio" id="" name="jns_kelamin" value="Laki-laki" class=" @error('') is-invalid @enderror"  required autocomplete="" autofocus />
                  <label for="">Laki-laki</label><br>
                  <input type="radio" id="" name="jns_kelamin" value="perempuan" />
                  <label for="">Perempuan</label>
                @error('jns_kelamin')
                <span class="invalid-feedback" role="alert" >
                	<strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
          </div>
          <div class="form-group">
                <label for="exampleInputEmail1">Pilih Lingkungan : </label>
                 <select class="form-control select2 @error('ling') is-invalid @enderror" required autocomplete="ling" name="ling">
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
           <div class="form-group" style="width:50%">
              <label for="exampleInputEmail1">Tanggal Lahir :</label>
              <input name="tgl_lahir" type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" required autocomplete="tgl_lahir" id="exampleInputEmail1" aria-describedby="emailHelp" >
              @error('tgl_lahir')
                <span class="invalid-feedback" role="alert" >
                	<strong>{{ $message }}</strong>
                </span>
              @enderror
           </div>

           <div class="form-group">
              <label for="exampleInputEmail1">Tempat Lahir : </label>
              <input name="tmp_lhr" type="text" class="form-control @error('tmp_lhr') is-invalid @enderror" required autocomplete="tmp_lhr" id="exampleInputEmail1" aria-describedby="emailHelp">  
               @error('tmp_lhr')
                <span class="invalid-feedback" role="alert" >
                	<strong>{{ $message }}</strong>
                </span>
              @enderror
           </div>
           <div class="form-group">
                <label for="exampleInputEmail1">Golongan Darah : </label>
                <select class="form-control select2 @error('gol_darah') is-invalid @enderror" required autocomplete="gol_darah" name="gol_darah">
                 <option></option>
                 <option>A</option>
                 <option>B</option>
                 <option>O</option>
                 <option>AB</option>
                  <option>Tidak Tahu</option>
                 </select>
                 @error('gol_darah')
                <span class="invalid-feedback" role="alert" >
                	<strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Alamat : </label>
              <input name="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" required autocomplete="alamat" id="exampleInputEmail1" aria-describedby="emailHelp">  
               @error('alamat')
                <span class="invalid-feedback" role="alert" >
                	<strong>{{ $message }}</strong>
                </span>
              @enderror
           </div>
           <div class="form-group">
              <label for="exampleInputEmail1">Kota / Kabupaten : </label>
              <select class="form-control select2 @error('kota_kab') is-invalid @enderror" required autocomplete="kota_kab" name="kota_kab">
              <option></option>
                 <option>Kabupaten Sleman</option>
                 <option>Kabupaten Bantul</option>
                 <option>Kabupaten Kulon Progo</option>
                 <option>Kabupaten Gunung Kidul</option>
                 <option>Kota Yogyakarta</option>
                 </select>
               @error('kota_kab')
                <span class="invalid-feedback" role="alert" >
                	<strong>{{ $message }}</strong>
                </span>
              @enderror
           </div>
           <div class="form-group">
              <label for="exampleInputEmail1">Kecamatan : </label>
              <select class="form-control select2 @error('kec') is-invalid @enderror" required autocomplete="kec" name="kec">
              <option></option>
                 <option>Gamping</option>
                 <option>Godean</option>
                 </select>
               @error('kec')
                <span class="invalid-feedback" role="alert" >
                	<strong>{{ $message }}</strong>
                </span>
              @enderror
           </div>
           <div class="form-group">
              <label for="exampleInputEmail1">Kelurahan : </label>
              <input name="kel" type="text" class="form-control @error('kel') is-invalid @enderror" required autocomplete="kel" id="exampleInputEmail1" aria-describedby="emailHelp">  
               @error('kel')
                <span class="invalid-feedback" role="alert" >
                	<strong>{{ $message }}</strong>
                </span>
              @enderror
           </div>
           <div class="form-group">
              <label for="exampleInputEmail1">No Handphone : </label>
              <input name="no_hp" type="number" class="form-control @error('no_hp') is-invalid @enderror" required autocomplete="no_hp" id="exampleInputEmail1" aria-describedby="emailHelp">  
               @error('no_hp')
                <span class="invalid-feedback" role="alert" >
                	<strong>{{ $message }}</strong>
                </span>
              @enderror
           </div>
           <div class="form-group">
              <label for="exampleInputEmail1">Email : </label>
              <input name="email" type="text" class="form-control @error('email') is-invalid @enderror" required autocomplete="email" id="exampleInputEmail1" aria-describedby="emailHelp">  
               @error('email')
                <span class="invalid-feedback" role="alert" >
                	<strong>{{ $message }}</strong>
                </span>
              @enderror
           </div>
           <div class="form-group">
              <label for="exampleInputEmail1">Pendidikan Terakhir : </label>
              <select class="form-control select2 @error('pend') is-invalid @enderror" required autocomplete="pend" name="pend">
              <option></option>
                 <option>Lain-Lain</option>
                 <option>KB/TK</option>
                 <option>SD</option>
                 <option>SLTP/SMP</option>
                 <option>SLTA/SMA</option>
                 <option>D1</option>
                 <option>D2</option>
                 <option>D3</option>
                 <option>D4</option>
                 <option>S1</option>
                 <option>S2</option>
                 <option>S3</option>
                 <option>SLB</option>
                 <option>Non Formal</option>
                 </select>
               @error('pend')
                <span class="invalid-feedback" role="alert" >
                	<strong>{{ $message }}</strong>
                </span>
              @enderror
           </div>
           <div class="form-group">
              <label for="exampleInputEmail1">Pekerjaan : </label>
              <select class="form-control select2 @error('pekerjaan') is-invalid @enderror" required autocomplete="pekerjaan" name="pekerjaan">
              <option></option>
                 <option>Belum/Tidak Bekerja</option>
                 <option>Mengurus Rumah Tangga</option>
                 <option>Pelajar/Mahasiswa</option>
                 <option>Pensiunan</option>
                 <option>Pegawai Negri Sipil</option>
                 <option>Karyawan Swasta</option>
                 <option>Karyawan BUMN</option>
                 <option>Karyawan Honorer</option>
                 <option>Asisten Rumah Tangga</option>
                 <option>Rohaniawan</option>
                 <option>Tentara Nasional Indonesia</option>
                 <option>Kepolisian RI</option>
                 <option>Pengusaha</option>
                 <option>Wiraswasta</option>
                 <option>Lain-Lain</option>
                 </select>
               @error('pekerjaan')
                <span class="invalid-feedback" role="alert" >
                	<strong>{{ $message }}</strong>
                </span>
              @enderror
           </div>
            <div class="form-group">
                  <label for="exampleInputEmail1">Foto Umat</label>
                  <input name="images" type="file" class="@error('images') is-invalid @enderror" required autocomplete="images" id="image" aria-describedby="emailHelp" placeholder="Nama Blog" accept="image/gif, image/jpeg, image/png">
                @error('images')
                <span class="invalid-feedback" role="alert" >
                	<strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary w3-orange">Tambah</button>
    </form>
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
