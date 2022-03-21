<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Success Register Mitra Shopee</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    {{-- CSS --}}
    <link rel="stylesheet" href="/css/style.css">
    {{-- Font-Style --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
</head>
<body style="font-family: Roboto Slab; color:white; background-color: white ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <p style="text-align: center"><img src="/img/shopee-logo.png" alt="Logo Shopee" width="200px"></p>
                        <h3 class="text-center" style="font-weight: bold">Register Mitra Shopee Completed</h3>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <td style="width:150px">Nama Depan</td>
                                <td>{{ $data->nama_depan }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Nama Belakang</td>
                                <td>{{ $data->nama_belakang }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Tempat Lahir</td>
                                <td>{{ $data->tempat_lahir }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Tanggal Lahir</td>
                                <td>{{ $data->tanggal_lahir }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Jenis Kelamin</td>
                                <td>{{ $data->jenis_kelamin }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Alamat</td>
                                <td>{{ $data->alamat }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Email</td>
                                <td>{{ $data->email }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Nomor KTP</td>
                                <td>{{ $data->nomor_ktp }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Nomor Telepon</td>
                                <td>{{ $data->nomor_telepon }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Pendidikan</td>
                                <td>{{ $data->pendidikan }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Tinggi Badan(cm)</td>
                                <td>{{ $data->tinggi }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Berat Badan(kg)</td>
                                <td>{{ $data->berat }}</td>
                            </tr>
                            <tr>
                                <td style="width:150px">Identitas</td>
                                <td><img src="{{$data->ktp}}" alt="KTP" width="250px"></td>
                            </tr>
                        </table>
                        <p style="text-align: center">
                            <a href="/formulir" class="btn btn-primary">Kembali ke Formulir</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@include('sweetalert::alert')
</html> 