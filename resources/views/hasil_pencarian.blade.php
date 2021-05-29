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

        <div class="section-doctor">
            <div class="container-navbar">
                <div class="card-content">
                    <div class="row">
                        @php($i = 0)
                        @php ($countNull = 0)

                    @foreach ($search as $searchresult)
                        @if ($searchresult->numRows()>0)
                            @if (array_keys($search)[$i] == 'NamaDokter' || array_keys($search)[$i] == 'idDokter' || array_keys($search)[$i] == 'Spesialis')
                            <div class="judul">Hasil Pencarian "{{ $varsearch }}" untuk {{ array_keys($search)[$i] }}</div>
                            <div class="row">
                            @foreach ($searchresult as $data)
                                <div class="col-3">
                                    <div class="card">
                                        <img src="{{ $data->gambar }}" alt="">
                                        <a href="/dokter/{{ $data->idDokter}}" class="doc-name">{{ $data->namaDokter }}</a>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                            @elseif (array_keys($search)[$i] == 'NamaPasien' || array_keys($search)[$i] == 'IdPasien' )
                                    <div class="judul">Hasil Pencarian "{{ $varsearch }}" untuk {{ array_keys($search)[$i] }}</div>
                                    <hr>
                                    <div class="col-12">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Pasien_ID</th>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">Tanggal Lahir</th>
                                                    <th scope="col">No. Telp</th>
                                                    <th scope="col">Alamat</th>
                                                    <th scope="col">Detail</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($searchresult as $data)
                                                    <tr>
                                                        <th scope="row">{{ $data->idPasien }}</th>
                                                        <td>{{ $data->namaPasien }}</td>
                                                        <td>{{ $data->tglLahirPasien }}</td>
                                                        <td>{{ $data->noTelpPasien }}</td>
                                                        <td>{{ $data->alamatPasien }}</td>
                                                        <td><a href="/pasien/{{ $data->idPasien }}">See More</a></td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                            @elseif (array_keys($search)[$i] == 'IdKunjungan' || array_keys($search)[$i] == 'TanggalKunjungan' || array_keys($search)[$i] == 'Anemnesa' || array_keys($search)[$i] == 'Diagnosis' || array_keys($search)[$i] == 'Tindakan' || array_keys($search)[$i] == 'Obat')
                                    <div class="judul">Hasil Pencarian "{{ $varsearch }}" untuk {{ array_keys($search)[$i] }}</div>
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
                                                @foreach ($searchresult as $data)
                                                    <tr>
                                                        <th scope="row">{{ $data->idKunjungan }}</th>
                                                        <td><a href="/dokter/{{ $data->idDokter }}">{{ $data->idDokter}}</a></td>
                                                        <td>{{ $data->namaDokter}}</td>
                                                        <td><a href="/pasien/{{ $data->idPasien }}">{{ $data->idPasien}}</a></td>
                                                        <td>{{ $data->namaPasien}}</td>
                                                        <td>{{ $data->tglKunjungan}}</td>
                                                        <td>{{ $data->anemnesa }}</td>
                                                        <td>{{ $data->diagnosis}}</td>
                                                        <td>{{ $data->tindakan }}</td>
                                                        <td>{{ $data->obat}}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                            @endif
                        @else
                        @php($countNull++)
                        @endif
                    
                    @php($i++)
                    @endforeach

                    </div>
                    @if ($countNull >= 11)
                    <div class="not-found">Hasil pencarian tidak ditemukan!</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>