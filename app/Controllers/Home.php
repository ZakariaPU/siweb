<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('admin/overview');
    }

    // public function about($nama = null)
    // {
    //     echo "Hi, nama saya adalah $nama";
    // }

    public function about($nama = null, $umur = 0)
    {
        echo "Hi, nama saya adalah $nama. Usia saya $umur tahun.";
    }
}
