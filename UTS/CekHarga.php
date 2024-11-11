<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Harga - Amba Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Background halaman */
        body {
            background-image: url('img/pexels-pixabay-271639.jpg');
        }

        /* Header */
        .header {
            background-color: #F2C9A3; /* Warna Beige Hangat */
            color: #5A3E36; /* Cokelat Tua */
            padding: 1.5rem;
            font-weight: bold;
        }

        /* Tombol Cek */
        .btn-warning {
            background-color: #F9D76E; /* Kuning keemasan */
            border: none;
            color: #5A3E36; /* Cokelat Tua */
            font-weight: bold;
            border-radius: 20px;
        }

        .btn-warning:hover {
            background-color: #F7C93D; /* Kuning lebih gelap saat hover */
            border-color: #F7C93D;
        }

        /* Kartu form */
        .card {
            background-color: #F2C9A3; /* Putih krem dengan rona oranye */
            border-radius: 15px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
            font-weight: bold;
        }

        /* Form Input */
        .form-control {
            background-color: #FFFFFF; /* Putih krem dengan rona oranye */
            border-radius: 10px;
        }

        .form-select {
            background-color: #FFFFFF; /* Putih krem dengan rona oranye */
            border-radius: 10px;
        }

        /* Tabel Harga */
        .alert-info {
            background-color: #F9D76E; /* Kuning keemasan */
            color: #5A3E36; /* Cokelat Tua */
            border: 1px solid #5A3E36;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    <header class="header text-white p-3">
        <div class="container d-flex justify-content-between align-items-center">
        <h1 class="h3 mb-0" style="font-weight: bold;">Amba Hotel</h1>
            <nav class="nav">
                <a class="nav-link text-white" href="Home.php">Beranda</a>
                <a class="nav-link text-white" href="Login.php">Keluar</a>
            </nav>
        </div>
    </header>

    <div class="container my-4 flex-grow-1 d-flex justify-content-center align-items-center">
        <div class="col-sm-10 col-md-8 col-lg-5">
            <div class="card shadow-sm p-4 border-0">
                <h3 class="text-center mb-4">Cek Harga</h3>
                <form id="priceCheckForm" method="post">
                    <div class="mb-3">
                        <label for="lantai" class="form-label">Lantai</label>
                        <input type="number" id="lantai" name="lantai" class="form-control" value="1" min="1" required>
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Tipe Kamar</label>
                        <select id="type" name="type" class="form-select" required>
                            <option value="300000">Standard</option>
                            <option value="400000">Superior</option>
                            <option value="500000">Deluxe</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="jumlah_hari" class="form-label">Jumlah Hari</label>
                        <input type="number" id="jumlah_hari" name="jumlah_hari" class="form-control" value="1" min="1" required>
                    </div>

                    <div class="mb-3">
                        <label for="diskon" class="form-label">Diskon</label>
                        <select id="diskon" name="diskon" class="form-select" required>
                            <option value="0">Tidak Ada</option>
                            <option value="1">Member</option>
                            <option value="2">Promo HUT</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-warning w-100">CEK</button>
                </form>

                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $lantai = intval($_POST['lantai']);
                    $typePrice = intval($_POST['type']);
                    $jumlahHari = intval($_POST['jumlah_hari']);
                    $diskon = intval($_POST['diskon']);

                    // Menghitung total harga tanpa diskon
                    $totalHarga = $typePrice * $jumlahHari;

                    // Biaya tambahan untuk lantai lebih tinggi
                    if ($lantai > 5) {
                        $totalHarga += 50000; // Biaya tambahan untuk lantai lebih tinggi
                    }

                    // Menghitung diskon
                    $totalDiskon = 0;
                    if ($diskon === 1) { 
                        $totalDiskon = $totalHarga * 0.1; // Diskon member 10%
                        $totalHarga -= $totalDiskon;
                    } else if ($diskon === 2) { 
                        $totalDiskon = 100000; // Diskon promo HUT
                        $totalHarga -= $totalDiskon;
                    }

                    // Pastikan harga tidak menjadi negatif
                    if ($totalHarga < 0) {
                        $totalHarga = 0;
                    }

                    // Menampilkan informasi
                    echo '<div class="alert alert-info mt-3" role="alert">';
                    echo "<strong>Total Harga Sewa:</strong> Rp " . number_format($typePrice * $jumlahHari, 0, ',', '.') . ",-<br>";
                    echo "<strong>Total Diskon:</strong> Rp " . number_format($totalDiskon, 0, ',', '.') . ",-<br>";
                    echo "<strong>Total yang Harus Dibayar:</strong> Rp " . number_format($totalHarga, 0, ',', '.') . ",-";
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>