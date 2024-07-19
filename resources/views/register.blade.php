<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Tag Title --}}
    <title>SMK TELEKOMUNIKASI TELESANDI BEKASI | DAFTAR</title>
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
    <div class="relative w-dvw h-dvh flex animate-zoom-in justify-center items-center" style="filter: drop-shadow(0.6px 0.6px 0 #000) drop-shadow(-0.05px -0.05px 0 #000) drop-shadow(1px -0.6px 0 #000) drop-shadow(0.3px 0.3px 0 #000);">
        <form class="flex flex-col w-bgcard h-cshg mr-auto ml-auto bg-white justify-center rounded-2xl items-center">
            <h2 class="font-poppins font-bold text-2xl">DAFTAR P2DB</h2>
            <input type="email" id="textEmail" name="textEmail" placeholder="Masukkan Email" class="w-textBox mt-9 p-3 border border-gray-400 focus:outline-none focus:border-black rounded-lg">
            <input type="number" id="textNis" name="textNis" maxlength="12" placeholder="Masukkan NIS" class="w-textBox p-3 border border-gray-400 focus:outline-none focus:border-black rounded-lg mt-text">
            <input type="text" id="textName" name="textName" placeholder="Masukkan Nama" class="w-textBox p-3 border border-gray-400 focus:outline-none focus:border-black rounded-lg mt-text">
            <input type="text" id="textAlamat" name="textAlamat" placeholder="Masukkan Alamat" class="w-textBox p-3 border border-gray-400 focus:outline-none focus:border-black rounded-lg mt-text">
            <input type="text" id="textSchool" name="textSchool" placeholder="Masukkan Asal Sekolah" class="w-textBox p-3 border border-gray-400 focus:outline-none focus:border-black rounded-lg mt-text">
            <input type="number" id="textNoTelp" name="textNoHp" maxlength="12" placeholder="Masukkan Nomor Telepon" class="w-textBox p-3 border border-gray-400 focus:outline-none focus:border-black rounded-lg mt-text">
            <div class=" w-bgcard h-max items-center right-0 float-right flex flex-row m-0 mt-text">
                <h5 class=" ml-auto pointer-events-none select-none">Password:</h5>
                <h6 class=" mr-auto ml-1" id="textPassword"></h6>
            </div>
            <button type="button" id="signup" name="signup" class="mt-8 bg-blue-600 w-64 h-max p-5 pb-2 pt-2 text-white text-sm rounded-md hover:bg-black ">Daftar</button>
            <h5 class=" text-sm mt-12">Apakah Anda sudah mendaftar? <a href="{{ route('login')}}" class=" text-blue-800 cursor-pointer">Masuk</a></h5>
        </form>
    </div>
    
    {{-- Script Login JS Validation --}}
    <script src="{{ asset('js/register.js')}}"></script>
</body>
</html>