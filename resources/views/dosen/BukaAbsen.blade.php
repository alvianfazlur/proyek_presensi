<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buka Presensi</title>
</head>
<body>
    <div class="container" >
    @foreach($matkul as $m)
	<form action="/presensi/Absensi" method="post">
		{{ csrf_field() }}
		<div class="form-group">
            <label for="ID Matkul"> </label>
            <input type="hidden" class="form-control" name="id_matkul" value="{{ $m->id }}" readonly>
        </div>
		<div class="form-group">
            <label for="Nama">Matkul : </label>
            <input type="text" class="form-control" name="nama"value="{{ $m->nama_matkul}}" disabled>
        </div>
		<input class="btn btn-success" type="submit" value="Buka Absen">
	</form>
	@endforeach
</div>
</body>
</html>