<?php
// Untuk memeriksa apakah permintaan HTTP yang diterima menggunakan metode POST atau tidak.
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Untuk mendapatkan data yang dikirim melalui metode POST
    $email = $_POST["email"];
    $nis = $_POST["nis"];
    $alamat = $_POST["alamat"];
    $name = $_POST["nama"];
    $no_telp = $_POST["no_telp"];
    $school = $_POST["sekolah"];
    $pass = $_POST["password"];

    // Untuk mengkoneksikan ke database MySQL
    $con = mysqli_connect("localhost", "root", "", "dbschool");

    // Nilai yang dimasukkan ke dalam query akan disaring agar tidak rentan terhadap serangan SQL Injection
    $email = mysqli_real_escape_string($con, $email);
    $nis = mysqli_real_escape_string($con, $nis);
    $alamat = mysqli_real_escape_string($con, $alamat);
    $name = mysqli_real_escape_string($con, $name);
    $no_telp = mysqli_real_escape_string($con, $no_telp);
    $school = mysqli_real_escape_string($con, $school);
    $pass = mysqli_real_escape_string($con, $pass);

    
    if(empty($email) || empty($nis) || empty($alamat) || empty($name) || empty($no_telp) || empty($school)){
        echo "null";
    }else{
        $query = "INSERT INTO tbl_user (NIS, Nama, Alamat, No_Telp, Email, School, Password) VALUES ('$nis', '$name', '$alamat', '$no_telp', '$email', '$school', '$pass')";
        $result = mysqli_query($con, $query);
        
        if($result === TRUE){
            echo 'success';
        }else{
            echo 'error';
        }
    }
    mysqli_close($con);
    exit();
}