<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\DataTiket;
use Illuminate\Http\Request;

class DataTiketController extends Controller
{
    public function index()
    {
        $data_tiket = DataTiket::get();
        return view('backend.data_tiket.index', compact('data_tiket'));
    }
    public function create()
    {
        $data_tiket = null;
        return view('backend.data_tiket.create', compact('data_tiket'));
    }

    public function store(Request $request)
    {
        DataTiket::create($request->all());
        return redirect()->route('data_tiket.index')->with('success', 'Data data_tiket baru berhasil disimpan');
    }

    public function edit(DataTiket $data_tiket)
    {
        return view('backend.data_tiket.create', compact('data_tiket'));
    }

    public function update(Request $request, DataTiket $data_tiket)
    {
        $data_tiket->update($request->all());
        return redirect()->route('data_tiket.index')->with('success', 'data_tiket berhasil diperbarui');
    }

    public function destroy(DataTiket $data_tiket)
    {
        $data_tiket->delete();
        return redirect()->route('data_tiket.index')->with('success', 'Data data_tiket berhasil dihapus');
    }
}