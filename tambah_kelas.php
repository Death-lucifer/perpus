<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title>Tambah Kelas</title>
    </head>
    <body>
        <h3 id="formHeading">Tambah Kelas</h3>
        <form action="proses_tambah_kelas.php" method="post">
            <label for="nama_kelas">Nama Kelas :</label>
            <input type="text" id="nama_kelas" name="nama_kelas" value="" class="form-control" aria-describedby="formHeading" required aria-required="true">
            <label for="nama_kelompok">Nama Kelompok :</label>
            <input type="text" id="nama_kelompok" name="kelompok" value="" class="form-control" aria-describedby="formHeading" required aria-required="true">
            <label for="nama_kelompok">Angkatan ke berapa? :</label>
            <input type="text" id="angkatan" name="angkatan" value="" class="form-control" aria-describedby="formHeading" required aria-required="true">
            <button type="submit" name="simpan" value="Tambah Kelas" class="btn btn-primary" aria-label='Submit'>Tambah Kelas </button>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>