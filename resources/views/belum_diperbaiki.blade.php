<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PJU | Belum Diperbaiki</title>
    @include('assets/css')
</head>

<body>
    @include('components/navbar')

    <div class="my-container">
        <h3 class="my-3 text-center">
            Data PJU yang Belum Diperbaiki
        </h3>


        <!-- Button trigger modal -->
        <div class="row justify-content-between">
            <div class="col-6">
                <button type="button" class="btn btn-success mb-2 mr-2" data-toggle="modal" data-target="#modalCetak">
                    Cetak Data
                </button>
            </div>
            <div class="col-3">
                <div class="input-group">
                    <input type="text" class="form-control" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button" id="button-addon2">Cari</button>
                    </div>
                </div>
            </div>
        </div>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tgl Masuk</th>
                    <th scope="col">No Surat</th>
                    <th scope="col">Kecamatan</th>
                    <th scope="col">Desa</th>
                    <th scope="col">Alamat/Lokasi</th>
                    <th scope="col">No ID Pel</th>
                    <th scope="col">No Kontak</th>
                    <th scope="col">Ket. Kerusakan</th>
                    <th scope="col">SDH / BLM</th>
                    <th scope="col">Tgl Pemeliharaan</th>
                    <th scope="col">Pelaksana</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>12-Nov-2020</td>
                    <td>022/VII/Ds-Tjs</td>
                    <td>Gunung Tanjung</td>
                    <td>Tanjung Sari</td>
                    <td>Kp. Lengkong RT 004 (Dpn Kantor Desa Tanjungsari) </td>
                    <td>P001</td>
                    <td>081234567890</td>
                    <td>Padam</td>
                    <td>
                        <span class="badge badge-warning">Belum</span>
                    </td>
                    <td>22-Nov-2020</td>
                    <td>Ridwan</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>12-Nov-2020</td>
                    <td>022/VII/Ds-Tjs</td>
                    <td>Gunung Tanjung</td>
                    <td>Tanjung Sari</td>
                    <td>Kp. Lengkong RT 004 (Dpn Kantor Desa Tanjungsari) </td>
                    <td>P001</td>
                    <td>081234567890</td>
                    <td>Padam</td>
                    <td>
                        <span class="badge badge-warning">Belum</span>
                    </td>
                    <td>22-Nov-2020</td>
                    <td>Ridwan</td>
                </tr>
            </tbody>
        </table>
    </div>


    <!-- Modal -->
    @include('modals/modalCetak')

    @include('assets/script')
</body>

</html>