<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calonsiswa;

class CalonsiswaController extends Controller
{
    public function index()
    {
        $csb = Calonsiswa::all();
        return view('indexcalonsiswa', ['calonsiswa' => $csb]);
    }

    public function create()
    {
        return view('form-pendaftaran');
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'noppdb' => 'required|size:10',
            'nama' => 'required|min:3|max:60',
            'asal_sekolah' => 'required',
            'pilihan1' => 'required',
            'pilihan2' => 'required',
            'alamat' => 'required',
            'nohp' => ''
        ]);
        // dump($validateData);
        $calonsiswa = new Calonsiswa();
        $calonsiswa->noppdb = $validateData['noppdb'];
        $calonsiswa->nama = $validateData['nama'];
        $calonsiswa->asal_sekolah = $validateData['asal_sekolah'];
        $calonsiswa->pilihan1 = $validateData['pilihan1'];
        $calonsiswa->pilihan2 = $validateData['pilihan2'];
        $calonsiswa->alamat = $validateData['alamat'];
        $calonsiswa->nohp = $validateData['nohp'];
        $calonsiswa->save();

        // return "Data Berhasil Disimpan";
        $request->session()->flash('pesan', "Data Telah Berhasil Di Tambahkan, Data {$validateData['nama']}");
        return redirect()->route('calonsiswa.indexcalonsiswa');
    }

    public function show($calonsiswa)
    {
        // dd($calonsiswa);
        $result = Calonsiswa::find($calonsiswa);
        return view('detail_siswa', ['calonsiswa' => $result]);
    }

    public function delete(Calonsiswa $calonsiswa)
    {
        $calonsiswa->delete();
        return redirect()->route('calonsiswa.indexcalonsiswa')->with('pesan', "Hapus Data $calonsiswa->nama berhasil");
    }
    public function viewform(Calonsiswa $calonsiswa)
    {
        // dd($calonsiswa);
        return view('form-edit', ['calonsiswa' => $calonsiswa]);
    }
    public function prosesEdit(Request $request, Calonsiswa $calonsiswa)
    {
        $validateData = $request->validate([
            'noppdb' => 'required|size:10',
            'nama' => 'required|min:3|max:60',
            'asal_sekolah' => 'required',
            'pilihan1' => 'required',
            'pilihan2' => 'required',
            'alamat' => 'required',
            'nohp' => ''
        ]);

        Calonsiswa::where('id', $calonsiswa->id)->update($validateData);
        return redirect()->route('calonsiswa.indexcalonsiswa')->with('pesan', "Data Berhasil Diubah {$validateData['nama']}");
    }
}
