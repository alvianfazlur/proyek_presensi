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
    @foreach($rekap as $rkp)
	<form action="/index/updatePresensi" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $rkp->id }}"> <br/>
		<div class="form-group">
            <label for="status">Status : </label>
            <input type="text" class="form-control" name="status" value="{{ $rkp->is_hadir}}">
        </div>
		<input class="btn btn-success" type="submit" value="Simpan Data">
	</form>
	@endforeach
</div>
</body>
</html>