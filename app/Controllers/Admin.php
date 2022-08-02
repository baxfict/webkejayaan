<?php

namespace App\Controllers;
use App\Models\M_artikel;
use CodeIgniter\HTTP\Request;

class Admin extends BaseController
{   
    public function __construct()
    {
        $this->M_Artikel = new M_artikel();
    }
    public function index()
    {   
        $data =[
            'artikel' => $this->M_Artikel->findAll()

        ];
        return view("Admin/dassboard",$data);
    }

    public function tambah(){
        return view("Admin/tambah_artikel");
    }

    public function edit($id){ //form tambah
        $artikel=$this->M_Artikel->find($id);
        $data = [
            'title' => 'Detail',
            'artikel' => $artikel
        ];
        return view('Admin/edit_artikel', $data);
       
    }

    public function update($id){
        $file = $this->request->getFile('gambar');
        $namaGambar = $file->getName();
        $file->move('assets/images');
        $slug = url_title($this->request->getVar('slug'),'-',true);
        $this->M_Artikel->save([
            'id' => $id,
            'judul'=> $this->request->getVar('judul'),
            'slug'=> $slug,
            'isi'=> $this->request->getVar('isi'),
            'gambar'=> $namaGambar
        ]);
        return redirect()->to('admin');
    }

    public function save(){

        $file = $this->request->getFile('gambar');
        $namaGambar = $file->getName();
        $file->move('assets/images');
        
        $slug = url_title($this->request->getVar('judul'),'-',true);
        $this->M_Artikel->save([
            'judul'=> $this->request->getVar('judul'),
            'isi'=> $this->request->getVar('isi'),
            'slug'=> $slug,
            'gambar'=> $namaGambar
        ]);
        return redirect()->to('admin');

    }

    public function delete($id){
        $this->M_Artikel->delete($id);
        return redirect()->to('admin');
    }
}
