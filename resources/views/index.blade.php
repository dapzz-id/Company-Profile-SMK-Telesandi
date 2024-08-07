<!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                {{-- Tag Title --}}
                <title>SMK TELEKOMUNIKASI TELESANDI BEKASI</title>
                {{-- Tag Icon --}}
                <link rel="icon" type="image/png" href="{{ asset('image/tels.png')}}">
                {{-- CSS Index --}}
                <link rel="stylesheet" href="{{ asset('css/output/index/style.css') }}">
                {{-- Bootstrap CSS --}}
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
                {{-- JS Jquery --}}
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            </head>
            <body>
                {{-- Bagian Utama/Atas --}}
                <header id="header">
                    <img id="imgicon" src="{{ asset('image/tels.png')}}" alt="Icon SMK Telekomunikasi Telesandi Bekasi">
                    {{-- Bagian Navbar didalam Header --}}
                    <nav class="navbar">
                        <a href="#">Home</a>
                        <a href="#visi-misi">Visi & Misi</a>
                        <a href="#jurusan">Jurusan</a>
                        <a href="#ekskul">Ekstrakurikuler</a>
                        <a href="#p2db" style="margin-right: 20px;">P2DB</a>
                    </nav>
                </header>

                {{-- Bagian Kumpulan Konten Home --}}
                <section id="home">
                    <video autoplay loop muted>
                        <source src="{{ asset('image/video/bg.mp4')}}" type="video/mp4">
                    </video>
                    <p id="text1">SMK TELEKOMUNIKASI TELESANDI BEKASI</p>
                    <p id="text2">"We Are Not The Best But We Want To Be Excellent"</p>
                    {{-- Shape CSS --}}
                    <div class="custom-shape-divider-bottom-1706162591">
                        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                        </svg>
                    </div>
                </section>

                {{-- Bagian Kumpulan Konten Visi-Misi' --}}
                <section id="visi-misi">
                    <div class="textvm"><h2>VISI & MISI</h2></div>
                    <div class="underline"></div>
                    <img src="{{ asset('image/vec-school.png')}}" alt="SMK TELKOMUNIKASI TELESANDI BEKASI">
                    <div id="card1">
                        {{-- Bootstrap Card HTML --}}
                        <div class="card border-primary mb-3" id="dev2">
                            <div class="card-header">SMK Telekomunikasi Telesandi Bekasi</div>
                            <div id="card-main-vm" class="card-body text-primary">
                                <h5 class="card-title">VISI:</h5>
                                <p class="card-text"> Menjadi Sekolah bermutu unggul dalam ilmu pengetahuan dan teknologi informasi berdasarkan IMTAQ serta berkarakter bangsa.</p>
                            </div>
                        </div>
                        {{-- Bootstrap Card HTML --}}
                        <div class="card border-primary mb-3" id="dev3">
                            <div class="card-header">SMK Telekomunikasi Telesandi Bekasi</div>
                            <div id="card-main-vm" class="card-body text-primary">
                                <h5 class="card-title">MISI:</h5>
                                <p class="card-text">Menyelenggarakan pendidikan siswa/siswi di bidang:</p>
                                <ol>
                                    <li>Teknologi Telekomunikasi dan Informasi.</li>
                                    <li>Mengembangkan suasana akademis yang mendukung kebutuhan pengguna lulusan.</li>
                                    <li>Pemberdayaan laboratorium bahasa dan komputer untuk menunjang siswa mempunyai skill memadai.</li>
                                    <li>Mengembangkan kurikulum sesuai kompetensi yang diharapkan oleh pengguna lulusan Segala aktifitas dilandasi nilai-nilai agama.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    {{-- Shape CSS --}}
                    <div class="custom-shape-divider-bottom-1706886946">
                        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                        </svg>
                    </div>
                </section>

                {{-- Bagian Kumpulan Konten Jurusan --}}
                <section id="jurusan">
                    {{-- Shape CSS --}}
                    <div class="custom-shape-divider-top-1706887577">
                        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                        </svg>
                    </div>
                    <div class="txtJ"><h2>JURUSAN KAMI</h2></div>
                    <div class="underline"></div>
                    {{-- Isi Sub-Konten Jurusan --}}
                    <div class="content-jurusan">
                        {{-- Box1 Menerangkan Total Siswa Di Setiap Jurusan --}}
                        <div class="info-box">
                            <h5 id="title-box">REKAYASA PERANGKAT LUNAK (10-12)</h5>
                            <p id="text1-box">Total Siswa T.P 2023/2024:</p>
                            <div id="case-box">0</div>
                            <p id="text2-box"> Sampai Dengan T.P 2024/2025</p>
                        </div>
                        {{-- Box2 Menerangkan Total Kelas Di Setiap Jurusan --}}
                        <div class="info-box2">
                            <h5 id="title-box">REKAYASA PERANGKAT LUNAK (10-12)</h5>
                            <p id="text1-box2">Total Kelas T.P 2023/2024:</p>
                            <div id="case-box2" class="cases">0</div>
                            <p id="text2-box2"> Sampai Dengan T.P 2024/2025</p>
                        </div>
                        {{-- Bootstrap Card Menampilkan Isi Paket Keahlian --}}
                        <div class="card mb-3" id="card-jurusan">
                            <div class="row g-0" id="wrapp">
                                <div class="col-md-4">
                                    <img id="imgjrs" src="{{ asset('image/rpl.png')}}" alt="ic-jurusan" class="img-fluid rounded-start">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>PAKET KEAHLIAN:</strong></h5>
                                        {{-- Paket Keahlian RPL --}}
                                        <div id="rpl-select">
                                            <ol>
                                                <li>Perancangan System</li>
                                                <li>Database</li>
                                                <li>Pemrograman Berorientasi Objek</li>
                                                <li>Pemrograman Web dan Mobile</li>
                                            </ol>
                                        </div>
                                        {{-- Paket Keahlian TKJ --}}
                                        <div id="tkj-select">
                                            <ol>
                                                <li>Teknologi Jaringan Berbasis Luar</li>
                                                <li>Administrasi Infrastruktur Jaringan</li>
                                                <li>Administrasi Sistem Jaringan</li>
                                                <li>Teknologi Layanan Jaringan</li>
                                                <li>Troubleshooting Jaringan</li>
                                                <li>Keamanan Jaringan</li>
                                            </ol>
                                        </div>
                                        {{-- Paket Keahlian DKV/MM --}}
                                        <div id="dkv-select">
                                            <ol>
                                                <li>Desain Grafis Percetakan</li>
                                                <li>Desain Media Interaktif</li>
                                                <li>Teknik Animasi 2D dan 3D</li>
                                                <li>Teknik Pengolahan Audio dan Video</li>
                                            </ol>
                                        </div>
                                        {{-- Paket Keahlian Transmsi Telco --}}
                                        <div id="telco-select">
                                            <ol>
                                                <li>Dasar Sistem Telekomunikasi</li>
                                                <li>Elektronika dan Microcontroller</li>
                                                <li>Transmisi Satelit [VSAT.IP]</li>
                                                <li>Transmisi Radio [BTS]</li>
                                                <li>Transmisi Fiber Optic [FTTH]</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Kumpulan Beberapa Tombol Dibawah (Jurusan) --}}
                        <div id="button-all-type" class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked onclick="toggleCard(1)">
                            <label class="btn btn-outline-primary" for="btnradio1">Rekayasa Perangkat Lunak</label>
                        
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off" onclick="toggleCard(2)">
                            <label class="btn btn-outline-primary" for="btnradio2">Desain Komunikasi Visual</label>
                        
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off" onclick="toggleCard(3)">
                            <label class="btn btn-outline-primary" for="btnradio3">Teknik Komputer & Jaringan</label>

                            <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off" onclick="toggleCard(4)">
                            <label class="btn btn-outline-primary" for="btnradio4">Teknik Transmisi Telekomunikasi</label>
                        </div>
                    </div>
                </section>

                {{-- Bagian Kumpulan Konten Ekstrakurikuler --}}
                <section id="ekskul">
                    {{-- Shape CSS --}}
                    <div class="custom-shape-divider-top-1708188153">
                        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                            <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                            <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                            <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
                        </svg>
                    </div>
                    {{-- Text Title --}}
                    <div class="text-extra"><h2>EKSTRAKURIKULER</h2></div>
                    <div class="underline"></div>
                    {{-- Kumpulan Konten Image Barisan Pertama--}}
                    <div class="wrapper">
                        <div class="img-ekskul-row1">
                            <div class="subimg-allrow">
                                <img id="img1" src="{{ asset('image/tarung-derajat.png')}}" alt="">
                                <h6 id="text-1">Tarung Derajat</h6>
                            </div>
                            <div class="subimg-allrow">
                                <img id="img2" src="{{ asset('image/basket.png')}}" alt="">
                                <h6 id="text-2">Basket Tels</h6>
                            </div>
                            <div class="subimg-allrow">
                                <img id="img3" src="{{ asset('image/paskibra.png')}}" alt="">
                                <h6 id="text-3">Paskibra</h6>
                            </div>
                            <div class="subimg-allrow">
                                <img id="img4" src="{{ asset('image/mandarin-club.png')}}" alt="">
                                <h6 id="text-4">Mandarin Club</h6>
                            </div>
                            <div class="subimg-allrow">
                                <img id="img5" src="{{ asset('image/futsal.png')}}" alt="">
                                <h6 id="text-5">Futsal Tels</h6>
                            </div>
                            <div class="subimg-allrow">
                                <img id="img6" src="{{ asset('image/pmr.png')}}" alt="">
                                <h6 id="text-6">Palang Merah Remaja</h6>
                            </div>
                        </div>
    
                        {{-- Kumpulan Konten Image Barisan Kedua --}}
                        <div class="img-ekskul-row2">
                            <div class="subimg-allrow">
                                <img id="img1" src="{{ asset('image/english-club.png')}}" alt="">
                                <h6 id="text-1">English Club</h6>
                            </div>
                            <div class="subimg-allrow">
                                <img id="img2" src="{{ asset('image/matematika.png')}}" alt="">
                                <h6 id="text-2">Bengkel Matematika</h6>
                            </div>
                            <div class="subimg-allrow">
                                <img id="img3" src="{{ asset('image/rohis.png')}}" alt="">
                                <h6 id="text-3">Rohis</h6>
                            </div>
                            <div class="subimg-allrow">
                                <img id="img4" src="{{ asset('image/voli.png')}}" alt="">
                                <h6 id="text-4">Voli Tels</h6>
                            </div>
                            <div class="subimg-allrow">
                                <img id="img5" src="{{ asset('image/sepak-bola.png')}}" alt="">
                                <h6 id="text-5">Sepak Bola</h6>
                            </div>
                            <div class="subimg-allrow">
                                <img id="img6" src="{{ asset('image/kesenian.png')}}" alt="">
                                <h6 id="text-6">Kesenian Tels</h6>
                            </div>
                        </div>
    
                         {{-- Kumpulan Konten Image Barisan Ketiga --}}
                         <div class="img-ekskul-row3">
                            <div class="subimg-allrow">
                                <img id="img1" src="{{ asset('image/osis.png')}}" alt="">
                                <h6 id="text-1">OSIS</h6>
                            </div>
                            <div class="subimg-allrow">
                                <img id="img2" src="{{ asset('image/pramuka.png')}}" alt="">
                                <h6 id="text-2">Pramuka</h6>
                            </div>
                            <div class="subimg-allrow">
                                <img id="img3" src="{{ asset('image/syntax.png')}}" alt="">
                                <h6 id="text-3">Syntax (RPL)</h6>
                            </div>
                            <div class="subimg-allrow">
                                <img id="img4" src="{{ asset('image/seni-media.png')}}" alt="">
                                <h6 id="text-4">Seni Media (DKV)</h6>
                            </div>
                            <div class="subimg-allrow">
                                <img id="img5" src="{{ asset('image/tomcat.png')}}" alt="">
                                <h6 id="text-5">Tomcat (TKJ)</h6>
                            </div>
                        </div>
                    </div>
                </section>

                {{-- Bagian Kumpulan Konten P2DB --}}
                <section id="p2db">
                    {{-- Shape CSS --}}
                    <div class="custom-shape-divider-top-1708001615">
                        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                            <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                            <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                            <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
                        </svg>
                    </div>
                    
                    <img id="img-p2db" src="{{ asset('image/ppdb.png')}}" alt="PPDB TELAH DIBUKA">
                    <img id="img-assets1" src="{{ asset('image/cloud.png')}}" alt="">
                    <img src="{{ asset('image/cloud.png')}}" alt="" id="img-assets2">
                    <img src="{{ asset('image/cloud.png')}}" alt="" id="img-assets3">
                    {{-- Isi Sub-Konten P2DB --}}
                    <div class="content-p2db">
                        <img src="{{ asset('image/img-p2db.png')}}" alt="Come and Joy With Us">
                        {{-- class text-content-p2db digunakan untuk mengelompokkan  --}}
                        <div class="text-content-p2db">
                            {{-- Text Gelombang pertama dengan arah kesamping (display: flex, flex-direction: row) --}}
                            <div class="class1">
                                <h4 style="color: white; font-weight: bolder;">GELOMBANG 1: <h4 style="color: #FDFF5B; font-weight: bold; margin-left: 20px;">Rp 7.750.000</h4></h4>
                            </div>
                            {{-- Text Latin/Huruf dari harga p2db Gelombang 1 --}}
                            <p style="color: white; top: 0; font-size: small; padding: 0; margin-top: -8px; margin-left: 40px; margin-bottom: 25px;">(Tujuh juta tujuh ratus lima puluh ribu rupiah)</p>
                            {{-- Kenapa menggunakan class1? karena class1 sudah diatur untuk arah kesamping saja (display: flex, flex-direction: row) --}}
                            <div class="class1">
                                <h4 style="color: white; font-weight: bolder;">GELOMBANG 2: <h4 style="color: #FDFF5B; font-weight: bold; margin-left: 20px;">Rp 8.950.000</h4></h4>
                            </div>
                            {{-- Text Latin/Huruf dari harga p2db Gelombang 2 --}}
                            <p style="color: white; top: 0; font-size: small; padding: 0; margin-top: -8px; margin-left: 25px; margin-bottom: 20px;">(Delapan juta sembilan ratus lima puluh ribu rupiah)</p>
                            {{-- Kenapa menggunakan class1? karena class1 sudah diatur untuk arah kesamping saja (display: flex, flex-direction: row) --}}
                            <div class="class1">
                                {{-- Tampilan Button Info P2DB dengan ikon WhatsApp --}}
                                <div class="button" id="button-infop2db" onclick="waP2db()">
                                    <div id="dub-arrow"><img src="{{ asset('image/whatsapp.svg')}}" alt="Info P2DB Lebih Lanjut (WhatsApp)" /></div>
                                    <a style="color: white; text-decoration: none;">Info P2DB</a>
                                </div>
                                {{-- Tampilan Button Daftar P2DB --}}
                                <div class="button" id="button-daftar" onclick="openLink('{{ route('login')}}')">
                                    <div id="spin"></div>
                                    <a>Join Now!</a>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <iframe style="border: 1.5px solid black; float: right; margin-left: auto; margin-right: 2.5rem;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.080790551901!2d107.05842427482942!3d-6.253085793735412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698dffaa3e87c9%3A0x7f0f671bf57691ae!2sSMK%20TELEKOMUNIKASI%20TELESANDI%20BEKASI!5e0!3m2!1sid!2sid!4v1708179924505!5m2!1sid!2sid" width="580" height="360" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <hr>

                    </div>
                </section>

                {{-- Footer adalah bagian dari sebuah halaman web atau dokumen yang terletak di bagian bawah. Biasanya digunakan untuk hak cipta --}}
                <footer>
                    {{-- Elemen span adalah elemen umum yang tidak memiliki makna khusus dan sering digunakan sebagai kontainer untuk memformat atau memberikan gaya pada sebagian kecil teks --}}
                    <p>&copy;2024 Created by <span onclick="openLink('https://instagram.com/x.dapzz')">Kadavi R.A</span> (X RPL 1) || Source from <span onclick="openLink('https://instagram.com/officialtels')">SMK Telekomunikasi Telesandi Bekasi</span></p>
                </footer>

                {{-- JavaScript Index --}}
                <script src="{{ asset('js/js-index.js')}}"></script>
                {{-- JavaScript Bootstrap --}}
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
            </body>
        </html>