<!DOCTYPE html>
<html lang="en">
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title>tambah siswa</title>
    </head>
    <body>
    <?php if (isset($_SESSION['message'])): ?>
            <div class="alert alert-<?=$_SESSION['msg_type']?>" role="alert">
                <?php
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                    unset($_SESSION['msg_type']);
                ?>
            </div> 
        <?php endif ?>
        <h3 id="title">Tambah Siswa</h3>
        <form action="proses_tambah_siswa.php" aria-labelledby="title" method="post">
        <label for="nama_siswa">Nama Siswa: </label>
        <input type="text" id="nama_siswa" name="nama_siswa" value="" class="form-control" required aria-required="true" aria-describedby="error-nama_siswa">
        <span id="error-nama_siswa">
        <?php
        echo !empty($errors['nama_siswa']) ? $errors['nama_siswa'] : '' 
        ?>
        </span>
        <label for="tanggal_lahir">Tanggal Lahir:</label> 
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="" class="form-control">
        
        <label for="gender">Gender:</label> 
        <select id="gender" name="gender" class="form-control">
            <option lang="en" value=""></option>
            <option lang="id" value="L">Laki-laki</option>
            <option lang="id" value="P">Perempuan</option>
        </select>
        
        <label for="alamat">Alamat:</label> 
        <textarea id="alamat" name="alamat" class="form-control" rows="4"></textarea>
        
        <label for="id_kelas">Kelas:</label> 
        <select id="id_kelas" name="id_kelas" class="form-control">
            <option lang="en" value=""></option>
            <?php 
            include "koneksi.php";
            $qry_kelas=mysqli_query($koneksi,"select * from kelas");
            while($data_kelas=mysqli_fetch_array($qry_kelas)){
                echo '<option lang="id" value="'.$data_kelas['id_kelas'].'">'.$data_kelas['nama_kelas'].'</option>';    
            }
            ?>
        </select>
        
        <label for="usernamee">Username:</label> 
        <input type="text" id="usernamee" name="usernamee" value="" class="form-control" required aria-required="true">
        
        <label for="password">Password:</label> 
        <input type="password" id="password" name="password" value="" class="form-control" required aria-required="true">

        <button type="submit" name="simpan" value="Tambah Siswa" class="btn btn-primary" aria-label='Submit form to Add student'>Tambah siswa</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>