<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Models\ModelPegawai;
use CodeIgniter\HTTP\RequestTrait;

class Pegawai extends BaseController
{
    use RequestTrait;
    use ResponseTrait; // Ubah Codeigniter menjadi CodeIgniter

    protected $model;

    function __construct()
    {
        $this->model = new ModelPegawai();
    }

    public function index()
    {
        // Implementasi yang sesuai untuk index()
    }

    public function create()
    {
        try {
            // Validasi data sebelum menyimpan
            $nama = $this->request->getVar('nama');
            $email = $this->request->getVar('email');

            if (empty($nama) || empty($email)) {
                throw new \Exception('Nama dan email harus diisi');
            }

            // Menyiapkan data untuk disimpan
            $data = [
                'nama' => $nama,
                'email' => $email
            ];

            // Menyimpan data ke dalam database
            $saved = $this->model->save($data);
            
            // Pengecekan apakah data berhasil disimpan
            if (!$saved) {
                throw new \Exception('Gagal menyimpan data pegawai');
            }

            $response = [
                'status' => 201,
                'error'  => null,
                'messages'=> [
                    'success' => 'Berhasil memasukkan data pegawai'
                ]
            ];
            return $this->respond($response);
        } catch (\Exception $e) {
            // Tangani jika terjadi kesalahan
            $response = [
                'status' => 500,
                'error'  => $e->getMessage(),
                'messages'=> [
                    'error' => 'Gagal memasukkan data pegawai'
                ]
            ];
            return $this->respond($response, 500);
        }
    }
}
