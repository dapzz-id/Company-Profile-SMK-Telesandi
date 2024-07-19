<?php

// Membuat koneksi
$conn = new mysqli("localhost", "root", "", "dbschool");

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil semua data dari tabel tbl_class
$sql = "SELECT * FROM tbl_class";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Inisialisasi array untuk menyimpan data
    $data = array();

    // Loop untuk membaca setiap baris hasil query
    while($row = $result->fetch_assoc()) {
        // Menambahkan setiap baris ke dalam array
        $data[] = $row;
    }

    // Mengembalikan data sebagai respons JSON
    echo json_encode($data);
}

// Menutup koneksi
$conn->close();