<form action="{{ $route }}" method="get">
    <div class="input-group">
        <select class="form-control" name="column">
            <option value="tgl_masuk">Tgl Masuk</option>
            <option value="no_surat">No Surat</option>
            <option value="kecamatan">Kecamatan</option>
            <option value="desa">Desa</option>
            <option value="alamat">Alamat</option>
            <option value="id_pelanggan">No ID Pel</option>
            <option value="no_kontak">No Kontak</option>
            <option value="ket_kerusakan">Ket. Kerusakan</option>
            <option value="tgl_pemeliharaan">Tgl Pemeliharaan</option>
            <option value="pelaksana">Pelaksana</option>
        </select>
        <input type="text" class="form-control" aria-describedby="button-addon2" name="search">
        <div class="input-group-append">
            <button class="btn btn-primary" type="submit" id="button-addon2">
                <x-svg icon="search" />Cari</button>
        </div>
    </div>
</form>