<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $db = db_connect();
        $data['file'] = $db->table('tb_foto')->get()->getResult();
        return view('welcome_message', $data);
    }

    public function save ()
    {
        $db = db_connect();
        $file = $this->request->getFile('file');
        $filename = $file->getRandomName();

        if($file == ""){
            $data = [
                'nobp' => $this->request->getPost('nobp'),
                'nama' => $this->request->getPost('nama'),
                'jurusan' => $this->request->getPost('jurusan'),
                'semester' => $this->request->getPost('semester'),
            ];  
        }else{
            $data = [
                'nobp' => $this->request->getPost('nobp'),
                'nama' => $this->request->getPost('nama'),
                'jurusan' => $this->request->getPost('jurusan'),
                'semester' => $this->request->getPost('semester'),
                'file' => $filename
            ];  
            $file->move('file/', $filename);
        }

        $simpan = $db->table('tb_foto')->insert($data);

        if($simpan == true){
            echo "<script>
                alert('Data Berhasil Disimpan');
                window.location='/';
            </script>";
        }else{
            echo "<script>
            alert('Data Gagal Disimpan');
            window.location='/';
        </script>";
        }
    }
}
