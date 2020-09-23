<div class="modal fade" id="modalStatus{{ $pju["id"] }}" tabindex="-1"
    aria-labelledby="modalStatus{{ $pju["id"] }}Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalStatus{{ $pju["id"] }}Label">Status Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ route('updateStatusData') }}" method="post">
                @csrf
                <div class="modal-body">
                    Apakah anda yakin untuk mengganti status data ini menjadi
                    <b>{{$pju['ket_sdh_blm'] === 1 ? 'Belum' : 'Sudah' }}</b>?
                    <input type="hidden" value="{{ $pju["id"] }}" name="id">
                    <input type="hidden" value="{{ $pju["ket_sdh_blm"] }}" name="status">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Ganti Status</button>
                </div>
            </form>

        </div>
    </div>
</div>