<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="asset/images/logo2.jpg">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Validasi Data</title>
    <style>
    h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
    body {font-family: "Open Sans"}
    
    body {
	  /* background: linear-gradient(to left, orange, #FF416C); */
	  display: flex;
	  justify-content: center;
	  align-items: center;
	  flex-direction: column;
	  font-family: 'Montserrat', sans-serif;
	  height: 96vh;
	  margin: -20px 0 50px;
    }

    .container {
  border-radius: 5px;
  background-color: white;
  padding: 10px;
}

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
    
</style>
</head>
<body class="w3-light-grey">
  
<div class="container w3-card">
<div class="body" style="padding:40px 10px">
  <div class="w3-row-padding" >
    <div class="w3-col m6">
      <h1>Terimakasih telah melakukan pendaftaran misa.</h1>
      <h3>Silahkan datang sesuai dengan <b>JADWAL</b> yang telah dipilih<br>
      <h3>Tuhan Yesus Memberkati</h3>
      <br>
      @foreach($view_daftarmisa as $view_daftarmisa)
      <p>{{$view_daftarmisa->nama}}</p>
      <p>{{$view_daftarmisa->lingkungan}} - {{$view_daftarmisa->duduk}}</p>
      <p>{{$view_daftarmisa->jadwal}}</p> 
      <p><a href="/downloaddata/{{$view_daftarmisa->id}}" class="w3-button w3-orange"><i class="fa fa-download"> Download</i></a></p>
      @endforeach
    </div>
    <div class="w3-col m6">
      <img class="w3-image w3-round-large w3-right" src="http://127.0.0.1:8000/asset/images/gamping.png" alt="" width="400" height="400">
    </div>
  </div>
</div>
</div>

</body>
</html>