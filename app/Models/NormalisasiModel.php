<?php 
namespace App\Models;

use CodeIgniter\Model;

class NormalisasiModel extends Model
{
    protected $table = 'data_konversi';
    protected $db;

    public function __construct()
    {
        $this->db = db_connect();
    }

    public function tampilNormalisasi()
{
    // Ambil nilai min dan max untuk setiap kriteria
    $maxMinQuery = $this->db->query("
        SELECT 
            MAX(CASE WHEN id_kriteria = '1' THEN nilai END) AS maxK1,
            MAX(CASE WHEN id_kriteria = '2' THEN nilai END) AS maxK2,
            MAX(CASE WHEN id_kriteria = '3' THEN nilai END) AS maxK3,
            MAX(CASE WHEN id_kriteria = '4' THEN nilai END) AS maxK4
        FROM data_konversi
    ");
    $maxMinResults = $maxMinQuery->getRow();

    if (!$maxMinResults) {
        return null; // Jika tidak ada data
    }
    
    // Ambil data alternatif dan group berdasarkan kode_siswa
    $allDataQuery = $this->db->query("
        SELECT 
            kode_siswa,
            MAX(CASE WHEN id_kriteria = '1' THEN nilai END) AS C1,
            MAX(CASE WHEN id_kriteria = '2' THEN nilai END) AS C2,
            MAX(CASE WHEN id_kriteria = '3' THEN nilai END) AS C3,
            MAX(CASE WHEN id_kriteria = '4' THEN nilai END) AS C4
        FROM data_konversi
        GROUP BY kode_siswa
    ");
    $allDataResults = $allDataQuery->getResult();

    return ['maxmin' => $maxMinResults, 'all' => $allDataResults];
}

    
}