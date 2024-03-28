<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPegawai extends Model
{
    protected $table = "pegawai";
    protected $primaryKey = "id"; // Perbaiki penulisan properti primaryKey
    protected $allowedFields = ['nama', 'email']; // Perbaiki penulisan properti allowedFields
    protected $validationRules = [
            'nama' => 'required',
            'email' => 'required|valid_email'
    ];
    protected $validationMessages = [
            'nama' => [
                        'required' => 'Silahkan masukkan nama'
            ],
            'email' => [
                        'required' => 'Email tidak boleh kosong',
                        'valid_email' => 'format email tidak sesuai!'
            ]
    ];
}
