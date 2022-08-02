<?php

namespace App\Models;

use CodeIgniter\Model;

class M_artikel extends Model
{
    protected $table = "artikel";
    protected $primaryKey           = 'id';
    protected $allowedFields        = ['judul','isi','slug','gambar'];
   
    public function getArtikel($slug = false){
        if ($slug == false){
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}
