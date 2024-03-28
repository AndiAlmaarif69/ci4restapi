<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPegawai extends Model
{
    protected $table = "pegawai";
    protected $primaryKey = "id"; // Perbaiki penulisan properti primaryKey
    protected $allowedFields = ['nama', 'email']; // Perbaiki penulisan properti allowedFields
}
