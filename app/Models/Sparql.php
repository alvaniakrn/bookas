<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

require_once realpath(__DIR__ . '/..') . "../../vendor/autoload.php";
// require_once realpath(__DIR__ . '/..') . "../Http/html_tag_helpers.php";

class Sparql extends Model
{
    use HasFactory;

    function getDokter ($type = 'all', $value = '')
    {
        $sparql = new \EasyRdf\Sparql\Client('http://localhost:3030/puskesmasgo/query');

        $idDokter = '';
        $namaDokter = '';
        $spesialis = '';

        if($type == 'idDokter'){
            $idDokter = $value;
        }
        else if ($type == 'namaDokter'){
            $namaDokter = $value;
        }
        else if ($type == 'spesialis'){
            $spesialis = $value;
        }
        else if ($type == 'all'){
            $value = '';
        }
        else {
            return "Unknown";
        }

        $result = $sparql->query(
            "PREFIX ab: <http://learningsparql.com/ns/addressbook#> 
            PREFIX d:  <http://learningsparql.com/ns/data#> 
            
            SELECT ?idDokter ?namaDokter ?noTelpDokter ?spesialis ?pendidikan ?jadwal ?gambar 
            WHERE{
                OPTIONAL {?person ab:idDokter ?idDokter .}
                OPTIONAL {?person ab:namaDokter ?namaDokter .}
                OPTIONAL {?person ab:noTelpDokter ?noTelpDokter .}
                OPTIONAL {?person ab:spesialis ?spesialis .}
                OPTIONAL {?person ab:pendidikan ?pendidikan .}
                OPTIONAL {?person ab:jadwal ?jadwal. }
                OPTIONAL {?person ab:gambar ?gambar .}
                OPTIONAL {?person ab:role ?role .}
                FILTER (?role='dokter')
                FILTER regex (?idDokter, \"{$idDokter}\", \"i\")
                FILTER regex (?namaDokter, \"{$namaDokter}\", \"i\")
                FILTER regex (?spesialis, \"{$spesialis}\", \"i\")
            }
            ORDER BY ASC(?idDokter)"
        );
        return $result;
    }

    function getPasien ($type = 'all', $value = '')
    {
        $sparql = new \EasyRdf\Sparql\Client('http://localhost:3030/puskesmasgo/query');

        $idPasien = '';
        $namaPasien = '';

        if($type == 'idPasien'){
            $idPasien = $value;
        }
        else if ($type == 'namaPasien'){
            $namaPasien = $value;
        }
        else if ($type == 'all'){
            $value = '';
        }
        else {
            return "Unknown";
        }

        $result = $sparql->query(
            "PREFIX ab: <http://learningsparql.com/ns/addressbook#> 
            PREFIX d:  <http://learningsparql.com/ns/data#> 
            
            SELECT ?idPasien ?namaPasien ?tglLahirPasien ?noTelpPasien ?alamatPasien 
            WHERE{
                OPTIONAL {?person ab:idPasien ?idPasien.}
                OPTIONAL {?person ab:namaPasien ?namaPasien .}
                OPTIONAL {?person ab:tglLahirPasien ?tglLahirPasien .}
                OPTIONAL {?person ab:noTelpPasien ?noTelpPasien .}
                OPTIONAL {?person ab:alamatPasien ?alamatPasien .}
                OPTIONAL {?person ab:role ?role .}
                FILTER (?role='pasien')
                FILTER regex (?idPasien, \"{$idPasien}\", \"i\")
                FILTER regex (?namaPasien, \"{$namaPasien}\", \"i\")
            }
            ORDER BY ASC(?idPasien)"
        );
        return $result;
    }

    function getKunjungan ($type = 'all', $value = '')
    {
        $sparql = new \EasyRdf\Sparql\Client('http://localhost:3030/puskesmasgo/query');

        $idKunjungan = '';
        $idDokter = '';
        $idPasien = '' ;
        $tglKunjungan = '';
        $anemnesa = '';
        $diagnosis = '';
        $tindakan = '';
        $obat = '';

        if($type == 'idKunjungan'){
            $idKunjungan = $value;
        }
        else if ($type == 'idDokter'){
            $idDokter = $value;
        }
        else if ($type == 'idPasien'){
            $idPasien = $value;
        }
        else if ($type == 'tglKunjungan'){
            $tglKunjungan = $value;
        }
        else if ($type == 'anemnesa'){
            $anemnesa = $value;
        }
        else if ($type == 'diagnosis'){
            $diagnosis = $value;
        }
        else if ($type == 'tindakan'){
            $tindakan = $value;
        }
        else if ($type == 'obat'){
            $obat = $value;
        }
        else if ($type == 'all'){
            $value = '';
        }
        else {
            return "Unknown";
        }

        $result = $sparql->query(
            "PREFIX ab: <http://learningsparql.com/ns/addressbook#> 
            PREFIX d:  <http://learningsparql.com/ns/data#> 
            
            SELECT DISTINCT ?idKunjungan ?idDokter ?namaDokter ?idPasien ?namaPasien ?tglKunjungan ?anemnesa ?diagnosis ?tindakan ?obat
            WHERE {
              OPTIONAL {?kunjungan ab:idKunjungan ?idKunjungan .}
              OPTIONAL {?kunjungan ab:tglKunjungan ?tglKunjungan .}
              OPTIONAL {?kunjungan ab:anemnesa ?anemnesa .}
              OPTIONAL {?kunjungan ab:diagnosis ?diagnosis .}
              OPTIONAL {?kunjungan ab:tindakan ?tindakan .}
              OPTIONAL {?kunjungan ab:obat ?obat .} 
              ?kunjungan ab:KunjunganDokter ?kd .
              ?kunjungan ab:KunjunganPasien ?kp .
              OPTIONAL {?kd ab:idDokter ?idDokter .}
              OPTIONAL {?kd ab:namaDokter ?namaDokter .}
              OPTIONAL {?kp ab:idPasien ?idPasien.}
              OPTIONAL {?kp ab:namaPasien ?namaPasien .}
              FILTER regex (?idKunjungan, \"{$idKunjungan}\", \"i\")
              FILTER regex (?idDokter, \"{$idDokter}\", \"i\")
              FILTER regex (?idPasien, \"{$idPasien}\", \"i\")
              FILTER regex (?tglKunjungan, \"{$tglKunjungan}\", \"i\")
              FILTER regex (?anemnesa, \"{$anemnesa}\", \"i\")
              FILTER regex (?diagnosis, \"{$diagnosis}\", \"i\")
              FILTER regex (?tindakan, \"{$tindakan}\", \"i\")
              FILTER regex (?obat, \"{$obat}\", \"i\")
            }
            ORDER BY ASC(?idKunjungan)"
        );
        return $result;
    }

    function searchDokter ($idDokter, $namaDokter, $spesialis)
    {
        $sparql = new \EasyRdf\Sparql\Client('http://localhost:3030/puskesmasgo/query');

        $result = $sparql->query(
            "PREFIX ab: <http://learningsparql.com/ns/addressbook#> 
            PREFIX d:  <http://learningsparql.com/ns/data#> 
            
            SELECT ?idDokter ?namaDokter ?spesialis ?gambar
            WHERE{
                OPTIONAL {?person ab:idDokter ?idDokter .}
                OPTIONAL {?person ab:namaDokter ?namaDokter .}
                OPTIONAL {?person ab:spesialis ?spesialis .}
                OPTIONAL {?person ab:gambar ?gambar .}
                OPTIONAL {?person ab:role ?role .}
                FILTER (?role='dokter')
                FILTER regex (?idDokter, \"{$idDokter}\", \"i\")
                FILTER regex (?namaDokter, \"{$namaDokter}\", \"i\")
                FILTER regex (?spesialis, \"{$spesialis}\", \"i\")
            }
            ORDER BY ASC(?idDokter)"
        );
        return $result;
    }

    function searchPasien($idPasien, $namaPasien, $tglLahirPasien)
    {
        $sparql = new \EasyRdf\Sparql\Client('http://localhost:3030/puskesmasgo/query');

        $result = $sparql->query(
            "PREFIX ab: <http://learningsparql.com/ns/addressbook#> 
            PREFIX d:  <http://learningsparql.com/ns/data#> 
            
            SELECT ?idPasien ?namaPasien ?tglLahirPasien ?noTelpPasien ?alamatPasien 
            WHERE{
                OPTIONAL {?person ab:idPasien ?idPasien.}
                OPTIONAL {?person ab:namaPasien ?namaPasien .}
                OPTIONAL {?person ab:tglLahirPasien ?tglLahirPasien .}
                OPTIONAL {?person ab:noTelpPasien ?noTelpPasien .}
                OPTIONAL {?person ab:alamatPasien ?alamatPasien .}
                OPTIONAL {?person ab:role ?role .}
                FILTER (?role='pasien')
                FILTER regex (?idPasien, \"{$idPasien}\", \"i\")
                FILTER regex (?namaPasien, \"{$namaPasien}\", \"i\")
            }
            ORDER BY ASC(?idPasien)"
        );
        return $result;
    }

    function searchKunjungan ($idKunjungan, $tglKunjungan, $diagnosis)
    {
        $sparql = new \EasyRdf\Sparql\Client('http://localhost:3030/puskesmasgo/query');

        $result = $sparql->query(
            "PREFIX ab: <http://learningsparql.com/ns/addressbook#> 
            PREFIX d:  <http://learningsparql.com/ns/data#> 
            
            SELECT DISTINCT ?idKunjungan ?idDokter ?namaDokter ?idPasien ?namaPasien ?tglKunjungan ?anemnesa ?diagnosis ?tindakan ?obat
            WHERE {
              OPTIONAL {?kunjungan ab:idKunjungan ?idKunjungan .}
              OPTIONAL {?kunjungan ab:tglKunjungan ?tglKunjungan .}
              OPTIONAL {?kunjungan ab:anemnesa ?anemnesa .}
              OPTIONAL {?kunjungan ab:diagnosis ?diagnosis .}
              OPTIONAL {?kunjungan ab:tindakan ?tindakan .}
              OPTIONAL {?kunjungan ab:obat ?obat .} 
              ?kunjungan ab:KunjunganDokter ?kd .
              ?kunjungan ab:KunjunganPasien ?kp .
              OPTIONAL {?kd ab:idDokter ?idDokter .}
              OPTIONAL {?kd ab:namaDokter ?namaDokter .}
              OPTIONAL {?kp ab:idPasien ?idPasien.}
              OPTIONAL {?kp ab:namaPasien ?namaPasien .}
              FILTER regex (?idKunjungan, \"{$idKunjungan}\", \"i\")
              FILTER regex (?tglKunjungan, \"{$tglKunjungan}\", \"i\")
              FILTER regex (?diagnosis, \"{$diagnosis}\", \"i\")
            }
            ORDER BY ASC(?idKunjungan)"
        );
        return $result;
    }
}
