<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Detail Pasien</title>
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
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#"><img class="logo" src="img/Logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                    aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <div class="search">
                        <ul class="navbar-nav mr-auto">
                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search"
                                    aria-label="Search">
                                <button class="btn btn-pusgo my-2 my-sm-0" type="submit"><i
                                        class="bi bi-search"></i></button>
                            </form>
                        </ul>
                    </div>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: #006a4e;">
                                <p>Pasien</p>
                            </a>
                        </li>
                        <li class="nav-item ml-2">
                            <a class="nav-link" href="#" style="color: #ffffff;">
                                <p>Dokter</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <!--END Navbar-->

        <section class="section-pasien">
            <div class="container-navbar">
                <div class="datapasien">
                    <h1 class="darkcolor">Data Pasien</h1>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="content">
                                    <form>
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext"
                                                    id="staticEmail" value="Alvina Vania">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">Tanggal
                                                Lahir</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext"
                                                    id="staticEmail" value="14 Desember 2000">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">No. Telp</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext"
                                                    id="staticEmail" value="082111111111">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">Alamat</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext"
                                                    id="staticEmail" value="Jalan Kebon Sirih">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="detailpasien">
                    <h1 class="darkcolor">Kunjungan</h1>
                    <div class="row">
                        <div class="col-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Kunjung_ID</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Tgl Kunjung</th>
                                        <th scope="col">Anemnesa</th>
                                        <th scope="col">Diagnosa</th>
                                        <th scope="col">Penanganan</th>
                                        <th scope="col">Obat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">P-01</th>
                                        <td>Alvina Vania</td>
                                        <td>14-01-2021</td>
                                        <td>Demam, batuk, pilek.</td>
                                        <td>Covid 19</td>
                                        <td>Pemberian Oksigen</td>
                                        <td>Imboost force, enervon c</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">P-02</th>
                                        <td>Alvina Vania</td>
                                        <td>14-01-2021</td>
                                        <td>Demam, batuk, pilek.</td>
                                        <td>Covid 19</td>
                                        <td>Pemberian Oksigen</td>
                                        <td>Imboost force, enervon c</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">P-03</th>
                                        <td>Alvina Vania</td>
                                        <td>14-01-2021</td>
                                        <td>Demam, batuk, pilek.</td>
                                        <td>Covid 19</td>
                                        <td>Pemberian Oksigen</td>
                                        <td>Imboost force, enervon c</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">P-04</th>
                                        <td>Alvina Vania</td>
                                        <td>14-01-2021</td>
                                        <td>Demam, batuk, pilek.</td>
                                        <td>Covid 19</td>
                                        <td>Pemberian Oksigen</td>
                                        <td>Imboost force, enervon c</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">P-05</th>
                                        <td>Alvina Vania</td>
                                        <td>14-01-2021</td>
                                        <td>Demam, batuk, pilek.</td>
                                        <td>Covid 19</td>
                                        <td>Pemberian Oksigen</td>
                                        <td>Imboost force, enervon c</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">P-06</th>
                                        <td>Alvina Vania</td>
                                        <td>14-01-2021</td>
                                        <td>Demam, batuk, pilek.</td>
                                        <td>Covid 19</td>
                                        <td>Pemberian Oksigen</td>
                                        <td>Imboost force, enervon c</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- END TABEL -->
    </div>
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