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
            "PREFIX data:<http://example.com/>
            PREFIX rdf:<http://www.w3.org/1999/02/22-rdf-syntax-ns#> 
            PREFIX dbo:<http://dbpedia.org/ontology/>
            
            SELECT ?idDokter ?namaDokter ?noTelpDokter ?spesialis ?pendidikan ?jadwal ?gambar 
            WHERE{
                ?subDokter rdf:type dbo:Dokter .
                OPTIONAL {?subDokter data:idDokter ?idDokter . }
                OPTIONAL {?subDokter data:namaDokter ?namaDokter .}
                OPTIONAL {?subDokter data:noTelpDokter ?noTelpDokter .}
                OPTIONAL {?subDokter data:spesialis ?spesialis .}
                OPTIONAL {?subDokter data:pendidikan ?pendidikan .}
                OPTIONAL {?subDokter data:jadwal ?jadwal.}
                OPTIONAL {?subDokter data:gambar ?gambar .}
                FILTER regex (?idDokter, \"{$idDokter}\", \"i\")
                FILTER regex (?namaDokter, \"{$namaDokter}\", \"i\")
                FILTER regex (?spesialis, \"{$spesialis}\", \"i\")
            }"
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
            "PREFIX data:<http://example.com/>
            PREFIX rdf:<http://www.w3.org/1999/02/22-rdf-syntax-ns#> 
            PREFIX dbo:<http://dbpedia.org/ontology/>
            
            SELECT ?idPasien ?namaPasien ?tglLahirPasien ?noTelpPasien ?alamatPasien
            WHERE{
                ?subPasien rdf:type dbo:Pasien.
                OPTIONAL {?subPasien data:idPasien ?idPasien . }
                OPTIONAL {?subPasien data:namaPasien ?namaPasien .}
                OPTIONAL {?subPasien data:tglLahirPasien ?tglLahirPasien .}
                OPTIONAL {?subPasien data:noTelpPasien ?noTelpPasien .}
                OPTIONAL {?subPasien data:alamatPasien ?alamatPasien .}
                FILTER regex (?idPasien, \"{$idPasien}\", \"i\")
                FILTER regex (?namaPasien, \"{$namaPasien}\", \"i\")
            }"
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
            "PREFIX data:<http://example.com/>
            PREFIX rdf:<http://www.w3.org/1999/02/22-rdf-syntax-ns#> 
            PREFIX dbo:<http://dbpedia.org/ontology/>
            
            SELECT ?idKunjungan ?idDokter ?namaDokter ?idPasien ?namaPasien ?tglKunjungan ?anemnesa ?diagnosis ?tindakan ?obat
            WHERE{
                ?subKunjungan rdf:type dbo:Kunjungan .
                OPTIONAL {?subKunjungan data:idKunjungan ?idKunjungan. }
                OPTIONAL {?subKunjungan data:idDokter ?idDokter. }
                OPTIONAL {?subKunjungan data:namaDokter ?namaDokter .}
                OPTIONAL {?subKunjungan data:idPasien ?idPasien. }
                OPTIONAL {?subKunjungan data:namaPasien ?namaPasien .}
                OPTIONAL {?subKunjungan data:tglKunjungan ?tglKunjungan .}
                OPTIONAL {?subKunjungan data:anemnesa ?anemnesa .}
                OPTIONAL {?subKunjungan data:diagnosis ?diagnosis .}
                OPTIONAL {?subKunjungan data:tindakan ?tindakan.}
                OPTIONAL {?subKunjungan data:obat?obat.}
                FILTER regex (?idKunjungan, \"{$idKunjungan}\", \"i\")
                FILTER regex (?idDokter, \"{$idDokter}\", \"i\")
                FILTER regex (?idPasien, \"{$idPasien}\", \"i\")
                FILTER regex (?tglKunjungan, \"{$tglKunjungan}\", \"i\")
                FILTER regex (?anemnesa, \"{$anemnesa}\", \"i\")
                FILTER regex (?diagnosis, \"{$diagnosis}\", \"i\")
                FILTER regex (?tindakan, \"{$tindakan}\", \"i\")
                FILTER regex (?obat, \"{$obat}\", \"i\")
            }"
        );
        return $result;
    }
}
