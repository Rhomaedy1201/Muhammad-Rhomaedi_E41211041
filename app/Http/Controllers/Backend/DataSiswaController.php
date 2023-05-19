<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataSiswaController extends Controller
{
    public function index()
    {
        return view('backend.data_siswa.index');
    }
    public function create()
    {
        $data_siswa = null;
        return view('backend.data_siswa.create', compact('data_siswa'));
    }

    public function update()
    {
        return view('backend.data_siswa.update');
    }
}