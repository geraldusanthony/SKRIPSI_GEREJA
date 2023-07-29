<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Umat</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif} 

    body {
    background: white;
    }

    .form-control:focus {
    box-shadow: none;
    border-color: orange;
    }

    .profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
    }

    .profile-button:hover {
    background: #682773
    }

    .profile-button:focus {
    background: #682773;
    box-shadow: none
    }

    .profile-button:active {
    background: #682773;
    box-shadow: none
    }

    .back:hover {
    color: #682773;
    cursor: pointer
    }

    .labels {
    font-size: 12px
    }

    .add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
    }
</style>
</head>
<body>
    <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            @foreach($view_umat as $umat)
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="{{asset('umat/'.$umat->images)}}"><span class="font-weight-bold">{{$umat->nama_umat}}</span><span class="text-black-50"></span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2 class="text-right">Profil Umat</h2>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Nama Umat</label><input type="text" class="form-control" value="{{$umat->nama_umat}}"></div>
                    <div class="col-md-12"><label class="labels">Nama Baptis</label><input type="text" class="form-control" value="{{$umat->nama_bpts}}"></div>
                    <div class="col-md-12"><label class="labels">Warga Negara</label><input type="text" class="form-control" value="{{$umat->warga}}"></div>
                    <div class="col-md-12"><label class="labels">Negara</label><input type="text" class="form-control" value="{{$umat->negara}}"></div>
                    <div class="col-md-12"><label class="labels">NIK</label><input type="text" class="form-control" value="{{$umat->nik}}"></div>
                    <div class="col-md-12"><label class="labels">No Kartu Keluarga</label><input type="text" class="form-control" value="{{$umat->no_kk}}"></div>
                    <div class="col-md-12"><label class="labels">Jenis Kelamin</label><input type="text" class="form-control" value="{{$umat->jns_kelamin}}"></div>
                    <div class="col-md-12"><label class="labels">Lingkungan</label><input type="text" class="form-control" value="{{$umat->ling}}"></div>
                    <div class="col-md-12"><label class="labels">Tanggal Lahir</label><input type="text" class="form-control" value="{{$umat->tgl_lahir}}"></div>
                    <div class="col-md-12"><label class="labels">Tempat Lahir</label><input type="text" class="form-control" value="{{$umat->tmp_lhr}}"></div>
                    <div class="col-md-12"><label class="labels">Golongan Darah</label><input type="text" class="form-control" value="{{$umat->gol_darah}}"></div>
                    <div class="col-md-12"><label class="labels">Alamat</label><input type="text" class="form-control" value="{{$umat->alamat}}"></div>
                    <div class="col-md-12"><label class="labels">Kota/Kabupaten</label><input type="text" class="form-control" value="{{$umat->kota_kab}}"></div>
                    <div class="col-md-12"><label class="labels">Kecamatan</label><input type="text" class="form-control" value="{{$umat->kec}}"></div>
                    <div class="col-md-12"><label class="labels">Kelurahan</label><input type="text" class="form-control" value="{{$umat->kel}}"></div>
                    <div class="col-md-12"><label class="labels">Nomer Handphone</label><input type="text" class="form-control" value="{{$umat->no_hp}}"></div>
                    <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" value="{{$umat->email}}"></div>
                    <div class="col-md-12"><label class="labels">Pendidikan Terakhir</label><input type="text" class="form-control" value="{{$umat->pend}}"></div>
                    <div class="col-md-12"><label class="labels">Pekerjaan</label><input type="text" class="form-control" value="{{$umat->pekerjaan}}"></div>
                    <p></p>
                    <p><a href="/daftarumat" class="col-md-12 w3-button w3-orange"><i class="fa fa-home"> </i>Kembali</a></p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>

</body>
</html>