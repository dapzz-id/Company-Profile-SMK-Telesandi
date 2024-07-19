<?php
// Untuk memeriksa apakah permintaan HTTP yang diterima menggunakan metode POST atau tidak.
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Untuk mendapatkan data yang dikirim melalui metode POST
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Untuk mengkoneksikan ke database MySQL
    $con = mysqli_connect("localhost", "root", "", "dbschool");

    // Nilai yang dimasukkan ke dalam query akan disaring agar tidak rentan terhadap serangan SQL Injection
    $email = mysqli_real_escape_string($con, $email);
    $password = mysqli_real_escape_string($con, $password);
    $query = "SELECT * FROM tbl_user WHERE Email='$email' AND Password='$password'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);


    if(empty($email) || empty($password)){
        echo "null";
    }else{
        if(mysqli_num_rows($result) > 0){
            echo "success," . $row['id'];
        }else{
            echo "empty";
        }
    }
    mysqli_close($con);
    exit();
}