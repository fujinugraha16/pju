<?php

namespace App\Http\Controllers;

use App\DataPJU;
use App\Exports\DataPJUExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class DataPJUController extends Controller
{
    public function index(Request $req)
    {
        $dataPJUs = DataPJU::orderBy('tgl_masuk', 'ASC')->paginate(10);

        if (isset($req->search)) {
            $dataPJUs = DataPJU::where($req->column, 'LIKE', "%$req->search%")->orderBy('tgl_masuk', 'ASC')->paginate(10);
        }

        return view('index', compact('dataPJUs'));
    }

    public function tambahData(Request $req)
    {
        DataPJU::create($req->all());
        return redirect('/')->with('Success', 'Data berhasil ditambahkan');
    }

    public function editData(Request $req, $id)
    {
        $dataPJU = DataPJU::find($id);
        $dataPJU->update($req->all());
        return redirect('/')->with('Success', 'Data berhasil diedit');
    }

    public function hapusData(Request $req)
    {
        $dataPJU = DataPJU::find($req->id);
        $dataPJU->delete();
        return redirect('/')->with('Success', 'Data berhasil dihapus');
    }

    public function updateStatusData(Request $req)
    {
        $dataPJU = DataPJU::find($req->id);

        if ($req->status === 'Sudah') {
            $dataPJU->ket_sdh_blm = 'Belum';
        } elseif ($req->status == 'Belum') {
            $dataPJU->ket_sdh_blm = 'Sudah';
        }

        $dataPJU->save();
        return redirect('/')->with('Success', 'Status data berhasil diupdate');
    }

    public function sudahDiperbaiki(Request $req)
    {
        $dataPJUs = DataPJU::where('ket_sdh_blm', 'Sudah')->orderBy('tgl_masuk', 'ASC')->paginate(10);

        if (isset($req->search)) {
            $dataPJUs = DataPJU::where('ket_sdh_blm', 'Sudah')->where($req->column, 'LIKE', "%$req->search%")->orderBy('tgl_masuk', 'ASC')->paginate(10);
        }

        return view('sudah_diperbaiki', compact('dataPJUs'));
    }

    public function belumDiperbaiki(Request $req)
    {
        $dataPJUs = DataPJU::where('ket_sdh_blm', 'Belum')->orderBy('tgl_masuk', 'ASC')->paginate(10);

        if (isset($req->search)) {
            $dataPJUs = DataPJU::where('ket_sdh_blm', 'Belum')->where($req->column, 'LIKE', "%$req->search%")->orderBy('tgl_masuk', 'ASC')->paginate(10);
        }

        return view('belum_diperbaiki', compact('dataPJUs'));
    }

    public function export(Request $req)
    {
        $cetakMode = $req->cetakMode;
        $from = $req->tgl_mulai;
        $to = $req->tgl_akhir;



        $dataPJUs = DataPJU::whereBetween('tgl_masuk', [$from, $to])->orderBy('tgl_masuk', 'ASC')->get();

        if ($cetakMode === 'sudah') {
            $dataPJUs = DataPJU::where('ket_sdh_blm', 'Sudah')->whereBetween('tgl_masuk', [$from, $to])->orderBy('tgl_masuk', 'ASC')->get();
        } elseif ($cetakMode === 'belum') {
            $dataPJUs = DataPJU::where('ket_sdh_blm', 'Belum')->whereBetween('tgl_masuk', [$from, $to])->orderBy('tgl_masuk', 'ASC')->get();
        }

        $array = [];
        $i = 1;
        foreach ($dataPJUs as $pju) {
            array_push($array, [
                $i++,
                $pju['tgl_masuk'],
                $pju['no_surat'],
                $pju['kecamatan'],
                $pju['desa'],
                $pju['alamat'],
                $pju['id_pelanggan'],
                $pju['no_kontak'],
                $pju['ket_kerusakan'],
                $pju['ket_sdh_blm'],
                $pju['tgl_pemeliharaan'],
                $pju['pelaksana'],
            ]);
        }

        $export = new DataPJUExport($array);

        if ($cetakMode === 'sudah') {
            return Excel::download($export, "Data PJU ($from) sampai ($to) (Sudah).xlsx");
        } elseif ($cetakMode === 'belum') {
            return Excel::download($export, "Data PJU ($from) sampai ($to) (Belum).xlsx");
        }

        return Excel::download($export, "Data PJU ($from) sampai ($to).xlsx");
    }
}
