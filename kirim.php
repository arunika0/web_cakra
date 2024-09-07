<?php
include 'koneksi/koneksi.php';
if(isset($_POST['name'])){
    $name = $_POST['name'];
    $nim = $_POST['nim'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $sql = "INSERT INTO form (name, nim, email, message) VALUES ('$name', '$nim', '$email', '$message')";
    $query = mysqli_query($koneksi, $sql);
    if($query){
        header("Location:index.php?notif=kirimberhasil");
    }else{
        header("Location:index.php?notif=kirimgagal");
    }
}
?>