<?php

namespace App\Models;

use CodeIgniter\Model;

class KriteriaModel extends Model
{
    protected $table = 'data_kriteria';
    protected $primaryKey = 'id_kriteria';
    protected $allowedFields = ['kode', 'nama_kriteria', 'keterangan'];

    // Get all kriteria data or specific kriteria by ID
    public function getKriteria($id = null)
    {
        if ($id === null) {
            return $this->findAll();
        }
        return $this->find($id);
    }
}
