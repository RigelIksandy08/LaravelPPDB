<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Calon Siswa</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</head>

<body>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-8">

                <h1>Form Data Calon Siswa {{ $calonsiswa->nama }}</h1>


                <div class="form-group">
                    <label for="noppdb">Nomor PPDB</label>
                    <div> {{ $calonsiswa->noppdb }} </div>
                </div>

                <div class="form-group">
                    <label for="nama">Nama Calon Siswa</label>
                    <div> {{ $calonsiswa->nama }} </div>
                </div>

                <div class="form-group">
                    <label for="asal_sekolah">Asal Sekolah</label>
                    <div> {{ $calonsiswa->asal_sekolah }} </div>
                </div>

                <div class="form-group">
                    <label for="pilihan1">Pilihan Jurusan 1</label>
                    <div> {{ $calonsiswa->pilihan1 }} </div>
                </div>

                <div class="form-group">
                    <label for="pilihan2">Pilihan Jurusan 1</label>
                    <div> {{ $calonsiswa->pilihan2 }} </div>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <div> {{ $calonsiswa->alamat }} </div>
                </div>

                <div class="form-group">
                    <label for="nohp">Nomor Handphone</label>
                    <div> {{ $calonsiswa->nohp }} </div>
                </div>
                <hr>

            </div>
        </div>
    </div>
</body>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>