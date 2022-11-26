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
            <th  class="table-info">Keterangan</th>
            <th  class="table-info"></th>
        </tr>
        @foreach($matkul as $m)
        <tr>
            <td>{{ $m->nama_matkul }}</td>
            <td>{{ $m->keterangan }}</td>
            <td>
                <center>
                <a class="btn btn-warning" href="/presensi/bukaabsen/{{ $m->id }}">Buka Absen</a>
                </center>
            </td>
        </tr>
        @endforeach
</table>
</body>
</html>