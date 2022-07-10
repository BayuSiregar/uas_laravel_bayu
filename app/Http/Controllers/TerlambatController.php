<?php

namespace App\Http\Controllers;

use App\Models\Terlambat;
use Illuminate\Http\Request;
use DB;
use PDF;
class TerlambatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::select("SELECT tbl_terlambat.id_terlambat, tbl_terlambat.tgl_terlambat, tbl_terlambat.tgl_masuk,tbl_terlambat.jam_terlambat, tbl_terlambat.jam_masuk, tbl_terlambat.hukuman, tbl_terlambat.alasan, tbl_siswa.nama_siswa, tbl_piket.nama_guru FROM tbl_terlambat JOIN tbl_siswa ON tbl_siswa.nama_siswa = tbl_siswa.nama_siswa JOIN tbl_piket ON tbl_piket.nama_guru = tbl_piket.nama_guru");
        return view('terlambat.index', compact(['data']));
        
    }
    public function cetak()
    {
        $data = DB::select("SELECT tbl_terlambat.id_terlambat, tbl_terlambat.tgl_terlambat, tbl_terlambat.tgl_masuk,tbl_terlambat.jam_terlambat, tbl_terlambat.jam_masuk, tbl_terlambat.hukuman, tbl_terlambat.alasan, tbl_siswa.nama_siswa, tbl_piket.nama_guru FROM tbl_terlambat JOIN tbl_siswa ON tbl_siswa.nama_siswa = tbl_siswa.nama_siswa JOIN tbl_piket ON tbl_piket.nama_guru = tbl_piket.nama_guru");
        return view('terlambat.cetak', compact(['data']));
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswa = DB::select("SELECT id_siswa, nama_siswa FROM tbl_siswa ORDER BY nama_siswa ASC");
        $guru  = DB::select("SELECT id_piket, nama_guru FROM tbl_piket ORDER BY nama_guru ASC");
        return view('terlambat.create', compact(['siswa', 'guru']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Terlambat::create($request->except(['_token']));
        return redirect('/terlambat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_terlambat)
    {
        $siswa          = DB::select("SELECT id_siswa, nama_siswa FROM tbl_siswa ORDER BY nama_siswa ASC");
        $guru           = DB::select("SELECT id_piket, nama_guru FROM tbl_piket ORDER BY nama_guru ASC");
        $terlambat      = Terlambat::find($id_terlambat);
        return view('terlambat.edit', compact(['siswa', 'guru', 'terlambat']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_terlambat)
    {
        $terlambat = Terlambat::find($id_terlambat);
        $terlambat->update($request->except(['_token']));
        return redirect(('/terlambat'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_terlambat)
    {
        $terlambat = Terlambat::find($id_terlambat);
        $terlambat->delete();
        return redirect(('/terlambat'));
    }
}
