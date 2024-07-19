<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Tag Title --}}
    <title>SMK TELEKOMUNIKASI TELESANDI BEKASI | P2DB</title>
    {{-- Tag Icon --}}
    <link rel="icon" type="image/png" href="{{ asset('image/tels.png')}}">
    {{-- CSS Index --}}
    <link rel="stylesheet" href="{{ asset('css/output/index/style-p2db.css') }}">
</head>
<body>
    <header id="header">
        <h3>Selamat Datang:<h3 id="textName"></h3></h3>
        <div id="logoutBtn"><h5>Log Out</h5></div>
    </header>

    {{-- Konfirmasi button sebelum logout --}}
    <div id="myModal" class="modal">
        <div class="modal-content">
            {{-- <span class="close">&times;</span> --}}
            <h2>KONFIRMASI</h2>
            <h4>Apakah Anda yakin ingin keluar dari akun ini?</h4>
            <button type="button" id="confirmBtn">Ya</button>
            <button type="button" id="cancelBtn">Batal</button>
        </div>
    </div>

    <section class="sec-utama">
        <h1>ISI KONTEN P2DB</h3>
    </section>

    {{-- Script Login JS Validation --}}
    <script src="{{ asset('js/checkLogin.js')}}"></script>

    {{-- Script JS P2DB --}}
    <script src="{{ asset('js/p2db-home.js')}}"></script>
</body>
</html>