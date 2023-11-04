<!DOCTYPE html>
<html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<head>
<title>Pendaftaran Misa</title> 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="asset/images/logo2.jpg">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* \Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}

.select2-container .select2-selection--single{
    height:34px !important;
}
.select2-container--default .select2-selection--single{
         border: 1px solid orange !important; 
     border-radius: 0px !important; 
}

.font {
  color: orange;
  font-size: 17px;
  text-transform: uppercase;
}

</style>
</head>

<body class="w3-light-gray"> 
<div class="w3-bar w3-white w3-border-bottom w3-xlarge w3-card">
  <img src="asset\images\logogereja.png" class="w3-bar-item w3-left" style="width:10%;"></img>
  <a href="/" class="w3-bar-item w3-right w3-hide-small"><i class="font fa fa-arrow-left"> Kembali</i></a>
</div>
  <div class="w3-content w3-justify w3-text-black" id="about">
  <header class="w3-container" style="margin-left:150px;margin-right:150px">
    <h2 class="w3-text-light-black">Ayo Daftar Misa</h2> 
    <hr style="width:240px" class="w3-opacity">
    <p>Silahkan isi form dibawah ini : </p>
    <p>Sebelum mengikuti misa, seluruh umat diwajibkan untuk mengisi segala bentuk informasi yang dibutuhkan secara <b>JUJUR dan AKURAT</b>. 
        Seluruh informasi dalam proses pendaftaran akan tersimpan kedalam database yang dimiliki dan dikelola oleh pihak gereja.</p> 
    <div class="modal-body">
        <form action="/daftar" method="POST">
          {{csrf_field()}}
           <div class="form-group">
           <input type="hidden" name="jumlah" value="1"/>
           <label for="jadwalmisa">Pilih Jadwal</label>                        
                 @if(count($jadwalmisa) == 0) 
                 <p>Jadwal Misa Kosong</p>
                 @else
                 <select name="jadwal" class="form-control select2 @error('jadwal') is-invalid @enderror" name="jadwal" value="{{ old('jadwal')}}" required autocomplete="jadwal" autofocus />
                 <option></option>
                 @foreach($jadwalmisa as $jadwalmisa)
                 @if($jadwalmisa->kuota == "0")
                 @else 
                 <option>{{$jadwalmisa->keterangan}} - Hari : {{$jadwalmisa->hari}}, Tanggal : {{$jadwalmisa->tanggal}}, Jam : {{$jadwalmisa->jam}}</option>
                 @endif
                 <input type="hidden" name="misa_id" value="{{$jadwalmisa->id}}"/>
                 @endforeach
                 @endif
                 </select>                 
                 @error('jadwal')
                <span class="invalid-feedback" role="alert" >
                	<strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>          
            <div class="form-group">
            <label for="exampleInputEmail1">Nama Umat (Isi sesuai KTP)</label>
            <input id="exampleInputEmail1" type="" placeholder="" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus />
			      @error('nama')
                <span class="invalid-feedback" role="alert" >
                	<strong>{{ $message }}</strong>
                </span>
            @enderror
           </div>
            <div class="form-group">
              <label for="exampleInputEmail1">No Handphone</label>
              <input id="exampleInputEmail1" type="number" placeholder="" class="form-control @error('nama') is-invalid @enderror" name="no_hp" value="{{ old('no_hp') }}" required autocomplete="no_hp" autofocus />
			      @error('no_hp')
                <span class="invalid-feedback" role="alert" >
                	<strong>{{ $message }}</strong>
                </span>
            @enderror
           </div>
           <div class="form-group">
              <label for="exampleInputEmail1">Alamat Lengkap (Sesuai domisili saat ini)</label>
              <input id="exampleInputEmail1" type="" placeholder="" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" autofocus />
			        @error('alamat')
                <span class="invalid-feedback" role="alert" >
                	<strong>{{ $message }}</strong>
                </span>
              @enderror
           </div>
           <div class="form-group">
                 <label for="exampleInputEmail1">Jenis Kelamin </label>
                 <div>
                  <input type="radio" id="" name="jns_klmn" value="Laki-laki" class=" @error('') is-invalid @enderror" name="" value="" required autocomplete="" autofocus />
                  <label for="">Laki-laki</label><br>
                  <input type="radio" id="" name="jns_klmn" value="perempuan" />
                  <label for="">Perempuan</label>
                 </div>
           </div>
            <div class="form-group">
                 <label for="exampleInputEmail1">Usia </label><br>
                 <input type="radio" id="" name="usia" value="Bawah 13 Tahun" class=" @error('') is-invalid @enderror" name="" value="" required autocomplete="" autofocus />
                 <label for="">Bawah 13 Tahun</label><br>
                 <input type="radio" id="" name="usia" value="13-17 Tahun" />
                 <label for="">13-17 Tahun</label><br>
                 <input type="radio" id="" name="usia" value="18-30 Tahun" />
                 <label for="">18-30 Tahun</label><br>
                 <input type="radio" id="" name="usia" value="31-50 Tahun" />
                 <label for="">31-50 Tahun</label><br>
                 <input type="radio" id="" name="usia" value="51-60 Tahun" />
                 <label for="">51-60 Tahun</label><br>
                 <input type="radio" id="" name="usia" value="Di atas 60 Tahun" />
                 <label for="">Di atas 60 Tahun</label>
            </div>           
            <div class="form-group">
                 <label for="exampleInputEmail1">Asal Lingkungan </label>
                 <input class="form-control" name="lingkungan" class="form-control @error('lingkungan') is-invalid @enderror" name="lingkungan" value="{{ old('lingkungan') }}" required autocomplete="lingkungan" autofocus />             
                 @error('lingkungan')
                <span class="invalid-feedback" role="alert" >
                	<strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                 <label for="exampleInputEmail1">Pilih Tempat Duduk </label>
                 <div>
                  <input type="radio" id="" name="duduk" value="Gedung Utama" class=" @error('') is-invalid @enderror" required autocomplete="" autofocus />
                  <label for="">Gedung Utama</label><br>
                  <input type="radio" id="" name="duduk" value="Sayap Utara" />
                  <label for="">Sayap Utara</label>
                  <div>
                  <input type="radio" id="" name="duduk" value="Sayap Selatan" />
                  <label for="">Sayap Selatan</label>
                  </div>
                 </div>
                 </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary w3-orange">DAFTAR</button>
      </form>
    </div>
  </header>
</div>    
</div>

<script>
    $('.select2').select2();
</script>

</body>
</html>
