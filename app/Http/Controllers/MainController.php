<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DataController;

class MainController extends Controller
{
    public function search(Request $request)
    {
        $data = new DataController();
        $varsearch = $request->search;
        $search = $data->search($varsearch);
        return view('hasil_pencarian', compact('search', 'varsearch'));
    }

    public function dataDokter()
    {
        $data = new DataController();
        $dataAll = $data->getAllDokter();
        return view('dokter_data', compact('dataAll'));
    }

    public function dataPasien()
    {
        $data = new DataController();
        $dataAll = $data->getAllPasien();
        return view('pasien_data', compact('dataAll'));
    }

    public function getSingleDokter($id){
        $data = new DataController();
        $dokter = $data->getDokterbyID($id);
        $kunjungan = $data->getKunjunganbyIDDokter($id);
        return view('dokter_detail', compact('dokter', 'kunjungan'));
    }

    public function getSinglePasien($id){
        $data = new DataController();
        $pasien = $data->getPasienbyID($id);
        $kunjungan = $data->getKunjunganbyIDPasien($id);
        return view('pasien_detail', compact('pasien', 'kunjungan'));
    }
}
