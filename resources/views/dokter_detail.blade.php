<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Detail Dokter</title>
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

        <section class="section-doctor">
            <div class="container-navbar">
                <div class="doctor-data">
                    <h1 class="darkcolor">Data Dokter</h1>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        @foreach ($dokter as $dokter)
                                        <div class="col-3">
                                            <img src="{{ $dokter->gambar }}" alt="" class="ava-image">
                                        </div>
                                        <div class="col-9">
                                            <form>
                                                <div class="form-group row">
                                                    <label for="staticEmail"
                                                        class="col-sm-2 col-form-label">Nama</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" readonly class="form-control-plaintext"
                                                            id="staticEmail" value="{{ $dokter->namaDokter }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="staticEmail" class="col-sm-2 col-form-label">No.
                                                        Telp</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" readonly class="form-control-plaintext"
                                                            id="staticEmail" value="{{ $dokter->noTelpDokter }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="staticEmail"
                                                        class="col-sm-2 col-form-label">Spesialis</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" readonly class="form-control-plaintext"
                                                            id="staticEmail" value="{{ $dokter->spesialis }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="staticEmail"
                                                        class="col-sm-2 col-form-label">Pendidikan</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" readonly class="form-control-plaintext"
                                                            id="staticEmail" value="{{ $dokter->pendidikan }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="staticEmail"
                                                        class="col-sm-2 col-form-label">Jadwal</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" readonly class="form-control-plaintext"
                                                            id="staticEmail" value="{{ $dokter->jadwal }}">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="doctor-det">
                    <h1 class="darkcolor">Kunjungan</h1>
                    <div class="row">
                        <div class="col-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID Kunjungan</th>
                                        <th scope="col">ID Pasien</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Tgl Kunjungan</th>
                                        <th scope="col">Anemnesa</th>
                                        <th scope="col">Diagnosa</th>
                                        <th scope="col">Tindakan</th>
                                        <th scope="col">Obat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($kunjungan as $kunjungan)
                                    <tr>
                                        <th scope="row">{{ $kunjungan->idKunjungan }}</th>
                                        <td><a href="pasien/{{ $kunjungan->idPasien }}">{{ $kunjungan->idPasien }}</a></td>
                                        <td>{{ $kunjungan->namaPasien }}</td>
                                        <td>{{ $kunjungan->tglKunjungan }}</td>
                                        <td>{{ $kunjungan->anemnesa }}</td>
                                        <td>{{ $kunjungan->diagnosis }}</td>
                                        <td>{{ $kunjungan->tindakan }}</td>
                                        <td>{{ $kunjungan->obat }}</td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="8" class="text-center">Belum memiliki kunjungan!</td>
                                    </tr>
                                    @endforelse
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