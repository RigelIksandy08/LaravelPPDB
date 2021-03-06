<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Calon Siswa</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <h2>Tabel Data Calon Siswa</h2>
        </div>
        @if(session()->has('pesan'))
        <div class="alert alert-success">{{ session()->get('pesan') }}</div>
        @endif
        <table class="table">
            <tr>
                <td>No</td>
                <td>No PPDB</td>
                <td>Calon Siswa</td>
                <td>Asal Sekolah</td>
                <td>Pilihan 1</td>
                <td>Pilihan 2</td>
                <td>Aksi</td>
            </tr>

            @forelse ($calonsiswa as $itemSiswa)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $itemSiswa->noppdb }}</td>
                <td>{{ $itemSiswa->nama }}</td>
                <td>{{ $itemSiswa->asal_sekolah }}</td>
                <td>{{ $itemSiswa->pilihan1 }}</td>
                <td>{{ $itemSiswa->pilihan2 }}</td>
                <td>
                    <a href='{{ url("calonsiswa/$itemSiswa->id") }}'>
                        <button class="btn btn-primary">Detail</button>
                    </a>
                    <a href='{{ url("hapussiswa/$itemSiswa->id")}}'>
                        <button class="btn btn-danger">Hapus</button>
                    </a>
                </td>
            </tr>
            @empty
            <td colspan="7">Tidak Ada Data</td>
            @endforelse

        </table>

        <a href="{{ url('calonsiswa/create')}}" class="btn btn-success">Tambah Data</a>
    </div>
</body>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>