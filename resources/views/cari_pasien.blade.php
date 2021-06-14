<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Cari Pasien</title>
    <!-- CSS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>

<body>
    <div class="container-fluid">
        <div class="container-navbar">
            @include('navbar')
        </div>

        <!--END Navbar-->

        <div class="section-doctor">
            <div class="container-navbar">
                <h1>Pencarian Pasien Lanjut</h1>
                <form method="POST" action="/cari-pasien">
                    @csrf
                    <div class="form-group row">
                      <label for="idPasien" class="col-sm-2 col-form-label">ID Pasien</label>
                      <div class="col-sm-10">
                        <input type="text" name="idPasien" class="form-control" id="idPasien" placeholder="ID Pasien">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="namaPasien" class="col-sm-2 col-form-label">Nama Pasien</label>
                      <div class="col-sm-10">
                        <input type="text" name="namaPasien" class="form-control" id="namaPasien" placeholder="Nama Pasien">
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="tglLahirPasien" class="col-sm-2 col-form-label">tglLahirPasien</label>
                        <div class="col-sm-10">
                          <input type="text" name="tglLahirPasien" class="form-control" id="tglLahirPasien" placeholder="MMM DD, YYYY">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Cari</button>
                </form>
            </div>
        </div>
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