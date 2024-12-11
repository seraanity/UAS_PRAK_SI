<?php 
namespace App\Models;
use CodeIgniter\Model;

class PreferensiModel extends Model
{
    protected $db;

    function __construct()
    {
        $this->db = db_connect();
    }

    public function hitungPreferensi()
    {
        // Ambil bobot dari setiap kriteria
        $bobotQuery = $this->db->query("SELECT id_kriteria, nilai FROM data_bobot");
        $bobotData = $bobotQuery->getResultArray();

        // Ambil hasil normalisasi
        $normalisasiQuery = $this->db->query("
            SELECT 
                kode_siswa,
                MAX(CASE WHEN id_kriteria = '1' THEN nilai END) AS C1,
                MAX(CASE WHEN id_kriteria = '2' THEN nilai END) AS C2,
                MAX(CASE WHEN id_kriteria = '3' THEN nilai END) AS C3,
                MAX(CASE WHEN id_kriteria = '4' THEN nilai END) AS C4
            FROM data_konversi
            GROUP BY kode_siswa
            ORDER BY CAST(SUBSTRING(kode_siswa, 2) AS UNSIGNED);
        ");
        $normalisasiData = $normalisasiQuery->getResultArray();

        // Hitung nilai preferensi
        $preferensiResults = [];
        foreach ($normalisasiData as $row) {
            $preferensi = 0;

            foreach ($bobotData as $bobot) {
                $kriteria = 'C' . $bobot['id_kriteria'];  // Sesuaikan format kriteria
                $bobotValue = $bobot['nilai'];

                // Pastikan nilai kriteria tidak null atau kosong sebelum normalisasi
                if (!empty($row[$kriteria])) {
                    // Normalisasi untuk Benefit (gunakan nilai maksimum)
                    $maxValue = max(array_column($normalisasiData, $kriteria));
                    $normalisasiValue = $maxValue != 0 ? $row[$kriteria] / $maxValue : 0;  // Cegah pembagian oleh nol
                    
                    // Tambahkan hasil preferensi berdasarkan bobot
                    $preferensi += $normalisasiValue * $bobotValue;

                    // Simpan setiap nilai normalisasi untuk ditampilkan di view
                    $row[$kriteria] = round($normalisasiValue, 3);
                } else {
                    $row[$kriteria] = 0;  // Nilai default jika data kosong
                }
            }

            // Tambahkan hasil preferensi ke dalam array
            $row['nilai_preferensi'] = round($preferensi, 3);
            $preferensiResults[] = $row;
        }

        // Urutkan hasil preferensi berdasarkan nilai_preferensi secara descending
        usort($preferensiResults, function ($a, $b) {
            return $b['nilai_preferensi'] <=> $a['nilai_preferensi'];
        });

        // Tambahkan ranking berdasarkan urutan preferensi
        foreach ($preferensiResults as $index => &$result) {
            $result['ranking'] = $index + 1;
        }

        return $preferensiResults;
    }
}
