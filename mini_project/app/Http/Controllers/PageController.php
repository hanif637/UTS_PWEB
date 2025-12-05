<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function doLogin(Request $request)
    {
        // Ambil username dari input
        $username = $request->username;

        // Redirect ke dashboard dengan query ?username=
        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->username;
        return view('dashboard', compact('username'));
    }

    public function profile(Request $request)
    {
        $username = $request->username;
        return view('profile', compact('username'));
    }

    public function pengelolaan()
    {
        // DATA LIST WAJIB DARI CONTROLLER!!!
        $items = [
            ['nama' => 'Produk A', 'harga' => 10000],
            ['nama' => 'Produk B', 'harga' => 15000],
            ['nama' => 'Produk C', 'harga' => 20000],
        ];

        return view('pengelolaan', compact('items'));
    }
}
