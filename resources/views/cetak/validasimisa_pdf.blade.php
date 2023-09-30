<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tiket Misa</title>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Oswald:400,500,700');
*
{
    -webkit-box-sizing: border-box;
            box-sizing: border-box;
    margin: 0;
    padding: 0;
}


body
{
    font-family: 'Oswald', sans-serif;
}
a
{
    text-decoration: none;
}
.product-card {
    width: 800px;
    position: relative;
    box-shadow: 0 2px 7px #dfdfdf;
    margin: 50px auto;
    background: white;
}

.badge {
    position: absolute;
    left: 0;
    top: 5px;
    text-transform: uppercase;
    font-size: 20px;
    font-weight: 700;
    background: red;
    color: #fff;
    padding: 3px 30px;
}

.product-tumb {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 300px;
    padding: 50px;
    
}

.product-tumb img {
    max-width: 100%;
    max-height: 100%;
    justify-content: center;
}

.product-details {
    padding: 50px;
    background :orange;
}

.product-catagory {
    display: block;
    font-size: 15px;
    font-weight: 700;
    text-transform: uppercase;
    color: red;
    margin-bottom: 20px;
}

.product-details h4 a {
    font-weight: 500;
    display: block;
    margin-bottom: 18px;
    text-transform: uppercase;
    color: #363636;
    text-decoration: none;
    transition: 0.3s;
}

.product-details h4 a:hover {
    color: #fbb72c;
}

.product-details p {
    font-size: 15px;
    line-height: 22px;
    margin-bottom: 18px;
    color: red;
}

  </style>
</head>
<body>
@foreach ($daftarmisa as $daftarmisa)
<div class="product-card">
		<div class="badge">Bukti Pendaftaran Misa</div>
		<div class="product-tumb">
    <img src="asset/images/logogerejabaru.jpg" ><img>
		</div>
		<div class="product-details">
			<span class="product-catagory">DATA DIRI : </span> 
			<h3>Nama : {{$daftarmisa->nama}}</h3>
      <h3>Lingkungan : {{$daftarmisa->lingkungan}}</h3>
      <h3>Jadwal : {{$daftarmisa->jadwal}}</h3> 
      <br>
      <h3>Posisi Duduk : {{$daftarmisa->duduk}}</h3> 
			<p>Silahkan datang sesuai dengan <b>JADWAL</b> yang telah dipilih</p>
		</div>
	</div>
  @endforeach
</body>
</html>