<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sparql;

class DataController extends Controller
{
    function search($value){
        $sparql = new Sparql();

        $IdDokter = $sparql->getDokter('idDokter', $value);
        $NamaDokter = $sparql->getDokter('namaDokter', $value);
        $Spesialis = $sparql->getDokter('spesialis', $value);
        $IdPasien = $sparql->getPasien('idPasien', $value);
        $NamaPasien = $sparql->getPasien('namaPasien', $value);
        $IdKunjungan = $sparql->getKunjungan('idKunjungan', $value);
        $TanggalKunjungan = $sparql->getKunjungan('tglKunjungan', $value);
        $Anemnesa = $sparql->getKunjungan('anemnesa', $value);
        $Diagnosis = $sparql->getKunjungan('diagnosis', $value);
        $Tindakan = $sparql->getKunjungan('tindakan', $value);
        $Obat = $sparql->getKunjungan('obat', $value);
        
        return compact("IdDokter", "NamaDokter", "Spesialis", "IdPasien", "NamaPasien", "IdKunjungan", "TanggalKunjungan", "Anemnesa", "Diagnosis", "Tindakan", "Obat");
    }

    function cariDokter($idDokter, $namaDokter, $spesialis){
        $sparql = new Sparql();
        $data = $sparql->searchDokter($idDokter, $namaDokter, $spesialis);
        return $data;
    }

    function cariPasien($idPasien, $namaPasien, $tglLahirPasien){
        $sparql = new Sparql();
        $data = $sparql->searchPasien($idPasien, $namaPasien, $tglLahirPasien);
        return $data;
    }

    function cariKunjungan($idKunjungan, $tglKunjungan, $diagnosis){
        $sparql = new Sparql();
        $data = $sparql->searchKunjungan($idKunjungan, $tglKunjungan, $diagnosis);
        return $data;
    }

    function getAllDokter(){
        $sparql = new Sparql();
        return $sparql->getDokter('all');
    }

    function getDokterbyID($id){
        $sparql = new Sparql();
        return $sparql->getDokter('idDokter', $id);
    }

    function getAllPasien(){
        $sparql = new Sparql();
        return $sparql->getPasien('all');
    }

    function getPasienbyID($id){
        $sparql = new Sparql();
        return $sparql->getPasien('idPasien', $id);
    }

    function getAllKunjungan(){
        $sparql = new Sparql();
        return $sparql->getKunjungan('all');
    }

    function getKunjunganbyIDDokter($id){
        $sparql = new Sparql();
        return $sparql->getKunjungan('idDokter', $id);
    }

    function getKunjunganbyIDPasien($id){
        $sparql = new Sparql();
        return $sparql->getKunjungan('idPasien', $id);
    }
}
