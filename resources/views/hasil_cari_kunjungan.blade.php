<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Hasil Pencarian Kunjungan</title>
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
                <h1>Hasil Pencarian Kunjungan</h1>
                <div class="card-content">
                    <div class="row">
                        <div class="col-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID Kunjungan</th>
                                        <th scope="col">ID Dokter</th>
                                        <th scope="col">Nama Dokter</th>
                                        <th scope="col">ID Pasien</th>
                                        <th scope="col">Nama Pasien</th>
                                        <th scope="col">Tgl Kunjungan</th>
                                        <th scope="col">Anemnesa</th>
                                        <th scope="col">Diagnosis</th>
                                        <th scope="col">Tindakan</th>
                                        <th scope="col">Obat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($search as $s)
                                        <tr>
                                            <th scope="row">{{ $s->idKunjungan }}</th>
                                            <td><a href="/dokter/{{ $s->idDokter }}">{{ $s->idDokter}}</a></td>
                                            <td>{{ $s->namaDokter}}</td>
                                            <td><a href="/pasien/{{ $s->idPasien }}">{{ $s->idPasien}}</a></td>
                                            <td>{{ $s->namaPasien}}</td>
                                            <td>{{ $s->tglKunjungan}}</td>
                                            <td>{{ $s->anemnesa }}</td>
                                            <td>{{ $s->diagnosis}}</td>
                                            <td>{{ $s->tindakan }}</td>
                                            <td>{{ $s->obat}}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8" class="text-center">Kunjungan tidak ditemukan!</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
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