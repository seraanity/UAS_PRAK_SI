<?php

namespace App\Models;

use CodeIgniter\Model;

class AlternatifModel extends Model
{
    protected $table = 'data_konversi';
    protected $primaryKey = 'id_konversi';
    protected $allowedFields = ['kode_siswa', 'nama_siswa', 'nama_kriteria', 'nilai'];

    // Get all restoran data or specific restoran by ID
    public function getAlternatif($id = null)
    {
        if ($id === null) {
            return $this->findAll();
        }
        return $this->find($id);
    }
}
