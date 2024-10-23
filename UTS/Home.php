<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC Hotel</title>
  
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        .header {
            background-color: #f57c22;
            color: white;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .nav {
            display: flex;
            gap: 30px;
        }
        .nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }
        .nav a:hover {
            color: #ffe600; 
        }
        .banner {
            margin: 20px auto;
            max-width: 1200px; 
        }
        .banner img {
            width: 100%; 
            height: auto; 
            max-height: 600px; 
            object-fit: cover;
            object-position: center;
        }
        .content {
            margin: 20px;
            padding: 30px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        .content h2 {
            margin-top: 0;
            font-size: 28px;
        }
        .footer {
            background-color: #f57c22;
            color: white;
            text-align: center;
            padding: 15px 0;
            position: relative;
            bottom: 0;
            width: 100%;
            margin-top: 20px; 
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>ABC Hotel</h1>
        <div class="nav">
            <a href="#">Home</a>
            <a href="CekHarga.html">Cek Harga</a>
            <a href="Login.html">Logout</a>
        </div>
    </div>

    <div class="banner">
        <div><img src="img/photo-1542314831-068cd1dbfeeb.avif" alt="Banner 1"></div>
        <div><img src="img/photo-1520250497591-112f2f40a3f4.avif" alt="Banner 2"></div>
        <div><img src="img/photo-1551882547-ff40c63fe5fa.avif" alt="Banner 3"></div>
    </div>

    <div class="content">
        <h2>Hotel Profile</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <div class="footer">
        &copy; 2024 ABC Hotel. All rights reserved.
    </div>

    <script>
        $(document).ready(function(){
            $('.banner').slick({
                autoplay: true,
                autoplaySpeed: 3000,
                dots: true,
                arrows: true,
            });
        });
    </script>
</body>
</html>