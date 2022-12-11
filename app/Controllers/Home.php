<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('navbar');
        echo view('beranda');
        echo view('footer');
    }

    public function menu()
    {
        echo view('navbar');
        echo view('menu');
        echo view('footer');
    }

    public function dokumentasi()
    {
        echo view('navbar');
        echo view('dokumentasi');
        echo view('footer');
    }

    public function tentang()
    {
        echo view('navbar');
        echo view('tentang');
        echo view('footer');
    }
    public function kontak()
    {
        echo view('navbar');
        echo view('kontak');
        echo view('footer');
    }
}
