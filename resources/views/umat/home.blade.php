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

</style>
</head>
<body class="w3-white">

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-black" id="about">
    <h2 class="w3-text-light-black">Ayo Daftar Misa</h2> 
    <hr style="width:240px" class="w3-opacity">
    <p>Silahkan isi form dibawah ini : </p>
    <p>Sebelum mengikuti misa, seluruh umat diwajibkan untuk mengisi segala bentuk informasi yang dibutuhkan secara <b>JUJUR dan AKURAT</b>. 
        Seluruh informasi dalam proses pendaftaran akan tersimpan kedalam database yang dimiliki dan dikelola oleh pihak gereja.</p>
      
  <header class="w3-container">
    <div class="modal-body">
        <form action="/addpendaftaran" method="POST">
          {{csrf_field()}}
           <div class="form-group">
           <label for="jadwalmisa">Pilih Jadwal</label>      
           <p>( Jika jadwal tidak tersedia kemungkinan kuota sudah penuh )</p>    
                 <select name="jadwal" class="form-control select2 @error('jadwal') is-invalid @enderror" name="jadwal" value="{{ old('jadwal')}}" required autocomplete="jadwal" autofocus />>
                 <option></option>
                 @foreach($jadwalmisa as $jadwalmisa)
                 <option>{{$jadwalmisa->keterangan}} - Hari : {{$jadwalmisa->hari}} Tanggal : {{$jadwalmisa->tanggal}} Jam : {{$jadwalmisa->jam}} </option>
                 @endforeach
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
                 <label for="exampleInputEmail1">Pilih Asal Lingkungan </label>
                 <select class="form-control select2" name="lingkungan" class="form-control @error('lingkungan') is-invalid @enderror" name="lingkungan" value="{{ old('lingkungan') }}" required autocomplete="lingkungan" autofocus />             
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
                 @error('lingkungan')
                <span class="invalid-feedback" role="alert" >
                	<strong>{{ $message }}</strong>
                </span>
                @enderror
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
