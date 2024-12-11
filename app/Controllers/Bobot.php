<?php

namespace App\Controllers;

use App\Models\BobotModel;
use App\Models\KriteriaModel;

class Bobot extends BaseController
{
    protected $bobotModel;
    protected $kriteriaModel;

    public function __construct()
    {
        $this->bobotModel = new BobotModel();
        $this->kriteriaModel = new KriteriaModel();
    }

    // Display all kriteria data
    public function index()
    {
        $data['bobots'] = $this->bobotModel->getBobot();
        echo view('Admin_header');
        echo view('Admin_nav');
        echo view('data_bobot', $data);
        echo view('Admin_footer');
    }

    // Show create form
    public function create()
    {
        $kriteriaModel = new \App\Models\KriteriaModel();
        $data['kriterias'] = $kriteriaModel->findAll();
        echo view('Admin_header');
        echo view('Admin_nav');
        echo view('create_bobot', $data);
        echo view('Admin_footer');
    }

    // Store new kriteria data
    public function store()
{
    $id_kriteria = $this->request->getPost('id_kriteria');
    $kode_kriteria = $this->request->getPost('kode');
    $nilai = $this->request->getPost('nilai');

    // Validasi apakah id_kriteria ada di tabel data_kriteria
    $kriteriaModel = new \App\Models\KriteriaModel();
    $kriteria = $kriteriaModel->find($id_kriteria);

    if (!$kriteria) {
        return redirect()->back()->with('error', 'ID Kriteria tidak valid!');
    }

    // Simpan data ke tabel data_bobot
    $bobotModel = new \App\Models\BobotModel();
    $bobotModel->save([
        'id_kriteria' => $id_kriteria,
        'kode' => $kode_kriteria,
        'nilai' => $nilai,
    ]);

    return redirect()->to('/bobot');
}


    // Show edit form
    public function edit($id)
    {
        $bobotModel = new \App\Models\BobotModel();
        $kriteriaModel = new \App\Models\KriteriaModel();
    
        // Data bobot yang akan diedit
        $data['nilai'] = $bobotModel->find($id);
    
        // Semua data kriteria untuk dropdown
        $data['kriterias'] = $kriteriaModel->findAll();
        echo view('Admin_header');
        echo view('Admin_nav');
        echo view('edit_bobot', $data);
        echo view('Admin_footer');
    }

    // Update kriteria data
    public function update($id)
    {
        $this->bobotModel->update($id, [
            'id_kriteria' => $this->request->getPost('id_kriteria'),
            'kode' => $this->request->getPost('kode'),
            'nilai' => $this->request->getPost('nilai')
        ]);

        return redirect()->to('/bobot');
    }

    // Delete kriteria data
    public function delete($id)
    {
        $this->bobotModel->delete($id);
        return redirect()->to('/bobot');
    }
}
