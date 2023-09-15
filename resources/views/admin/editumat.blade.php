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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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

<!-- !PAGE CONTENT! -->
<div class="w3-main">
  <header class="w3-container" style="margin-left:400px;margin-top:20px;margin-right:200px">
    <h2><b>Edit Data Umat</b></h2>
    <div class="modal-body">
        <form action="{{route('editumat',['id'=>$umat->id])}}" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="form-group" style="width:60%;">
              <label for="exampleInputEmail1">Nama Umat</label>
              <input name="nama_umat"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$umat->nama_umat}}">  
           </div>
           <div class="form-group">
                 <label for="exampleInputEmail1">Baptis : </label>
                 <div>
                 <input type="radio" id="" name="baptis" value="sudah" class=" @error('') is-invalid @enderror"  required autocomplete="" autofocus />
                  <label for="">Sudah</label><br>
                  <input type="radio" id="" name="baptis" value="belum"/>
                  <label for="">Belum</label>
                @error('baptis')
                <span class="invalid-feedback" role="alert" >
                	<strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
           <div class="form-group" style="width:60%;">
              <label for="exampleInputEmail1">Nama Baptis : </label>
              <input name="nama_bpts" type="text" class="form-control" value="{{$umat->nama_bpts}}" id="exampleInputEmail1" aria-describedby="emailHelp">           
           </div>
           <div class="form-group" style="width:30%;">
              <label for="exampleInputEmail1">Tanggal Baptis : </label>
              <input name="tgl_bpts" type="date" class="form-control" value="{{$umat->tgl_bpts}}" id="exampleInputEmail1" aria-describedby="emailHelp">              
           </div>      
           <div class="form-group" style="width:60%;">
              <label for="exampleInputEmail1">Paroki Baptis/Penerima : </label>
              <input name="paroki" type="text" class="form-control" value="{{$umat->paroki}}" id="exampleInputEmail1" aria-describedby="emailHelp">               
           </div>  
           <div class="form-group" style="width:60%;">
              <label for="exampleInputEmail1">Wali Baptis : </label>
              <input name="wali_bpts" type="text" class="form-control" value="{{$umat->wali_bpts}}" id="exampleInputEmail1" aria-describedby="emailHelp">                
           </div>
           <div class="form-group">
                 <label for="exampleInputEmail1">Komuni Pertama: </label>
                 <div>
                 <input type="radio" id="" name="komuni" value="sudah" class=" @error('') is-invalid @enderror"  required autocomplete="" autofocus />
                  <label for="">Sudah</label><br>
                  <input type="radio" id="" name="komuni" value="belum"/>
                  <label for="">Belum</label>
                @error('komuni')
                <span class="invalid-feedback" role="alert" >
                	<strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
           <div class="form-group" style="width:30%;">
              <label for="exampleInputEmail1">Tanggal Komuni Pertama : </label>
              <input name="tgl_kp" type="date" class="form-control" value="{{$umat->tgl_kp}}" id="exampleInputEmail1" aria-describedby="emailHelp">             
           </div>
           <div class="form-group" style="width:60%;">
              <label for="exampleInputEmail1">Paroki Komuni Pertama : </label>
              <input name="paroki_kp" type="text" class="form-control" value="{{$umat->paroki_kp}}" id="exampleInputEmail1" aria-describedby="emailHelp">             
           </div>
           <div class="form-group" style="width:60%;">
                 <label for="exampleInputEmail1">Warga Negara : </label> 
            <input name="warga" type="text" class="form-control"  value="{{$umat->warga}}" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group" style="width:60%;">
                 <label for="exampleInputEmail1">Negara : </label>
                 <input name="negara" type="text" class="form-control"  value="{{$umat->negara}}" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
          <div class="form-group" style="width:60%;">
            <label for="exampleInputEmail1">NIK</label> 
            <input name="nik" type="text" class="form-control" value="{{$umat->nik}}" id="exampleInputEmail1" aria-describedby="emailHelp">
         </div>
         <div class="form-group" style="width:60%;">
            <label for="exampleInputEmail1">No. Kartu Keluarga</label> 
            <input name="no_kk" type="text" class="form-control" value="{{$umat->no_kk}}" id="exampleInputEmail1" aria-describedby="emailHelp">
         </div>
         <div class="form-group" style="width:60%;">
                 <label for="exampleInputEmail1">Jenis Kelamin : </label>
                 <input name="jns_kelamin" type="text" class="form-control" value="{{$umat->jns_kelamin}}" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group" style="width:60%;">
                 <label for="exampleInputEmail1">Pilih Lingkungan </label>
                 <select class="select2 form-control" name="ling">
                 <option>{{$umat->ling}}</option>
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
            </div>
           <div class="form-group" style="width:30%;">
              <label for="exampleInputEmail1">Tanggal Lahir</label>
              <input name="tgl_lahir" type="date" class="form-control"  value="{{$umat->tgl_lahir}}" id="exampleInputEmail1" aria-describedby="emailHelp">
           </div>
           <div class="form-group" style="width:60%;">
              <label for="exampleInputEmail1">Tempat Lahir : </label>
              <input name="tmp_lhr" type="text" class="form-control"  value="{{$umat->tmp_lhr}}" id="exampleInputEmail1" aria-describedby="emailHelp">             
           </div>
           <div class="form-group" style="width:60%;">
                 <label for="exampleInputEmail1">Golongan Darah : </label>
                 <select class="form-control select2 @error('gol_darah') is-invalid @enderror" required autocomplete="gol_darah" name="gol_darah">
                 <option>{{$umat->gol_darah}}</option>
                 <option>A</option>
                 <option>B</option>
                 <option>O</option>
                 <option>AB</option>
                  <option>Tidak Tahu</option>
                 </select>
                 @error('gol_darah')
                <span class="invalid-feedback" role="alert" >
                	<strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group" style="width:60%;">
              <label for="exampleInputEmail1">Alamat : </label>
              <input name="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" required autocomplete="alamat" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$umat->alamat}}">  
               @error('alamat')
                <span class="invalid-feedback" role="alert" >
                	<strong>{{ $message }}</strong>
                </span>
              @enderror
           </div>
           <div class="form-group" style="width:60%;">
              <label for="exampleInputEmail1">Kota / Kabupaten : </label>
              <select class="select2 form-control @error('kota_kab') is-invalid @enderror" required autocomplete="kota_kab" name="kota_kab" id="exampleInputEmail1" aria-describedby="emailHelp">
              <option>{{$umat->kota_kab}}</option>
                 <option>Kabupaten Sleman</option>
                 <option>Kabupaten Bantul</option>
                 <option>Kabupaten Kulon Progo</option>
                 <option>Kabupaten Gunung Kidul</option>
                 <option>Kota Yogyakarta</option>
                 </select>
               @error('kota_kab')
                <span class="invalid-feedback" role="alert">
                	<strong>{{ $message }}</strong>
                </span>
              @enderror
           </div>
           <div class="form-group" style="width:60%;">
              <label for="exampleInputEmail1">Kecamatan : </label>
              <select class="form-control select2 @error('kec') is-invalid @enderror" required autocomplete="kec" name="kec" id="exampleInputEmail1" aria-describedby="emailHelp">
              <option>{{$umat->kec}}</option>
                 <option>Gamping</option>
                 <option>Godean</option>
                 </select>
               @error('kec')
                <span class="invalid-feedback" role="alert" >
                	<strong>{{ $message }}</strong>
                </span>
              @enderror
           </div>
           <div class="form-group" style="width:60%;">
              <label for="exampleInputEmail1">Kelurahan : </label>
              <input name="kel" type="text" class="form-control @error('kel') is-invalid @enderror" required autocomplete="kel" value="{{$umat->kel}}" id="exampleInputEmail1" aria-describedby="emailHelp">  
               @error('kel')
                <span class="invalid-feedback" role="alert" >
                	<strong>{{ $message }}</strong>
                </span>
              @enderror
           </div>
           <div class="form-group" style="width:60%;">
              <label for="exampleInputEmail1">No Handphone : </label>
              <input name="no_hp" type="number" class="form-control @error('no_hp') is-invalid @enderror" required autocomplete="no_hp" value="{{$umat->no_hp}}" id="exampleInputEmail1" aria-describedby="emailHelp">  
               @error('no_hp')
                <span class="invalid-feedback" role="alert" >
                	<strong>{{ $message }}</strong>
                </span>
              @enderror
           </div>
           <div class="form-group" style="width:60%;">
              <label for="exampleInputEmail1">Email : </label>
              <input name="email" type="text" class="form-control @error('email') is-invalid @enderror" required autocomplete="email" value="{{$umat->email}}" id="exampleInputEmail1" aria-describedby="emailHelp">  
               @error('email')
                <span class="invalid-feedback" role="alert" >
                	<strong>{{ $message }}</strong>
                </span>
              @enderror
           </div>
           <div class="form-group" style="width:60%;">
              <label for="exampleInputEmail1">Pendidikan Terakhir : </label>
              <select class="form-control select2 @error('pend') is-invalid @enderror" required autocomplete="pend" name="pend">
              <option>{{$umat->pend}}</option>
                 <option>Lain-Lain</option>
                 <option>KB/TK</option>
                 <option>SD</option>
                 <option>SLTP/SMP</option>
                 <option>SLTA/SMA</option>
                 <option>D1</option>
                 <option>D2</option>
                 <option>D3</option>
                 <option>D4</option>
                 <option>S1</option>
                 <option>S2</option>
                 <option>S3</option>
                 <option>SLB</option>
                 <option>Non Formal</option>
                 </select>
               @error('pend')
                <span class="invalid-feedback" role="alert" >
                	<strong>{{ $message }}</strong>
                </span>
              @enderror
           </div>
           <div class="form-group" style="width:60%;">
              <label for="exampleInputEmail1">Pekerjaan : </label>
              <select class="form-control select2 @error('pekerjaan') is-invalid @enderror" required autocomplete="pekerjaan" name="pekerjaan">
              <option>{{$umat->pekerjaan}}</option>
                 <option>Belum/Tidak Bekerja</option>
                 <option>Mengurus Rumah Tangga</option>
                 <option>Pelajar/Mahasiswa</option>
                 <option>Pensiunan</option>
                 <option>Pegawai Negri Sipil</option>
                 <option>Karyawan Swasta</option>
                 <option>Karyawan BUMN</option>
                 <option>Karyawan Honorer</option>
                 <option>Asisten Rumah Tangga</option>
                 <option>Rohaniawan</option>
                 <option>Tentara Nasional Indonesia</option>
                 <option>Kepolisian RI</option>
                 <option>Pengusaha</option>
                 <option>Wiraswasta</option>
                 <option>Lain-Lain</option>
                 </select>
               @error('pekerjaan')
                <span class="invalid-feedback" role="alert" >
                	<strong>{{ $message }}</strong>
                </span>
              @enderror
           </div>
           <div class="form-group" style="width:60%;">
                  <label for="exampleInputEmail1">Foto Umat</label>
                  <input name="images" type="file" class="@error('images') is-invalid @enderror" 
                    required autocomplete="images" id="image" aria-describedby="emailHelp" placeholder="Nama Blog" 
                    accept="image/gif, image/jpeg, image/png" value="{{$umat->images}}">
                @error('images')
                <span class="invalid-feedback" role="alert" >
                	<strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
      </div>
        <div class="modal-footer" style="width:60%;">
        <button type="submit" class="btn btn-primary w3-orange">Simpan</button>
    </form>
    </header>
    </div> 
  

  <script>
    $('.select2').select2();
</script>

</body>
</html>
