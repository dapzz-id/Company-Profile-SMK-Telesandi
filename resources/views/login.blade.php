<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Tag Title --}}
    <title>SMK TELEKOMUNIKASI TELESANDI BEKASI | MASUK</title>
    {{-- Tag Icon --}}
    <link rel="icon" type="image/png" href="{{ asset('image/tels.png')}}">
    {{-- CSS Index --}}
    <link rel="stylesheet" href="{{ asset('css/output/style.css')}}">
    {{-- JS Jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    {{-- Form Desain untuk tampilan Login --}}
    <div class="w-dvw h-dvh flex justify-center items-center bg-cover shadow-2xl rounded-lg shadow-black blur-sm absolute" style="background-image: url('{{ asset('image/background_splash.png')}}');"></div>
    <div class="relative w-dvw h-dvh animate-zoom-in flex justify-center items-center" style="filter: drop-shadow(0.6px 0.6px 0 #000) drop-shadow(-0.05px -0.05px 0 #000) drop-shadow(1px -0.6px 0 #000) drop-shadow(0.3px 0.3px 0 #000);">
        <form class="flex flex-col w-bgcard h-96 mr-auto ml-auto bg-white justify-center rounded-2xl items-center">
            <h2 class="font-poppins font-bold text-2xl">MASUK P2DB</h2>
            <input type="email" id="textEmail" name="textEmail" placeholder="Masukkan Email" class="w-textBox mt-9 p-3 border border-gray-400 focus:outline-none focus:border-black rounded-lg">
            <input type="password" id="textPassword" name="textPassword" placeholder="Masukkan Password" class="w-textBox p-3 border border-gray-400 focus:outline-none focus:border-black rounded-lg mt-text">
            <button type="button" id="login" class="mt-8 bg-blue-600 w-64 h-max p-5 pb-2 pt-2 text-white text-sm rounded-md hover:bg-black ">Masuk</button>
            <h5 class=" text-sm mt-12">Apakah Anda belum mendaftar? <a href="{{ route('register')}}" class=" text-blue-800 cursor-pointer">Daftar</a></h5>
        </form>
    </div>
    
    {{-- Script Login JS Validation --}}
    <script src="{{ asset('js/login.js')}}"></script>
    <script src="{{ asset('js/checkLogin.js')}}"></script>
</body>
</html>