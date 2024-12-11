<?php

namespace App\Models;

use CodeIgniter\Model;

class BobotModel extends Model
{
    protected $table = 'data_bobot';
    protected $primaryKey = 'id_bobot';
    protected $allowedFields = ['id_kriteria', 'kode', 'nilai'];

    // Get all restoran data or specific restoran by ID
    public function getBobot($id = null)
    {
        if ($id === null) {
            return $this->findAll();
        }
        return $this->find($id);
    }
}
