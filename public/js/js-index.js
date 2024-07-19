// const { l } = require("vite/dist/node/types.d-aGj9QkWt");

//Untuk membuat efek scroll background-color pada navbar header
window.addEventListener("scroll", function() {
  const body = document.body;
  body.classList.toggle("scrolled", window.scrollY > 20);
});

var totalKelas = "0", totalSiswa = "0";

//Memuat data dan ditampilkan data saat halaman telah di muat/ditampilkan
window.addEventListener("DOMContentLoaded", function() {
  const body = document.body;
  var url = window.location.href.split('#')[0];
  history.replaceState(null, null, url);
  this.window.scrollTo(0,0);
  var xhr = new XMLHttpRequest();
  
  xhr.onreadystatechange = function() {
      if (xhr.readyState == 4 && xhr.status == 200) {
        var response = JSON.parse(xhr.responseText);
        var jurusan = "Rekayasa Perangkat Lunak";
        var tahunPelajaran = "2023-2024";

        for (var i = 0; i < response.length; i++) {
          var data = response[i];
          if (data.jurusan === jurusan && data.tahun_pelajaran === tahunPelajaran) {
            totalKelas = data.total_kelas;
            totalSiswa = data.total_siswa_jrs;
            var title = document.querySelectorAll("#title-box");
            //Mengubah Text pada Jumlah total siswa dan kelas setiap jurusan
            document.getElementById("case-box").textContent = totalSiswa;
            document.getElementById("case-box2").textContent = totalKelas;

            //Kode dibawah untuk mengubah tampilan apakah ditampilkan atau disembunyikan
            document.getElementById("rpl-select").style.display = 'block';
            document.getElementById("dkv-select").style.display = 'none';
            document.getElementById("tkj-select").style.display = 'none';
            document.getElementById("telco-select").style.display = 'none';

            //Mengganti Gambar
            document.getElementById('imgjrs').src = '../image/rpl.png';

            //Mengganti title box
            title.forEach(function(title) {
              title.textContent = "REKAYASA PERANGKAT LUNAK (10-12)";
            });
            break;
          }
        }
      }
  };

  xhr.open("GET", "../php/data.php", true);
  xhr.send();
});

function getData(text, tahun){
  var xhr = new XMLHttpRequest();
  
  xhr.onreadystatechange = function() {
      if (xhr.readyState == 4 && xhr.status == 200) {
        var response = JSON.parse(xhr.responseText);
        var jurusan = text;
        totalKelas = 0;
        totalSiswa = 0;
        var tahunPelajaran = tahun;

        for (var i = 0; i < response.length; i++) {
          var data = response[i];
          if (data.jurusan === jurusan && data.tahun_pelajaran === tahunPelajaran) {
            totalKelas = data.total_kelas;
            totalSiswa = data.total_siswa_jrs;
            var title = document.querySelectorAll("#title-box");

            if(text === "Rekayasa Perangkat Lunak"){
              //Mengubah Text pada Jumlah total siswa dan kelas setiap jurusan
              document.getElementById("case-box").textContent = totalSiswa;
              document.getElementById("case-box2").textContent = totalKelas;

              //Kode dibawah untuk mengubah tampilan apakah ditampilkan atau disembunyikan
              document.getElementById("rpl-select").style.display = 'block';
              document.getElementById("dkv-select").style.display = 'none';
              document.getElementById("tkj-select").style.display = 'none';
              document.getElementById("telco-select").style.display = 'none';

              //Mengganti Gambar
              document.getElementById('imgjrs').src = '../image/rpl.png';

              //Mengganti title box
              title.forEach(function(title) {
                title.textContent = "REKAYASA PERANGKAT LUNAK (10-12)";
              });
            }else if(text === "Desain Komunikasi Visual"){
              //Mengubah Text pada Jumlah total siswa dan kelas setiap jurusan
              document.getElementById("case-box").textContent = totalSiswa;
              document.getElementById("case-box2").textContent = totalKelas;

              //Kode dibawah untuk mengubah tampilan apakah ditampilkan atau disembunyikan
              document.getElementById("dkv-select").style.display = 'block';
              document.getElementById("rpl-select").style.display = 'none';
              document.getElementById("tkj-select").style.display = 'none';
              document.getElementById("telco-select").style.display = 'none';

              //Mengganti Gambar
              document.getElementById('imgjrs').src = '../image/dkv.png';

              //Mengganti title box
              title.forEach((title) => {
                title.textContent = "DESAIN KOMUNIKASI VISUAL (10-12)";
              });
            }else if(text === "Teknik Komputer Jaringan"){
              //Mengubah Text pada Jumlah total siswa dan kelas setiap jurusan
              document.getElementById("case-box").textContent = totalSiswa;
              document.getElementById("case-box2").textContent = totalKelas;

              //Kode dibawah untuk mengubah tampilan apakah ditampilkan atau disembunyikan
              document.getElementById("tkj-select").style.display = 'block';
              document.getElementById("dkv-select").style.display = 'none';
              document.getElementById("rpl-select").style.display = 'none';
              document.getElementById("telco-select").style.display = 'none';

              //Mengganti Gambar
              document.getElementById("imgjrs").src = '../image/tkj.png';

              //Mengganti title box
              title.forEach(function(title) {
                title.textContent = "TEKNIK KOMPUTER & JARINGAN (10-12)";
              });
            }else if(text === "Teknik Transmisi Telekomunikasi"){
              //Mengubah Text pada Jumlah total siswa dan kelas setiap jurusan
              document.getElementById("case-box").textContent = totalSiswa;
              document.getElementById("case-box2").textContent = totalKelas;

              //Kode dibawah untuk mengubah tampilan apakah ditampilkan atau disembunyikan
              document.getElementById("telco-select").style.display = 'block';
              document.getElementById("dkv-select").style.display = 'none';
              document.getElementById("tkj-select").style.display = 'none';
              document.getElementById("rpl-select").style.display = 'none';

              //Mengganti Gambar
              document.getElementById('imgjrs').src = '../image/telco.png';

              //Mengganti title box
              title.forEach(function(title) {
                title.textContent = "TEKNIK TRANSMISI TELEKOMUNIKASI (10-12)";
              });
            }
            break;
          }
        }
      }
  };

  xhr.open("GET", "../php/data.php", true);
  xhr.send();
}

//Membuat fungsi Detail tentang Jurusan yang diklik oleh tombol
function toggleCard(index) {
  //untuk mencari dan memilih semua elemen yang cocok dengan selector (id > #, class > .)
  if (index === 1) {
      //Memanggil sebuah function
      getData("Rekayasa Perangkat Lunak", "2023-2024");
  } else if (index === 2) {
      //Memanggil sebuah function
      getData("Desain Komunikasi Visual", "2023-2024");
  } else if (index === 3) {
      //Memanggil sebuah function
      getData("Teknik Komputer Jaringan", "2023-2024");
  } else if(index === 4){
      //Memanggil sebuah function
      getData("Teknik Transmisi Telekomunikasi", "2023-2024");
  }
}

//Membuat fungsi klik pada teks yang bercetak tebal biru pada Footer
function openLink(url){
  window.location.href = url;
}

//Membuat fungsi agar button Info P2DB (WhatsApp) agar bisa diklik
function waP2db(){
  // Membuka link tanpa harus membuka jendela baru
  window.location.href = "https://api.whatsapp.com/send?phone=6281325250554";
}