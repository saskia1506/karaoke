<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        return view('pages.admin'); // atau ganti dengan view yang sesuai
    }
}
