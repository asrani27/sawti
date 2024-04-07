<?php

namespace App\Http\Controllers;

use App\Bibit;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BibitController extends Controller
{
    public function index()
    {
        $data = Bibit::all();
        return view('backend.bibit.index', compact('data'));
    }

    public function add()
    {
        $check = Bibit::all();
        if (count($check) == 0) {
            $kode = '0001';
        } else {
            $number = count($check) + 1;
            if (strlen($number) == 1) {
                $kode = '000' . $number;
            } elseif (strlen($number) == 2) {
                $kode = '00' . $number;
            } elseif (strlen($number) == 3) {
                $kode = '0' . $number;
            } elseif (strlen($number) == 4) {
                $kode = $number;
            }
        }
        return view('backend.bibit.add', compact('kode'));
    }

    public function save(Request $req)
    {
        $s = new Bibit;
        $s->kode = $req->kode;
        $s->jenis = $req->jenis;
        $s->umur = $req->umur;
        $s->harga_beli = str_replace('.', '', $req->harga_beli);
        $s->harga_jual = str_replace('.', '', $req->harga_jual);
        $s->stok = $req->stok;
        $s->save();
        Alert::success('Data Berhasil Di Simpan', 'Info Message');
        return redirect('/bibit');
    }

    public function edit($id)
    {
        $data = Bibit::find($id);
        return view('backend.bibit.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        $s = Bibit::find($id);
        $s->jenis = $req->jenis;
        $s->umur = $req->umur;
        $s->harga_beli = str_replace('.', '', $req->harga_beli);
        $s->harga_jual = str_replace('.', '', $req->harga_jual);
        $s->stok = $req->stok;
        $s->save();
        Alert::success('Data Berhasil Di Update', 'Info Message');
        return redirect('/bibit');
    }

    public function delete($id)
    {
        try {
            Bibit::find($id)->delete();
            Alert::success('Data Berhasil Di Hapus', 'Info Message');
            return back();
        } catch (\Throwable $th) {

            Alert::error('Tidak dapat di hapus karena terikat dengan data lain', 'Info Message');
            return back();
        }
    }
}
