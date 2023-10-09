<?php
if($_POST){
    $nama_siswa=$_POST['nama_siswa'];
    $tanggal_lahir=$_POST['tanggal_lahir'];
    $alamat=$_POST['alamat'];
    $gender=$_POST['gender'];
    $usernamee=$_POST['usernamee'];
    $password= $_POST['password'];
    $id_kelas=$_POST['id_kelas'];
    $errors = [];

    if(empty($nama_siswa)){
        $errors['nama_siswa'] = "Nama siswa tidak boleh kosong";
    } 
    if(empty($usernamee)){
        $errors['usernamee'] = "Usernamee tidak boleh kosong";
    }
    if(empty($password)){
        $errors['password'] = "Password tidak boleh kosong";
    }

    if (count($errors) > 0) {
        $_SESSION['errors'] = $errors;
        header("Location: tampil_siswa.php");
    } else {    
        include "koneksi.php";
        $insert=mysqli_query($koneksi,"insert into siswa (nama_siswa, tanggal_lahir, gender, alamat, usernamee, password, id_kelas) values 
        ('".$nama_siswa."','".$tanggal_lahir."','".$gender."','".$alamat."','".$usernamee."','".md5($password)."','".$id_kelas."')") 
        or die(mysqli_connect_error($koneksi));
      
       if($insert){
            $_SESSION['message'] = "Sukses menambahkan siswa";
            $_SESSION['msg_type'] = "success";
       } else {    
            $_SESSION['message'] = "Gagal menambahkan siswa";
            $_SESSION['msg_type'] = "danger";
       }
        header("Location: tampil_siswa.php");
    }
}
?>