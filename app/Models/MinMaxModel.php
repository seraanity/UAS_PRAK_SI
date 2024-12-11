<?php
namespace App\Models;

use CodeIgniter\Model;

class MinMaxModel extends Model
{
    protected $table = 'data_konversi';
    protected $db;

    public function __construct()
    {
        $this->db = db_connect();
    }

    // Fungsi untuk menampilkan semua data konversi
    public function tampilKonversi()
    {
        $dataQuery = $this->db->query("SELECT * FROM data_konversi");
        return $dataQuery->getResult();
    }
    // Fungsi untuk menghitung nilai min dan max berdasarkan kriteria
    public function tampilMinMax()
    {
        $dataQuery = $this->db->query("
            SELECT 
                MAX(CASE WHEN id_kriteria = '1' THEN nilai END) AS maxK1,
                MAX(CASE WHEN id_kriteria = '2' THEN nilai END) AS maxK2,
                MAX(CASE WHEN id_kriteria = '3' THEN nilai END) AS maxK3,
                MAX(CASE WHEN id_kriteria = '4' THEN nilai END) AS maxK4
            FROM data_konversi
        ");
        return $dataQuery->getRow();
    }
}
