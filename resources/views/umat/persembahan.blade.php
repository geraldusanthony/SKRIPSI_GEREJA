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

tr:hover {background-color: rgba(255, 99, 71, 0.5);}
</style>
</head>
<body class="w3-light-grey">
    <header class="w3-container" style="padding-top:22px">
    <p><a href="/indexumat" class="w3-button w3-orange"><i class="fa fa-home"> </i>Kembali</a></p>
    <h2><b>Data Persembahan</b></h2>
    <h4>Berikut merupakan data persembahan umat Gereja St. Maria Assumpta Gamping</h4>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Cari Bulan" title="Masukkan bulan">
    </header>
    <div class="w3-row">
    </div>
        <table id="myTable" class="table, center">
        <tr>
        <th>Bulan</th> 
        <th>Tahun</th>
        <th>Minggu Ke</th> 
        <th>Kolekte 1</th>
        <th>Kolekte 2</th>
        <th>Total Persembahan</th>
        </tr>
        @foreach ($persembahan as $persembahan)
        <tr>
        <td>{{$persembahan->bulan}}</td> 
        <td>{{$persembahan->tahun}}</td> 
        <td>{{$persembahan->minggu}}</td> 
        <td>Rp.{{$persembahan->jumlah}}</td> 
        <td>Rp.{{$persembahan->jumlah2}}</td> 
        <td>Rp.{{$persembahan->jumlah + $persembahan->jumlah2}}</td>
        @endforeach
        </tr>
        </div>
      </div>
  </header>
  </body>

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

</body>
</html>
