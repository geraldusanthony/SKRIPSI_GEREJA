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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
  background-image: url('/asset/images/searchicon.png');
  background-position: -5px -5px;
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
      <a href="daftarumat" class="w3-bar-item w3-button w3-padding w3-orange"><i class="fa fa-users fa-fw"></i>  Daftar Umat</a>
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
<div class="w3-main" style="margin-left:300px;margin-top:43px;">
  <header class="w3-container" style="padding-top:22px">
  <!-- <div id="cobali">
<li> dd</li>
</div> -->
    <h2><b>Data Umat Paroki Santa Maria Assumpta Gamping</b></h2>
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label><strong>Lingkungan :</strong></label>
                <select id='status' class="form-control target" style="width: 280px">
                 <option value="">--Select Lingkungan--</option>
                 <option value="St. Yohanes Pemandi Gamping lor">St. Yohanes Pemandi Gamping lor</option>
                 <option value="St. Agatha Gamping Tengah">St. Agatha Gamping Tengah</option>
                 <option value="St. Agustinus Gamping">St. Agustinus Gamping</option>
                 <option value="St. Yusuf Gamping">St. Yusuf Gamping</option>
                 <option value="St. Maria Fatimmah Demak Ijo">St. Maria Fatimmah Demak Ijo</option>
                 <option value="St. Ignatius Loyola Kaliabu">St. Ignatius Loyola Kaliabu</option>
                 <option value="St. Caecilia Onggobayan">St. Caecilia Onggobayan</option>
                 <option value="St. Antonius Mejing">St. Antonius Mejing</option>
                 <option value="St. Gregorius Mejing">St. Gregorius Mejing</option>
                 <option value="St. Stefanus Mejing">St. Stefanus Mejing</option>
                 <option value="St. Monica Mejing">St. Monica Mejing</option>
                 <option value="12St. Mateus Mejing">St. Mateus Mejing</option>
                 <option value="St. Paulus Sidoarum">St. Paulus Sidoarum</option>
                 <option value="St. Thomas Aquinas Sidoarum">St. Thomas Aquinas Sidoarum</option>
                 <option value="St. Yustinus Martir Sidoarum">St. Yustinus Martir Sidoarum</option>
                 <option value="St. Anna Gesikan">St. Anna Gesikan</option>
                 <option value="St. Yoakim Gesikan">St. Yoakim Gesikan</option>
                 <option value="St. Hieronimus Gesikan">St. Hieronimus Gesikan</option>
                 <option value="St. Fransiscus Asisi Pelem Hijau">St. Fransiscus Asisi Pelem Hijau</option>
                 <option value="St. Lucia Ngawen">St. Lucia Ngawen</option>
                 <option value="St. Veronica Bantulan">St. Veronica Bantulan</option>
                 <option value="St. Agustinus Gancahan">St. Agustinus Gancahan</option>
                 <option value="St. Petrus Gancahan">St. Petrus Gancahan</option>
                 <option value="St. Tarcisius Semboh (Perak Bulus)">St. Tarcisius Semboh (Perak Bulus)</option>
                 <option value="St. Maria Gancahan">St. Maria Gancahan</option>
                 <option value="St. Yohanes Pembaptis Sidokarto">St. Yohanes Pembaptis Sidokarto</option>
                 <option value="St. Yusuf Gejawan Pasekan">St. Yusuf Gejawan Pasekan</option>
                 <option value="St. Margareta Gejawan Puri">St. Margareta Gejawan Puri</option>
                 <option value="St. Georgius Nyamplung">St. Georgius Nyamplung</option>
                 <option value="St. Ludoviskus Nyamplung">St. Ludoviskus Nyamplung</option>
                 <option value="St. Frans. Xaverius Sumber Gamol">St. Frans. Xaverius Sumber Gamol</option>
                 <option value="St. Theodorikus Jatimas">St. Theodorikus Jatimas</option>
                 <option value="St. Antonius Padua Jatisawit">St. Antonius Padua Jatisawit</option>
                 <option value="St. Kristoforus Baleasri">St. Kristoforus Baleasri</option>
                </select>
            </div>
        </div>
    </div>
    <div class="w3-row">
     <p id="daftarumatnya"></p>
    </div>
        <table id="myTable" class="table, center">
        <tr>
        <th>NIK</th>
        <th>Nama Umat</th>
        <th>Warga Negara</th>        
        <th>Tanggal Lahir</th> 
        <th>Jenis Kelamin</th> 
        <th>Asal Lingkungan</th>
        <th>Aksi</th>
        </tr>
        @foreach ($umat as $umat)
        <tr class="umat_kosong" id="data_umat">
        <td>{{$umat->nik}}</td> 
        <td>{{$umat->nama_umat}}</td>   
        <td>{{$umat->warga}}</td>    
        <td>{{$umat->tgl_lahir}}</td> 
        <td>{{$umat->jns_kelamin}}</td>
        <td>{{$umat->ling}}</td>
        <td>
          <a href="/prosesviewdata/{{$umat->id}}" class="btn fa fa-edit w3-orange"></a>
          <a href="/deleteumat/{{$umat->id}}" class="btn fa fa-trash w3-orangemary w3-red"></a>
          <a href="/profileumat/{{$umat->id}}" class="btn fa fa-eye w3-blue"></a>
        </td>
        @endforeach
        </tr>
        </div>
      </div>
      </header>
    </div>  
  </div>


  <script type="text/javascript">
  $(function () {
      
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
          url: "{{ route('admin.daftarumat') }}",
          data: function (d) {
                d.ling = $('#ling').val(),
                d.search = $('input[type="search"]').val()
            }
        },
        columns: [
            {data: 'nik', name: 'nik'},
            {data: 'nama_umat', name: 'nama_umat'},
            {data: 'tgl_lahir', name: 'tgl_lahir'},
            {data: 'jns_kelamin', name: 'jns_kelamin'},
            {data: 'ling', name: 'ling'},
        ]
    });
  
    $('#ling').change(function(){
        table.draw();
    });
      
  });
</script> 
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
<script>
$(document).ready(function(){
  $( ".target" ).on("click", function() {
    var nilai = $( "select.target" ).val();
    var ling = $(this).val();
    var $nytElem = $("#data_umat")
    // alert("The text has been changed.");
    $.ajax({
      type: "GET",
      url:"/umatdaftar/"+ling,
      dataType: 'json',
      success:function(response){
        var $nilainya = response.umat
        
        $.each(response.umat, function(i, umat) {
          var $count = response.umat
        // var $a = $('<a>').attr("href", doc.web_url).html(doc.headline.main);
        // var $p = $('<p>').html(umat.nama_umat);
        var txt1 = "<p>Text.</p>"; 

        var $id = $('<td>').addClass("id").append(umat.nik);
        var $nama = $('<td>').addClass("nama").append(umat.nama_umat);
        var $warga = $('<td>').addClass("nama").append(umat.warga);
        var $tanggal = $('<td>').addClass("nama").append(umat.tgl_lahir);
        var $kelamin = $('<td>').addClass("nama").append(umat.jns_kelamin);
        var $ling = $('<td>').addClass("nama").append(umat.ling);
        var $edit = $('<a>').attr("href", '/prosesviewdata/'+ umat.id).addClass("btn fa fa-edit w3-orange").append($edit);
        var $hapus = $('<a>').attr("href", '/deleteumat/'+ umat.id).addClass("btn fa fa-trash w3-orangemary w3-red").append($hapus);
        // .append('<button type="button" class="btn fa fa-trash w3-red" data-toggle="modal" data-target="#myModal"></button>');
        // var $li = $('<li>').addClass("article").append($a).append($p);
        var $profil = $('<a>').attr("href", '/profileumat/'+ umat.id).addClass("btn fa fa-eye w3-blue").append($profil);
        var $gabung = $('<td>').append($edit,$hapus,$profil);
        console.log($count)
        if($count <= 0){
          $( ".umat_kosong" ).empty();
        
        } else {
          $( ".umat_kosong" ).empty();
          $nytElem.append($id,$nama,$warga,$tanggal,$kelamin,$ling,$gabung);     
      }
        
        // console.log(umat.id)
    });

        // console.log(nilainya);
      }
    });
} );
});
</script>
</body>
</html>
