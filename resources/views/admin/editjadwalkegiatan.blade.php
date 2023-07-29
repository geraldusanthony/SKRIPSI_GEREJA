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
</style>
</head>
<body class="w3-light-grey">

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<div class="w3-main" style="margin-left:200px;margin-top:43px;margin-right:200px">
  <header class="w3-container" style="padding-top:22px">
    <h2><b>Edit Data Jadwal Kegiatan Paroki</b></h2>
    <div class="modal-body">
        <form action="{{route('editjadwalkegiatan',['id'=>$jadwalkegiatan->id])}}" method="GET">
          {{csrf_field()}}
           <div class="form-group">
                 <label for="exampleInputEmail1">Hari </label>
                 <select class="selectpicker form-control" name="hari" value="{{$jadwalkegiatan->hari}}">
                 <option>Pilih Hari</option>
                 <option>Senin</option>
                 <option>Selasa</option>
                 <option>Rabu</option>
                 <option>Kamis</option>
                 <option>Jumat</option>
                 <option>Sabtu</option>
                 <option>Minggu</option>
                 </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Tanggal</label>
              <input name="tanggal"type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$jadwalkegiatan->tanggal}}">
           </div>
           <div class="form-group">
              <label for="exampleInputEmail1">Jam</label>
              <input name="jam"type="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$jadwalkegiatan->jam}}">
           </div>
           <div class="form-group">
              <label for="exampleInputEmail1">Tempat Kegiatan</label>
              <input name="tempat"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$jadwalkegiatan->tempat}}" >
           </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Kegiatan</label> 
                <input name="kegiatan"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$jadwalkegiatan->kegiatan}}">
            </input>
            </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary w3-orange">Simpan</button>
    </form>
    </div> 
  </header>
  
  
</div>

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

</body>
</html>
