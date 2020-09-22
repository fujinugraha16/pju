<div class="modal fade" id="modalHapus{{ $pju["id"] }}" tabindex="-1" aria-labelledby="modalHapus{{ $pju["id"] }}Label"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalHapus{{ $pju["id"] }}Label">Hapus Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ route('hapusData') }}" method="post">
                @csrf
                <div class="modal-body">
                    Apakah anda yakin untuk menghapus data ini?
                    <input type="hidden" value="{{ $pju["id"] }}" name="id">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-danger">Hapus Data</button>
                </div>
            </form>

        </div>
    </div>
</div>