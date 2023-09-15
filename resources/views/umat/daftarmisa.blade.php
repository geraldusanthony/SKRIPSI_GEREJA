<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="http://127.0.0.1:8000/asset/images/gamping.png">
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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Konfrimasi Jadwal</title>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
.myLink {display: none}

.select2-container .select2-selection--single{
    height:34px !important;
}
.select2-container--default .select2-selection--single{
         border: 1px solid #ccc !important; 
     border-radius: 0px !important; 
}
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 60%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 70px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: white;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body class="w3-light-gray">
<!-- Navigation Bar -->
<div class="w3-bar w3-white w3-border-bottom w3-xxlarge w3-card">
  <img src="http://127.0.0.1:8000/asset/images/logogereja.png" class="w3-bar-item w3-left" style="width:12%;"></img>
</div>
   <!-- Newsletter -->
   <form action="/addpendaftaran" method="POST">
   {{csrf_field()}}
   @foreach ($jadwalmisa as $jadwalmisa)
   <div class="w3-container">
    <div class="w3-panel w3-padding-16 w3-white w3-card w3-hover-opacity-off">
    <div class="container">
    <div class="row">
    <h2>{{$jadwalmisa->keterangan}} {{$jadwalmisa->tanggal}}</h2>
    <br>
      <div class="col-25">
        <label for="fname">Pilih Lingkungan :</label>
      </div>
      <div class="col-75">
                 <select class=" select2 @error('ling') is-invalid @enderror" required autocomplete="lingkungan" name="lingkungan">
                 <option ></option>
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
                 @error('lingkungan')
                <span class="invalid-feedback" role="alert" >
                	<strong>{{ $message }}</strong>
                </span>
                @enderror
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Nama :</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="nama" placeholder="Masukkan Nama . .">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Jadwal :</label>
      </div>
      <div class="col-75">
        <input readonly type="text" id="lname" name="jadwal" placeholder="" value="{{$jadwalmisa->keterangan}} - Hari : {{$jadwalmisa->hari}}, Tanggal : {{$jadwalmisa->tanggal}}, Jam : {{$jadwalmisa->jam}}">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Pilih Tempat Duduk :</label>
      </div>
      <div class="col-75">
      <input type="radio" id="" name="duduk" value="Gedung Utama" class=" @error('') is-invalid @enderror" required autocomplete="" autofocus />
            <label for="">Gedung Utama</label><br>
            <input type="radio" id="" name="duduk" value="Sayap Utara" />
            <label for="">Sayap Utara</label>
            <div>
            <input type="radio" id="" name="duduk" value="Sayap Selatan" />
            <label for="">Sayap Selatan</label>
      </div>
    </div>
    <br>
    <div class="col-25">
    <button type="submit" class="btn btn-primary w3-orange w3-center">DAFTAR</button>
    </div>
  </form>
</div>
  @endforeach
  <script>
// Tabs
function openLink(evt, linkName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("myLink");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(linkName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}

// Click on the first tablink on load
document.getElementsByClassName("tablink")[0].click();
</script>
<script>
    $('.select2').select2();
</script>
</body>
</html>