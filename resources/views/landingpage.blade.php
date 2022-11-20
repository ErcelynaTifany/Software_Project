<!DOCTYPE html>
<html lang="{{ app()->getlocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SPK Rental Mobil</title>
        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css?faimly=Monsterrat%7CRoboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrap.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--Styles-->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    </head>
    <body>
        <div id="app">
            <header class="with-background">
                <div class="top-nav container">
                    <div class="top-nav-left">
                        <div class="logo">SPK Rental Mobil</div>

                </div>
                <div class="top-nav-right">

                </div>
            </div> <!-- end top-nav -->
            <div class="hero container">
                <div class="hero-copy">
                    <h1>Laravel SPK Rental Mobil</h1>
                    <p>CARI MOBIL UNTUK KENYAMANAN ANDA</p>
                    <div class="hero-buttons">
                        <a href="#" class="button button-white">Screencasts</a>
                        <a href="#" class="button button-white">GitHub</a>
                    </div>
                </div> <!-- end hero-copy-->
                <div class="hero-image">
                    <img src="img/car-pro-laravel.png" alt="hero image">
                </div> <!-- end hero-image -->
            </div> <!-- end hero -->
            </header>
            <div class="featured-section">
                <div class="container">
                    <h1 class="text-center">Laravel SPK Rental Mobil</h1>
                    <p class="section-description">Kami adalah perusahaan yang bergerak di bidang penyewaan mobil kami menawarkan
                    layanan terbaik kami dengan harga yang sangat reasonabel dan kompetitif. sistem kami dirancang sedemikian 
                    rupa sehingga mendukung customer kami dalam hal pemesanan tiket,Booking Mobil dan di dukung dengan driver
                    yang mengutamakan keramahan dan jaminan keselamataan juga kebersihan kendaraan akan selalu kami perhatikan.
                    Kami yakin dengan segala bentuk jaminan pelayanan dan prima serta selalu belajar untuk berbenah diri akan membuat
                    kami menjadi yang lebih baik di kemudian hari. 
                    <div class="text-center button-container">
                        <a href="#" class="button">Featured</a>
                        <a href="#" class="button">for rent</a>
                    </div>

                    {{ -- <div class="tabs">
                        <div class="tab">
                            Featured
                        </div>
                        <div class="tab">
                        for rent
                        </div>
                    </div> }}

                    <div class="products text-center">
                        <div class="product"> 

                    </div>
                </div> <!-- end products -->
                <div class="text-center button-container">
            </div>
        </div><!-- end container -->
                    </div> <!-- end featured-section -->
                    </div> <!-- end #app -->
                    <script src="js/app.js"></script>
    </body>
</html>