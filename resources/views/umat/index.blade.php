<!DOCTYPE html>
<html>
<head>
<title>Home Umat </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="asset/images/foto4.jpg">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("asset/images/foto3.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}

#div1 {
  font-size:15px;
}

</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-orange w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide"><i class="fa fa-home"></i> HOME</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button w3-wide"> TENTANG</a>
      <a href="#daftar" class="w3-bar-item w3-button w3-wide"><i class="fa fa-database"></i> DAFTAR MISA</a>
      <a href="#pengumuman" class="w3-bar-item w3-button w3-wide"><i class="fa fa-bullhorn"></i> PENGUMUMAN</a>
      <a href="#work" class="w3-bar-item w3-button w3-wide"><i class="fa fa-picture-o"></i> GALERI</a>
      <a href="#contact" class="w3-bar-item w3-button w3-wide"><i class="fa fa-phone"></i> KONTAK</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">TENTANG</a>
  <a href="#daftar" onclick="w3_close()" class="w3-bar-item w3-button">DAFTAR MISA</a>
  <a href="#pengumuman" onclick="w3_close()" class="w3-bar-item w3-button">PENGUMUMAN</a>
  <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">GALERI</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">KONTAK</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small w3-text-orange w3-black"><b>SELAMAT DATANG UMAT<b></span><br>
    <span class="w3-large w3-black w3-text-orange"><b>Di Website Gereja Santa Maria Assumpta Gamping</b></span>
    <p><a href="#daftar" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Daftar Misa Sekarang !</a></p>
  </div> 
</header>

<!-- About Section -->
<div class="w3-container w3-red" style="padding: 80px 20px" id="about">
  <h1 class="w3-center">TENTANG GEREJA ST. MARIA ASSUMPTA GAMPING</h1>
  <h3 class="w3-center w3-large">Berikut merupakan beberapa informasi tentang Gereja St. Maria Assumpta Gamping</h3>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-info-circle w3-text-purple w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">SEKILAS</p>
      <p class="text-justify">Gereja Paroki Santa Maria Assumpta Gamping terletak di Dusun Gamping Tengah, Desa Ambarketawang, Kecamatan Gamping, 
        Kabupaten Sleman, Daerah Istimewa Yogyakarta.</p>
        <p class="text-justify"> Terletak lebih kurang 5 km sebelah barat pusat Kota Yogyakarta.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-flag w3-text-purple w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large"><b>WILAYAH DAN BATAS</b></p>
      <p class="text-justify">Lingkungan : 34 Wilayah : 8  </p>
      <p> Batas Utara : Paroki Mlati
      <p>Selatan : Paroki Pugeran dan Paroki Sedayu</p>
      <p>Timur : Paroki St. Paroki Pugeran dan Paroki Kumetiran</p>
      <p>Barat : Paroki Sedayu</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-calendar w3-text-purple w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">JADWAL MISA MINGGUAN</p>
      <p class="text-justify">Sabtu Sore : Pukul 17.00 WIB</p>
      <p class="text-justify">Minggu Pagi : Pukul 06.00 Dan 08.00 WIB</p>
      <p class="text-justify">Minggu Sore : Pukul 17.00 WIB</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-clock-o w3-text-purple w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">JADWAL MISA HARIAN</p>
      <p class="text-justify">Senin - Sabtu : 05.30 WIB</p>
      <p class="text-justify">Jumat Pertama : 18.00 WIB</p>
    </div>
  </div>
</div>

<!-- Promo Section - "We know design" -->
<div id="daftar" class="w3-container w3-light-grey" style="padding:180px 50px">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h1 class="w3-text-orange"><b>Mari Misa Dirumah Tuhan</b></h1>
      <h5 class="text-justify">Segera daftarkan diri Anda pada platform ini untuk dapat mengikuti jadwal Misa yang tersedia</h5>
      <h5 class="text-justify">Login terlebih dahulu untuk dapat mendaftar mengikuti misa</h5>
      <p><a href="/loginumat" class="w3-button w3-orange w3-round-large"><i class="fa fa-sign-in"> </i>Login Untuk Mendaftar Misa</a></p>
    </div>
    <div class="w3-col m6">
      <img class="w3-image w3-round-large" src="asset/images/foto4.jpg" alt="Buildings" width="700" height="394">
    </div>
  </div>
</div>

<!-- Team Section -->
<div id="pengumuman" class="w3-container" style="padding:100px 16px" id="team">
  <h1 class="w3-center w3-text-orange"><b>PENGUMUMAN PAROKI</b></h1>
  <h3 class="w3-center w3-large">Berikut merupakan data yang dapat dibagikan oleh kami</h3>
  <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card w3-orange w3-round-large">
        <img class="w3-round-large" src="asset/images/persembahan.jpeg" alt="John" style="width:100%">
        <div class="w3-container">
          <h3>Data Persembahan Umat</h3>
          <p>Berikut merupakan data persembahan umat Gereja St. Maria Assumpta Gamping. Silahkan lihat secara detail.</p>
          <p><a href="/viewpersembahan" class="w3-button w3-light-grey w3-block w3-round-large"><i id="div1" class="fa" > </i> Lihat</a></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card w3-orange w3-round-large">
        <img class="w3-round-large" src="asset/images/kegiatan.jpg" alt="Jane" style="width:100%">
        <div class="w3-container">
          <h3>Jadwal Kegiatan Gereja</h3>
          <p>Jadwal kegiatan gereja yang di adakan didalam gereja ataupun di luar gereja St. Maria Assumpta Gamping.</p>
          <p><a href="/viewkegiatan" class="w3-button w3-light-grey w3-block w3-round-large"><i id="div2" class="fa"> </i> Lihat</a></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card w3-orange w3-round-large">
        <img class="w3-round-large" src="asset/images/foto6.jpg" alt="Mike" style="width:100%">
        <div class="w3-container">
          <h3>Jadwal Misa</h3>
          <p>Berikut merupakan jadwal misa yang akan di laksanakan di Gereja St. Maria Assumpta Gamping. Silahkan lihat jadwal.</p>
          <p><a href="/viewjadwalmisa" class="w3-button w3-light-grey w3-block w3-round-large"><i id="div3" class="fa"> </i> Lihat</a></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card w3-orange w3-round-large">
        <img class="w3-round-large" src="asset/images/foto7.jpg" alt="Dan" style="width:100%">
        <div class="w3-container">
          <h3>Pendaftaran Misa</h3>
          <p>Berikut merupakan data umat yang telah mendaftarkan diri untuk mengkuti misa di Gereja St. Maria Assumpta Gamping</p>
          <p><a href="/viewpendaftaranmisa" class="w3-button w3-light-grey w3-block w3-round-large"><i id="div4" class="fa"> </i> Lihat</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
    
<!-- Promo Section "Statistics" -->
<div class="w3-container w3-row w3-center w3-gray w3-padding-64">
  <div class="w3-quarter">
    <span class="w3-xxlarge w3-text-black"></span>
    <br></br>
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">8</span>
    <br>Jumlah Wilayah
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">34</span>
    <br>Jumlah Lingkungan
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge"></span>
    <br>
  </div>
</div>

<!-- Work Section -->
<div class="w3-container" style="padding:80px 16px" id="work">
  <h1 class="w3-center w3-text-orange"><b>GALERI FOTO GEREJA</b></h1>
  <h3 class="w3-center w3-large">Berikut merupakan foto Gereja Maria Assumpta Gamping</h3>

  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col l3 m6">
      <img src="asset/images/GerejaGer.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity w3-round-large" alt="Patung Bunda Maria">
    </div>
    <div class="w3-col l3 m6">
      <img src="asset/images/foto.webp" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity w3-round-large" alt="Foto Gereja dari sisi stara">
    </div>
    <div class="w3-col l3 m6">
      <img src="asset/images/altar.webp" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity w3-round-large" alt="Altar gereja">
    </div>
    <div class="w3-col l3 m6">
      <img src="asset/images/tamandoa.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity w3-round-large" alt="Taman doa gereja">
    </div>
  </div>

  <div class="w3-row-padding w3-section">
    <div class="w3-col l3 m6"> 
      <img src="asset/images/foto3.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity w3-round-large" alt="Foto gereja secara keseluaruhan">
    </div>
    <div class="w3-col l3 m6">
      <img src="asset/images/foto2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity w3-round-large" alt="Gedung sekertariat gereja">
    </div>
    <div class="w3-col l3 m6">
      <img src="asset/images/foto5.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity w3-round-large" alt="Gasebo gereja">
    </div>
    <div class="w3-col l3 m6">
      <img src="asset/images/foto4.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity w3-round-large" alt="Patung bunda maria">
    </div>
  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image"></span>
  <div class="w3-modal-content w3-animate-top w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image w3-round-large">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Contact Section -->
<div class="w3-container w3-red" style="padding:80px 16px" id="contact">
  <h1 class="w3-center w3-wide"><b>KONTAK</b></h1>
  <h3 class="w3-center w3-large">Silahkan hubungi dan update informasi dari sosial media kami</h3>
  <div class="w3-row-padding">
    <div class="w3-col m6" style="padding:30px 16px">
      <p><i class="fa fa-map-marker fa-fw w3-text-purple w3-xxlarge w3-margin-right"></i><a href="https://goo.gl/maps/zbqog79xMDBCSpdM8" target="" class="w3-hover-text-blue">Jl. Gereja No.1, Gamping Lor, Ambarketawang, Kec. Gamping </a></p>
      <p><i class="fa fa-phone fa-fw w3-text-purple w3-xxlarge w3-margin-right"></i><a href="tel:+0274798748">Hubungi 0274798748</a></p>
      <p><i class="fa fa-instagram fa-fw w3-text-purple w3-xxlarge w3-margin-right"></i><a href="https://www.instagram.com/gerejagamping/?hl=id" target="" class="w3-hover-text-blue">Instagram Gereja</a></p>
      <p><i class="fa fa-facebook fa-fw w3-text-purple w3-xxlarge w3-margin-right"></i><a href="https://www.facebook.com/gerejagamping" target="" class="w3-hover-text-blue">Facebook Gereja</a></p>
      <p><i class="fa fa-youtube fa-fw w3-text-purple w3-xxlarge w3-margin-right"> </i><a href="https://www.youtube.com/channel/UCQMDYrFcZiKIGsIElaQvxvQ" target="" class="w3-hover-text-blue">Komsos Gamping</a></p>
      <p><i class="fa fa-twitter fa-fw w3-text-purple w3-xxlarge w3-margin-right"> </i><a href="https://twitter.com/gerejagamping" target="" class="w3-hover-text-blue">Twitter Gereja</a></p> 
    </div>
    <div class="w3-col m6" style="padding:30px 16px">
      <script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(51.508742,-0.120850),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15811.693942312208!2d110.3262443!3d-7.7979257!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7af8013adfe681%3A0xfde1f2a8450eaabc!2sGereja%20Katolik%20Santa%20Maria%20Assumpta%2C%20Gamping!5e0!3m2!1sid!2sid!4v1679505535420!5m2!1sid!2sid" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-white" style="padding: 10px 5px">
  <a href="#home" class="w3-button w3-light-white w3-text-black"><i class="fa fa-arrow-up w3-margin-right"></i>Kembali ke atas</a>
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

<script>
function openfolder() {
  var a;
  a = document.getElementById("div1");
  a.innerHTML = "&#xf114;";
  setTimeout(function () {
      a.innerHTML = "&#xf115;";
    }, 1000);
}
openfolder();
setInterval(openfolder, 2000);
</script>

<script>
function openfolder() {
  var a;
  a = document.getElementById("div2");
  a.innerHTML = "&#xf114;";
  setTimeout(function () {
      a.innerHTML = "&#xf115;";
    }, 1000);
}
openfolder();
setInterval(openfolder, 2000);
</script>

<script>
function openfolder() { 
  var a;
  a = document.getElementById("div3");
  a.innerHTML = "&#xf114;";
  setTimeout(function () {
      a.innerHTML = "&#xf115;";
    }, 1000);
}
openfolder();
setInterval(openfolder, 2000);
</script>

<script>
function openfolder() { 
  var a;
  a = document.getElementById("div4");
  a.innerHTML = "&#xf114;";
  setTimeout(function () {
      a.innerHTML = "&#xf115;";
    }, 1000);
}
openfolder();
setInterval(openfolder, 2000);
</script>

</body>
</html>
 