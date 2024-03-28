<?php

namespace App\Model;
use CodeIgniter\Model;

class ModelPegawai extends Model
{
            protected $table = "pegawai";
            protected $primarykey = "id";
            protected $allowedfield = ['nama', 'email'];
}