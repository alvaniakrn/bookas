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

    public function hasilSearchDokter(Request $request){
        $data = new DataController();
        $idDokter = $request->idDokter;
        $namaDokter = $request->namaDokter;
        $spesialis = $request->spesialis;
        $search = $data->cariDokter($idDokter, $namaDokter, $spesialis);
        return view('hasil_cari_dokter', compact('search'));
    }

    public function hasilSearchPasien(Request $request){
        $data = new DataController();
        $idPasien = $request->idPasien;
        $namaPasien = $request->namaPasien;
        $tglLahirPasien = $request->tglLahirPasien;
        $search = $data->cariPasien($idPasien, $namaPasien, $tglLahirPasien);
        return view('hasil_cari_pasien', compact('search'));
    }
    
    public function hasilSearchKunjungan(Request $request){
        $data = new DataController();
        $idKunjungan = $request->idKunjungan;
        $tglKunjungan = $request->tglKunjungan;
        $diagnosis = $request->diagnosis;
        $search = $data->cariKunjungan($idKunjungan, $tglKunjungan, $diagnosis);
        return view('hasil_cari_kunjungan', compact('search'));
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

    public function searchDokter(){
        return view('cari_dokter');
    }

    public function searchPasien(){
        return view('cari_pasien');
    }

    public function searchKunjungan(){
        return view('cari_kunjungan');
    }
}

