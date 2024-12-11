<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Siswa extends Model
{
    protected $table = 'data_siswa';
    protected $primaryKey = 'id_siswa';
    protected $allowedFields = ['kode_siswa', 'nama_siswa'];

    // Get all restoran data or specific restoran by ID
    public function getSiswa($id = null)
    {
        if ($id === null) {
            return $this->findAll();
        }
        return $this->find($id);
    }
}
