<?php

namespace App\Controllers;

use App\Models\Model_Siswa;

class Siswa extends BaseController
{
    protected $ModelSiswa;

    public function __construct()
    {
        $this->ModelSiswa = new Model_Siswa();
    }

    // Display all restoran data
    public function index()
    {
        $data['siswas'] = $this->ModelSiswa->getSiswa();
        echo view('Admin_header');
        echo view('Admin_nav');
        echo view('data_siswa', $data); // Sesuaikan jalur view
        echo view('Admin_footer');
    }

    // Show create form
    public function create()
    {
        echo view('Admin_header');
        echo view('Admin_nav');
        echo view('create_siswa'); // Sesuaikan jalur view
        echo view('Admin_footer');
    }

    // Store new restoran data
    public function store()
    {
        $this->ModelSiswa->save([
            'kode_siswa' => $this->request->getPost('kode_siswa'),
            'nama_siswa' => $this->request->getPost('nama_siswa'),
        ]);

        return redirect()->to('/siswa');
    }

    // Show edit form
    public function edit($id)
    {
        $data['siswa'] = $this->ModelSiswa->getSiswa($id);
        echo view('Admin_header');
        echo view('Admin_nav');
        echo view('edit_siswa', $data); // Sesuaikan jalur view
        echo view('Admin_footer');
    }

    // Update restoran data
    public function update($id)
    {
        $this->ModelSiswa->update($id, [
            'kode_siswa' => $this->request->getPost('kode_siswa'),
            'nama_siswa' => $this->request->getPost('nama_siswa')
        ]);

        return redirect()->to('/siswa');
    }

    // Delete restoran data
    public function delete($id)
    {
        $this->ModelSiswa->delete($id);
        return redirect()->to('/siswa');
    }
}
