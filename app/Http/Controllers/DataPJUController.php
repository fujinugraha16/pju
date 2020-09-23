<?php

namespace App\Http\Controllers;

use App\DataPJU;
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

        if ($req->status == 1) {
            $dataPJU->ket_sdh_blm = 0;
        } elseif ($req->status == 0) {
            $dataPJU->ket_sdh_blm = 1;
        }

        $dataPJU->save();
        return redirect('/')->with('Success', 'Status data berhasil diupdate');
    }

    public function sudahDiperbaiki(Request $req)
    {
        $dataPJUs = DataPJU::where('ket_sdh_blm', 1)->orderBy('tgl_masuk', 'ASC')->paginate(10);

        if (isset($req->search)) {
            $dataPJUs = DataPJU::where('ket_sdh_blm', 1)->where($req->column, 'LIKE', "%$req->search%")->orderBy('tgl_masuk', 'ASC')->paginate(10);
        }

        return view('sudah_diperbaiki', compact('dataPJUs'));
    }

    public function belumDiperbaiki(Request $req)
    {
        $dataPJUs = DataPJU::where('ket_sdh_blm', 0)->orderBy('tgl_masuk', 'ASC')->paginate(10);

        if (isset($req->search)) {
            $dataPJUs = DataPJU::where('ket_sdh_blm', 0)->where($req->column, 'LIKE', "%$req->search%")->orderBy('tgl_masuk', 'ASC')->paginate(10);
        }

        return view('belum_diperbaiki', compact('dataPJUs'));
    }
}
