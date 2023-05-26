<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function home()
    {
        $data = [
            'pageTitle' => 'Beranda',
            'activeLinke' => 'beranda',
            'productGet' => Produk::get(),
        ];

        return view('user.home', $data);
    }
}
