<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amba Hotel</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    
    <style>
        body {
            background-color: #FBE4B4; /* Warm light yellow */
        }
        .header {
            background-color: #F2C9A3; /* Warm beige */
        }
        .footer {
            background-color: #E4B69A; /* Soft warm brown */
        }
        .btn-warning {
            background-color: #F9D76E; /* Warm golden yellow */
            border-color: #F9D76E;
        }
        .btn-warning:hover {
            background-color: #F7C93D; /* Darker yellow */
            border-color: #F7C93D;
        }
        .card {
            margin: 20px;
            background-color: #FFF3E6; /* Soft peach */
            padding-top: 15px; 
        }
        .welcome-section {
            position: relative;
            text-align: center;
            color: white;
        }
        .welcome-section img {
            width: 100%;
            height: auto;
            opacity: 0.8;
        }
        .welcome-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .slick-slide {
            margin: 0 10px;
        }
        .slick-prev, .slick-next {
            background-color: rgba(255, 165, 0, 0.5); /* Warm orange background for arrows */
            color: white;
        }

        /* CSS untuk gambar slider */
        .slider img {
            width: 80%; /* Mengatur lebar gambar menjadi 80% dari kontainer */
            margin: 0 auto; /* Menempatkan gambar di tengah */
            max-width: 600px; /* Ukuran maksimal gambar agar tidak terlalu besar */
        }

        .card-img-top {
            height: 350px; /* Set fixed height for images */
            object-fit: cover; /* Ensures images are cropped and cover the area */
            width: 500;
            border-radius: 15px; /* Add rounded corners to the image */
        }
        .divider {
            border-top: 2px solid #F9D76E; /* Line divider color */
            margin: 20px 0;
        }
        
    </style>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>

    <body class="d-flex flex-column min-vh-100">
        <header class="header text-white p-3">
            <div class="container d-flex justify-content-between align-items-center">
                <h1 class="h3 mb-0" style="font-weight: bold;">Amba Hotel</h1>
                <nav class="nav">
                    <a class="nav-link text-white" href="#" style="font-weight: bold;">Beranda</a>
                    <a class="nav-link text-white" href="CekHarga.php" style="font-weight: bold;">Cek Harga</a>
                    <a class="nav-link text-white" href="Login.php" style="font-weight: bold;">Keluar</a>
                </nav>
            </div>
        </header>
    </body>

    <!-- Welcome Section with Background Image -->
    <section class="welcome-section" style="background-color: #FFF5E1;"> <!-- Background krem -->
    <img src="img/pexels-pixabay-271618.jpg" alt="Selamat Datang di Amba Hotel" style="width: 100%; height: auto; opacity: 0.7;"> <!-- Gambar dengan opasitas rendah -->
    <div class="welcome-text" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: #5A3E36;"> <!-- Teks warna coklat -->
        <h2 style="font-weight: bold; color: #5A3E36; font-size: 3rem;">Selamat Datang di Amba Hotel</h2> <!-- Ukuran teks lebih besar -->
        <p style="color: #5A3E36; font-size: 1.25rem;">Pengalaman menginap yang nyaman dan mewah menanti Anda.</p> <!-- Ukuran teks lebih besar -->
        <a href="#spesifikasi-kamar" class="btn btn-warning mt-3"  style="font-size: 1.1rem;">Lihat Spesifikasi Kamar</a> <!-- Ukuran teks tombol sedikit lebih besar -->
    </div>
    </section>

    <div class="container my-4" id="spesifikasi-kamar">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h2 class="card-title">Spesifikasi Kamar</h2>
                <p class="card-text">Pilih kamar sesuai kebutuhan Anda. Kami menawarkan berbagai tipe kamar dengan fasilitas terbaik.</p>
                
                <!-- Room Specifications Slider Section -->
                <div class="slider">
                    <div class="card">
                        <img src="img/pexels-pixabay-271619.jpg" class="card-img-top" alt="Kamar Standard">
                        <div class="card-body">
                            <h5 class="card-title">Kamar Standard</h5>
                            <p class="card-text">Kamar ini cocok untuk Anda yang mencari akomodasi nyaman namun dengan biaya terjangkau. Dengan fasilitas dasar yang memadai, seperti tempat tidur queen size, AC, dan Wi-Fi gratis, kamar ini sangat ideal untuk perjalanan singkat atau tamu yang hanya membutuhkan tempat tidur yang nyaman setelah seharian beraktivitas.</p>
                            <h6>Fasilitas Kamar Standard:</h6>
                            <ul>
                                <li>Tempat Tidur Queen-Size</li>
                                <li>AC (Air Conditioner)</li>
                                <li>Wi-Fi Gratis</li>
                                <li>Kamar Mandi dengan Shower</li>
                                <li>Meja Kerja</li>
                                <li>TV Layar Datar</li>
                            </ul>
                            <!-- Cek Harga Button -->
                            <a href="CekHarga.php" class="btn btn-warning mt-3" style="display: block; margin-left: auto; margin-right: auto;">Cek Harga</a>

                        </div>
                    </div>
                    <div class="card">
                        <img src="img/pexels-pixabay-271618.jpg" class="card-img-top" alt="Kamar Superior">
                        <div class="card-body">
                            <h5 class="card-title">Kamar Superior</h5>
                            <p class="card-text">Kamar Superior memberikan kenyamanan ekstra bagi para tamu yang menginginkan ruang lebih luas dan fasilitas tambahan. Dilengkapi dengan tempat tidur king-size dan kamar mandi dengan shower rain. Juga dilengkapi meja kerja dan pemandangan luar yang menyegarkan, cocok bagi tamu yang ingin sedikit lebih banyak kenyamanan.</p>
                            <h6>Fasilitas Kamar Superior:</h6>
                            <ul>
                                <li>Tempat Tidur King-Size</li>
                                <li>Kamar Mandi dengan Shower Rain</li>
                                <li>Meja Kerja</li>
                                <li>Pemandangan Luar</li>
                                <li>Wi-Fi Gratis</li>
                                <li>TV Layar Datar</li>
                                <li>AC (Air Conditioner)</li>
                            </ul>
                            <!-- Cek Harga Button -->
                            <a href="CekHarga.php" class="btn btn-warning mt-3" style="display: block; margin-left: auto; margin-right: auto;">Cek Harga</a>

                        </div>
                    </div>
                    <div class="card">
                        <img src="img/pexels-pixabay-271624.jpg" class="card-img-top" alt="Kamar Deluxe">
                        <div class="card-body">
                            <h5 class="card-title">Kamar Deluxe</h5>
                            <p class="card-text">Kamar Deluxe adalah pilihan yang sempurna untuk tamu yang mencari kenyamanan dan kemewahan lebih. Dilengkapi dengan tempat tidur super king-size, bathtub, TV layar datar, serta ruang tamu pribadi. Kamar ini ideal untuk para tamu yang ingin menikmati liburan yang lebih santai dan lebih panjang, dengan segala kenyamanan yang ditawarkan.</p>
                            <h6>Fasilitas Kamar Deluxe:</h6>
                            <ul>
                                <li>Tempat Tidur Super King-Size</li>
                                <li>Bathtub</li>
                                <li>TV Layar Datar</li>
                                <li>Ruang Tamu Pribadi</li>
                                <li>Wi-Fi Gratis</li>
                                <li>AC (Air Conditioner)</li>
                                <li>Mini Bar</li>
                                <li>Pemandangan Luar</li>
                            </ul>
                            <!-- Cek Harga Button -->
                            <a href="CekHarga.php" class="btn btn-warning mt-3" style="display: block; margin-left: auto; margin-right: auto;">Cek Harga</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Kebijakan Akomodasi and Tentang Hotel Section -->
    <div class="container my-4" id="kebijakan-akomodasi">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h2 class="card-title">Kebijakan Akomodasi</h2>
                <p class="card-text">Untuk memastikan pengalaman menginap yang nyaman, kami memiliki kebijakan akomodasi yang harus diperhatikan oleh semua tamu yang menginap di Amba Hotel:</p>
                <ul>
                    <li><strong>Check-in:</strong> Dimulai pada pukul 14:00 WIB. Tamu yang tiba lebih awal dapat meminta fasilitas penyimpanan barang sementara jika kamar belum siap.</li>
                    <li><strong>Check-out:</strong> Pukul 12:00 WIB. Jika Anda memerlukan waktu tambahan, harap menghubungi resepsionis sebelumnya untuk pengaturan lebih lanjut.</li>
                    <li><strong>Hewan Peliharaan:</strong> Hewan peliharaan tidak diperbolehkan di dalam hotel, kecuali dengan izin khusus berdasarkan jenis dan ukuran.</li>
                    <li><strong>Merokok:</strong> Dilarang merokok di dalam ruangan. Area merokok yang tersedia di luar ruangan telah disediakan untuk kenyamanan Anda.</li>
                    <li><strong>Deposit:</strong> Deposit diperlukan pada saat check-in, yang akan dikembalikan setelah pemeriksaan kamar pada saat check-out.</li>
                    <li><strong>Wi-Fi:</strong> Wi-Fi gratis tersedia di seluruh area hotel, termasuk kamar, restoran, dan area publik lainnya.</li>
                    <li><strong>Parkir:</strong> Parkir gratis tersedia bagi tamu yang menginap di hotel. Pastikan untuk mengikuti aturan parkir yang berlaku di area hotel.</li>
                    <li><strong>Fasilitas Tambahan:</strong> Fasilitas tambahan seperti layanan pijat, layanan laundry, dan fasilitas transportasi bandara tersedia dengan biaya tambahan.</li>
                </ul>
                <div class="divider"></div>
                <h2 class="card-title">Tentang Hotel</h2>
                <p class="card-text">Amba Hotel merupakan hotel bintang 4 yang berlokasi strategis di pusat kota, menawarkan akomodasi mewah dengan harga yang terjangkau. Dikenal karena layanan pelanggan yang luar biasa dan fasilitas yang memadai, Amba Hotel menjadi pilihan utama bagi wisatawan maupun pebisnis. Hotel kami menyediakan berbagai tipe kamar yang sesuai dengan kebutuhan Anda, mulai dari kamar standar hingga suite mewah dengan fasilitas premium.</p>
                <p class="card-text">Dengan lokasi yang sangat strategis, hotel ini mudah diakses dari berbagai pusat perbelanjaan, tempat wisata, dan fasilitas transportasi umum. Di Amba Hotel, kami berkomitmen untuk memberikan pengalaman menginap yang tak terlupakan dengan pelayanan ramah dan fasilitas modern yang mendukung kenyamanan Anda selama menginap.</p>
                <h6>Fasilitas yang Tersedia:</h6>
                <ul>
                    <li>Restoran dan Bar</li>
                    <li>Kolam Renang Indoor</li>
                    <li>Gym dan Spa</li>
                    <li>Layanan Kamar 24 Jam</li>
                    <li>Ruang Pertemuan dan Konferensi</li>
                    <li>Wi-Fi Gratis di Seluruh Area Hotel</li>
                    <li>Parkir Gratis dan Aman</li>
                    <li>Transportasi Bandara dan Layanan Shuttle</li>
                </ul>
            </div>
        </div>
    </div>

    <footer class="footer text-white py-5 mt-4" style="background-color: #2c3e50;">
    <div class="container">
        <!-- Bagian Atas Footer - Hak Cipta dan Kontak -->
        <div class="row">
            <!-- Copyright Kiri -->
            <div class="col-12 col-md-6 text-left mb-3 mb-md-0">
                <p>&copy; 2024 Amba Hotel. Hak cipta dilindungi.</p>
            </div>
            <!-- Kontak Kanan -->
            <div class="col-10 col-md-5 text-right">
                <p>Jl. Ngawi No.8906, Pusat Kota, Indonesia | Telp: (021) 123-4567 | Email: 
                    <a href="mailto:info@ambahotel.com" class="text-white">info@ambahotel.com</a>
                </p>
            </div>
        </div>

        <!-- Garis Pemisah -->
        <hr style="border-top: 1px solid #fff; margin: 30px 0;">

        <!-- Bagian Tengah Footer - Informasi Kontak, Sosial Media, dan Jam Operasional -->
        <div class="row">
            <!-- Kontak Kami Kiri -->
            <div class="col-12 col-md-4 mb-3 text-left">
                <h5>Kontak Kami</h5>
                <p><i class="fas fa-map-marker-alt"></i> Alamat: Jl. Ngawi No.8906, Pusat Kota, Indonesia</p>
                <p><i class="fas fa-phone-alt"></i> Telp: (021) 123-4567</p>
                <p><i class="fas fa-envelope"></i> Email: <a href="mailto:info@ambahotel.com" class="text-white">info@ambahotel.com</a></p>
            </div>
            
            <!-- Jam Operasional Tengah -->
            <div class="col-12 col-md-4 mb-3 text-center">
                <h5>Jam Operasional</h5>
                <p>Senin - Jumat: 08:00 - 18:00</p>
                <p>Sabtu - Minggu: 09:00 - 17:00</p>
            </div>

            <!-- Sosial Media Kanan -->
            <div class="col-12 col-md-4 mb-3 text-right">
                <h5>Sosial Media</h5>
                <a href="https://facebook.com" class="text-white mx-2"><i class="fab fa-facebook"></i> Facebook</a><br>
                <a href="https://instagram.com" class="text-white mx-2"><i class="fab fa-instagram"></i> Instagram</a><br>
                <a href="https://twitter.com" class="text-white mx-2"><i class="fab fa-twitter"></i> Twitter</a>
            </div>
        </div>

        <!-- Garis Pemisah -->
        <hr style="border-top: 1px solid #fff; margin: 30px 0;">

        <!-- Bagian Bawah Footer - Lokasi dan Link Penting -->
        <div class="row">
            <!-- Lokasi Kami Kiri -->
            <div class="col-12 col-md-6 mb-3">
                <h5>Lokasi Kami</h5>
                <iframe width="100%" height="200" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.788539781718!2d106.8246535147594!3d-6.178492268693768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c1f90c87d7d9%3A0x95ac5768a6fdffcb!2sAmba%20Hotel!5e0!3m2!1sen!2sid!4v1634604190015!5m2!1sen!2sid" allowfullscreen="" loading="lazy"></iframe>
            </div>

            <!-- Link Penting Kanan -->
            <div class="col-12 col-md-6 mb-3">
                <h5>Link Penting</h5>
                <ul class="list-unstyled">
                    <li><a href="privacy-policy.html" class="text-white">Kebijakan Privasi</a></li>
                    <li><a href="terms-conditions.html" class="text-white">Syarat & Ketentuan</a></li>
                    <li><a href="faq.html" class="text-white">FAQ (Pertanyaan yang Sering Diajukan)</a></li>
                    <li><a href="contact-us.html" class="text-white">Hubungi Kami</a></li>
                </ul>
            </div>
        </div>

        <!-- Tombol Kembali ke Atas -->
        <a href="#" id="back-to-top" class="btn btn-warning" style="position: fixed; bottom: 20px; right: 20px; border-radius: 50%;"><i class="fas fa-arrow-up"></i></a>
    </div>
    </footer>

    <!-- Font Awesome untuk Ikon -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

        <script>
            $(document).ready(function(){
                $('.slider').slick({
                    dots: true,
                    infinite: true,
                    speed: 500,
                    slidesToShow: 1,
                    slidesToScroll: 1
                });
            });
        </script>

    </body>
</html>