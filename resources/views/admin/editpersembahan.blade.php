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

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  text-align: center;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body class="w3-light-grey">

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:450px;margin-top:30px;margin-right:450px">
  <header class="w3-container" style="padding-top:22px">
    <h2><b>Edit Data Persembahan Kolekte Umat</b></h2>
    <div class="modal-body">
        <form action="{{route('editpersembahan',['id'=>$persembahan->id])}}" method="GET">
          {{csrf_field()}}
          <div class="form-group">
                 <label for="exampleInputEmail1">Tahun </label>
                 <input class="select2 form-control" name="tahun" value="{{$persembahan->tahun}}" disabled>
                 </input>
            </div> 
        <div class="form-group">
                 <label for="exampleInputEmail1">Input Bulan </label>
                 <input class="select2 form-control" name="bulan" value="{{$persembahan->bulan}}" disabled>
                 </input>
            </div>
            <div class="form-group">
                 <label for="exampleInputEmail1">Input Minggu </label>
                 <input class="select2 form-control" name="minggu" value="{{$persembahan->minggu}}" disabled>
                 </input>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Kolekte 1</label>
              <input name="jumlah"type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$persembahan->jumlah}}">
           </div>
           <div class="form-group">
              <label for="exampleInputEmail1">Kolekte 2</label>
              <input name="jumlah2"type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$persembahan->jumlah2}}">
           </div>
           <div class="form-group">
              <label for="exampleInputEmail1">Keterangan</label>
              <input name="keterangan"type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$persembahan->keterangan}}" disabled>
           </div>
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary w3-orange">Simpan</button>
    </form>
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

<script>
    $('.select2').select2();
</script>

</body>
</html>
