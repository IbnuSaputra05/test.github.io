<?php

include("koneksi.php");

if (isset($_POST['Daftar'])) {

    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Gender = $_POST['Gender'];
    $City = $_POST['City'];
    $Status = $_POST['Status'];

    $sql = "INSERT INTO tb_test
        (Name, Email, Gender, City, Status) VALUES 
        ('$Name','$Email','$Gender','$City','$Status')";
    $query = mysqli_query($con, $sql);

    if ($query) {
        header('Location: form.html?status=sukses');
    } else {
        header('Location: form.html?status=gagal');
    }
} else {
    die("Akses Dilarang....");
}
