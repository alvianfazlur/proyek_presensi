<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>PresenZ</title>
</head>
<body>
    <table class="table table-hover table-striped table-bordered">
        <tr>
            <th  class="table-info">Mata Kuliah</th>
            <th  class="table-info">Tanggal Absensi</th>
            <th  class="table-info"></th>
        </tr>
        @foreach($presensi as $p)
        <tr>
            <td>{{ $p->matkul->nama_matkul}}</td>
            <td>{{ $p->created_at}}</td>
            <td>
                <center>
                @if(now()->toDateTimeString() < $p->created_at->addHour())
                <form action="/mahasiswa/Presensi" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="ID Matkul"> </label>
                        <input type="hidden" class="form-control" name="id_presensi" value="{{ $p->id }}" readonly>
                    </div>
                    <input class="btn btn-success" type="submit" value="Presensi">
                </form>
                @else
                    
                @endif
                </center>
            </td>
        </tr>
        @endforeach
</table>
</body>
</html>