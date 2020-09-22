<?php

namespace App\Http\Controllers;

use App\DataPJU;
use Illuminate\Http\Request;

class DataPJUController extends Controller
{
    public function index()
    {
        $dataPJUs = DataPJU::paginate(10);
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

    public function sudahDiperbaiki()
    {
        $dataPJUs = DataPJU::where('ket_sdh_blm', 1)->paginate(10);
        return view('sudah_diperbaiki', compact('dataPJUs'));
    }

    public function belumDiperbaiki()
    {
        $dataPJUs = DataPJU::where('ket_sdh_blm', 0)->paginate(10);
        return view('belum_diperbaiki', compact('dataPJUs'));
    }
}
