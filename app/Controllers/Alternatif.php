<?php

namespace App\Controllers;

use App\Models\AlternatifModel;
use App\Models\Model_Siswa;

class Alternatif extends BaseController
{
    protected $alternatifModel;
    protected $ModelSiswa;

    public function __construct()
    {
        $this->alternatifModel = new AlternatifModel();
        $this->ModelSiswa = new Model_Siswa();
    }

    // Display all kriteria data
    public function index()
    {
        $data['alternatifs'] = $this->alternatifModel->getAlternatif();
        echo view('Admin_header');
        echo view('Admin_nav');
        echo view('data_alternatif', $data);
        echo view('Admin_footer');
    }

    // Show create form
    public function create()
    {
        $ModelSiswa = new \App\Models\Model_Siswa();
        $data['siswas'] = $ModelSiswa->findAll();
        echo view('Admin_header');
        echo view('Admin_nav');
        echo view('create_alternatif', $data);
        echo view('Admin_footer');
    }

    // Store new kriteria data
    public function store()
{
    $id_siswa = $this->request->getPost('id_siswa');
    $nama_siswa = $this->request->getPost('nama_siswa');
    $C1 = $this->request->getPost('C1');
    $C2 = $this->request->getPost('C2');
    $C3 = $this->request->getPost('C3');
    $C4 = $this->request->getPost('C4');
    
    // Validasi apakah id_kriteria ada di tabel data_kriteria
    $ModelSiswa = new \App\Models\Model_Siswa();
    $siswa = $ModelSiswa->find($id_siswa);

    if (!$siswa) {
        return redirect()->back()->with('error', 'ID Siswa tidak valid!');
    }

    // Simpan data ke tabel data_bobot
    $alternatifModel = new \App\Models\AlternatifModel();
    $alternatifModel->save([
        'id_siswa' => $id_siswa,
        'nama_siswa' => $nama_siswa,
        'C1' => $C1,
        'C2' => $C2,
        'C3' => $C3,
        'C4' => $C4,
    ]);

    return redirect()->to('/alternatif');
}


    // Show edit form
    public function edit($id)
    {
        $alternatifModel = new \App\Models\AlternatifModel();
        $ModelSiswa= new \App\Models\Model_Siswa();
    
        // Data bobot yang akan diedit
        $data['alternatif'] = $alternatifModel->find($id);
    
        // Semua data kriteria untuk dropdown
        $data['siswas'] = $ModelSiswa->findAll();
        echo view('Admin_header');
        echo view('Admin_nav');
        echo view('edit_alternatif', $data);
        echo view('Admin_footer');
    }

    // Update kriteria data
    public function update($id)
    {
        $this->alternatifModel->update($id, [
            'id_siswa' => $this->request->getPost('id_siswa'),
            'nama_siswa' => $this->request->getPost('nama_siswa'),
            'C1' => $this->request->getPost('C1'),
            'C2' => $this->request->getPost('C2'),
            'C3' => $this->request->getPost('C3'),
            'C4' => $this->request->getPost('C4'),
        ]);

        return redirect()->to('/alternatif');
    }

    // Delete kriteria data
    public function delete($id)
    {
        $this->alternatifModel->delete($id);
        return redirect()->to('/alternatif');
    }
}
