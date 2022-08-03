<?php

namespace App\Controllers;
use App\Models\M_artikel;

class Home extends BaseController
{
    public function __construct()
    {
        $this->M_Artikel = new M_artikel();
    }
    public function index()
    {   
        $artikel = $this->M_Artikel->findAll();
        
        $data=[
            'artikel' => $artikel
        ];
        return view('home',$data);
    }

    public function profil()
    {
        return view('profil');
    }
    public function berita()
    {   
        $artikel = $this->M_Artikel->findAll();
        
        $data=[
            'artikel' => $artikel
        ];
        return view('berita',$data);
    }
    public function detailBerita($slug){
       
       
       $data = [
           'artikel' => $this->M_Artikel->getArtikel($slug)
       ]; 
       return view('detailBerita',$data);
    }
}