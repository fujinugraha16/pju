<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PJU | Beranda</title>
    @include('assets/css')
</head>

<body>
    @include('components/navbar')

    <div class="my-container">
        <h3 class="my-3 text-center">
            Data Pengajuan Pemeliharaan PJU
        </h3>

        @if(session("Success"))
        <x-alert type="success" title="{{session('Success')}}" />
        @endif

        <!-- Button trigger modal -->
        <div class="row justify-content-between">
            <div class="col-6">
                <button type="button" class="btn btn-primary mb-2 mr-2" data-toggle="modal" data-target="#modalTambah">
                    <x-svg icon="plus" />Tambah Data
                </button>
                <button type="button" class="btn btn-success mb-2 mr-2" data-toggle="modal" data-target="#modalCetak">
                    <x-svg icon="print" />Cetak Data
                </button>
            </div>
            <div class="col-4">
                <x-search-box route="{{route('index')}}" />
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <colgroup>
                    <col span="1" style="width: 5%;">
                    <col span="1" style="width: 10%;">
                    <col span="1" style="width: 10%;">
                    <col span="1" style="width: 5%;">
                    <col span="1" style="width: 5%;">
                    <col span="1" style="width: 10%;">
                    <col span="1" style="width: 5%;">
                    <col span="1" style="width: 5%;">
                    <col span="1" style="width: 10%;">
                    <col span="1" style="width: 10%;">
                    <col span="1" style="width: 10%;">
                    <col span="1" style="width: 10%;">
                    <col span="1" style="width: 5%;">
                </colgroup>
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
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1 @endphp
                    @foreach ($dataPJUs as $pju)
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$pju['tgl_masuk']}}</td>
                        <td>{{$pju['no_surat']}}</td>
                        <td>{{$pju['kecamatan']}}</td>
                        <td>{{$pju['desa']}}</td>
                        <td>{{$pju['alamat']}}</td>
                        <td>{{$pju['id_pelanggan']}}</td>
                        <td>{{$pju['no_kontak']}}</td>
                        <td>{{$pju['ket_kerusakan']}}</td>
                        <td>
                            <span
                                class="badge badge-{{$pju['ket_sdh_blm'] === 'Sudah' ? 'success' : 'warning' }}">{{ $pju['ket_sdh_blm'] }}
                            </span>
                            <a href="#" class="text-dark" data-toggle="modal"
                                data-target="#modalStatus{{ $pju["id"] }}">
                                <x-svg icon="pen" />
                            </a>
                        </td>
                        <td>{{$pju['tgl_pemeliharaan']}}</td>
                        <td>{{$pju['pelaksana']}}</td>
                        <td>
                            <a href="#" data-toggle="modal" data-target="#modalEdit{{ $pju["id"] }}">
                                <span class="badge badge-primary">Edit</span>
                            </a>
                            <a href="#" data-toggle="modal" data-target="#modalHapus{{ $pju["id"] }}">
                                <span class="badge badge-danger">Hapus</span>
                            </a>
                        </td>
                    </tr>

                    @include('modals/modalEdit')
                    @include('modals/modalHapus')
                    @include('modals/modalStatus')
                    @endforeach
                </tbody>
            </table>
        </div>

        @if (!$dataPJUs->count())
        Data tidak ditemukan atau Data tidak ada
        @endif

        <div class="float-right mt-3">
            {{ $dataPJUs->links() }}
        </div>
    </div>


    <!-- Modal -->
    @include('modals/modalTambah')
    @include('modals/modalCetak', ['cetakMode' => 'all'])

    @include('assets/script')
</body>

</html>