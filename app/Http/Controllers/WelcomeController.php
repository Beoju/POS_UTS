<?php

namespace App\Http\Controllers;
use App\Models\BarangModel;

class WelcomeController extends Controller
{
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Selamat Datang',
            'list' => ['Home', 'Welcome']
        ];

        $activeMenu = 'dashboard';
        $barang = BarangModel::with('kategori')->get();

        return view('welcome', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu, 'barang' => $barang]);
    }
}
