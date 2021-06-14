<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>PuskesmasGo</title>
    <!-- CSS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">

</head>

<body>
    <div class="container-fluid">
        <div class="container-navbar">
            @include("navbar")
        </div>

        <div class="section-content">
            <div class="container-navbar">
                <h1 class="darkcolor">Tentang</h1>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="content">
                                <p>Website ini merupakan aplikasi untuk pengintegrasian data puskesmas. Dimana tujuannya
                                    agar mempermudah pencarian data pasien dan riwayat penyakit pasien.</p>
                                <p>Pembuat: Alvina Vania, Delanika Olympiani</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-card">
            <div class="container-navbar">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-3">
                        <div class="card">
                            <img src="img/pasien.png" alt="">
                            <a href="{{ url('/data-pasien') }}">DATA PASIEN</a>
                        </div>
                    </div>
                    <div class="col-2"></div>
                    <div class="col-3">
                        <div class="card">
                            <img src="img/dokter.png" alt="">
                            <a href="{{ url('/data-dokter') }}">DATA DOKTER</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-content">
            <div class="container-navbar">
                <h1 class="darkcolor">Pencarian Spesifik</h1>
            </div>
        </div>

        <div class="section-card">
            <div class="container-navbar">
                <div class="row justify-content-center">
                    <div class="col-3 mr-5 ml-5 mb-5">
                        <div class="card">
                            <img src="img/pasien.png" alt="">
                            <a href="{{ url('/cari-pasien') }}">Cari Pasien</a>
                        </div>
                    </div>
                    <div class="col-3 mr-5 ml-5 mb-5">
                        <div class="card">
                            <img src="img/dokter.png" alt="">
                            <a href="{{ url('/cari-dokter') }}">Cari Dokter</a>
                        </div>
                    </div>
                    <div class="col-3 mr-5 ml-5 mb-5">
                        <div class="card">
                            <img src="img/konsul.jpeg" alt="" style="height:258px; width:258px;">
                            <a href="{{ url('/cari-kunjungan') }}">Cari Kunjungan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--END CARD CONTENT-->
    </div>

    <!-- <div class="section-banner">
        <div class="container-navbar">
            <div class="col-12">
                <img src="img/img1.png" alt="">
            </div>
        </div>
    </div> -->
    <!-- END BANNER -->

</body>

<footer class="footer">
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js "
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous ">
        </script>
    <script src="https://kit.fontawesome.com/9923874ec2.js " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js "
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx " crossorigin="anonymous ">
        </script>
</footer>