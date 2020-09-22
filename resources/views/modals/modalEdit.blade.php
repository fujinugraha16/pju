<div class="modal fade" id="modalEdit{{ $pju["id"] }}" tabindex="-1" aria-labelledby="modalEdit{{ $pju["id"] }}Label"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEdit{{ $pju["id"] }}Label">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('editData', ['id'=>$pju["id"]]) }}" method="post">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="tgl_masuk">Tanggal Masuk</label>
                        <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk"
                            value="{{$pju["tgl_masuk"]}}" required>
                    </div>
                    <div class="form-group">
                        <label for="no_surat">No Surat</label>
                        <input type="text" class="form-control" id="no_surat" name="no_surat"
                            value="{{$pju["no_surat"]}}" required>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="kecamatan">Kecamatan</label>
                                <input type="text" class="form-control" id="kecamatan" name="kecamatan"
                                    value="{{$pju["kecamatan"]}}" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="desa">Desa</label>
                                <input type="text" class="form-control" id="desa" name="desa" value="{{ $pju['desa'] }}"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat"
                            rows="3">{{ $pju['alamat'] }}</textarea>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="id_pelanggan">No ID Pel</label>
                                <input type="text" class="form-control" id="id_pelanggan" name="id_pelanggan"
                                    value="{{ $pju['id_pelanggan'] }}" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="no_kontak">No Kontak (Opsional)</label>
                                <input type="text" class="form-control" id="no_kontak" name="no_kontak"
                                    value="{{ $pju['no_kontak'] }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ket_kerusakan">Ket. Kerusakan</label>
                        <input type="text" class="form-control" id="ket_kerusakan" name="ket_kerusakan"
                            value="{{ $pju['ket_kerusakan'] }}" required>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="tgl_pemeliharaan">Tanggal Pemeliharaan (Optional)</label>
                                <input type="date" class="form-control" id="tgl_pemeliharaan" name="tgl_pemeliharaan"
                                    value="{{ $pju['tgl_pemeliharaan'] }}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="pelaksana">Pelaksana (Optional)</label>
                                <input type="text" class="form-control" id="pelaksana" name="pelaksana"
                                    value="{{ $pju["pelaksana"] }}">
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