<?php
// Untuk memeriksa apakah permintaan HTTP yang diterima menggunakan metode POST atau tidak.
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Untuk mendapatkan data yang dikirim melalui metode POST
    $userID = $_POST["id"];

    // Untuk mengkoneksikan ke database MySQL
    $con = mysqli_connect("localhost", "root", "", "dbschool");

    // Nilai yang dimasukkan ke dalam query akan disaring agar tidak rentan terhadap serangan SQL Injection
    $userID = mysqli_real_escape_string($con, $userID);
    $query = "SELECT * FROM tbl_user WHERE id='$userID'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);

    if(empty($userID)){
        echo "null";
    }else{
        if(mysqli_num_rows($result) > 0){
            $name = $row['Nama'];
            echo $name;
        }else{
            echo "empty";
        }
    }
    mysqli_close($con);
    exit();
}