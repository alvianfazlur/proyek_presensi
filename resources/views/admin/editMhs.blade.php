<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container" >
    @foreach($mahasiswa as $m)
	<form action="/index/updateMhs" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $m->id }}"> <br/>
		<div class="form-group">
            <label for="NRP">NRP : </label>
            <input type="text" class="form-control" name="nrp"value="{{ $m->nrp}}">
        </div>
        <div class="form-group">
            <label for="Nama">Nama Mahasiswa : </label>
            <input type="text" class="form-control" name="nama"value="{{ $m->nama_mahasiswa}}">
        </div>
        <div class="form-group">
            <label for="angkatan">Alamat: </label>
            <input type="text" class="form-control" name="alamat"value="{{ $m->alamat}}">
        </div>
        <div class="form-group">
            <label for="kelas">Jurusan: </label>
            <input type="text" class="form-control" name="jurusan"value="{{ $m->jurusan}}" readonly>
        </div>
        <div class="form-group">
            <label for="kelas">Kelas: </label>
            <input type="text" class="form-control" name="kelas"value="{{ $m->kelas}}">
        </div>
        <div class="form-group">
            <label for="kelas">Angkatan: </label>
            <input type="text" class="form-control" name="angkatan"value="{{ $m->angkatan}}" readonly>
        </div>
        <div class="form-group">
            <label for="Todo">Nomor Telepon : </label>
            <input type="text" class="form-control" name="no_tlp"value="{{ $m->no_tlp}}">
        </div>
		<input class="btn btn-success" type="submit" value="Simpan Data">
	</form>
	@endforeach
</div>
</body>
</html>