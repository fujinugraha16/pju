<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('tambahData') }}" method="post">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="tgl_masuk">Tanggal Masuk</label>
                        <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk" required>
                    </div>
                    <div class="form-group">
                        <label for="no_surat">No Surat</label>
                        <input type="text" class="form-control" id="no_surat" name="no_surat" required>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="kecamatan">Kecamatan</label>
                                <input type="text" class="form-control" id="kecamatan" name="kecamatan" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="desa">Desa</label>
                                <input type="text" class="form-control" id="desa" name="desa" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="id_pelanggan">No ID Pel</label>
                                <input type="text" class="form-control" id="id_pelanggan" name="id_pelanggan" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="no_kontak">No Kontak (Opsional)</label>
                                <input type="text" class="form-control" id="no_kontak" name="no_kontak">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ket_kerusakan">Ket. Kerusakan</label>
                        <input type="text" class="form-control" id="ket_kerusakan" name="ket_kerusakan" required>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="tgl_pemeliharaan">Tanggal Pemeliharaan (Optional)</label>
                                <input type="date" class="form-control" id="tgl_pemeliharaan" name="tgl_pemeliharaan">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="pelaksana">Pelaksana (Optional)</label>
                                <input type="text" class="form-control" id="pelaksana" name="pelaksana">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
</div>