<?php

namespace App\Http\Controllers\Admin;

use App\DepartemenModel;
use App\DosenModel;
use App\VDosenModel;
use App\VPaperKontributorModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosen = VDosenModel::all();
        $i = 0;
        return view('admin.dosen.index',compact('dosen', 'i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departemen = $this->getDepartemen();
        return view('admin.dosen.create', compact('departemen'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'password_dosen' => 'required',
            'nama_depan_dosen' => 'required',
            'nama_belakang_dosen' => 'required',
            'degre_dosen' => 'required',
            'homepage_url_dosen' => 'required',
            'no_telp_dosen' => 'required',
            'email_dosen' => 'required',
            'id_departemen' => 'required',
        ]);
        DosenModel::create($request->all());
        return redirect()->route('admin.dosen.index')
            ->with('success','Dosen created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_dosen)
    {
        $i=0;
        $dosen = VDosenModel::find($id_dosen);
        $kontributor = $this->getPaperFromKontributor($id_dosen);
        return view('admin.dosen.show',compact('dosen', 'kontributor', 'i'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_dosen)
    {
        $dosen =  DosenModel::find($id_dosen);
        return view('admin.dosen.edit', compact('dosen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_dosen)
    {
        $request->validate([
            'password_dosen' => 'required',
            'nama_depan_dosen' => 'required',
            'nama_belakang_dosen' => 'required',
            'degre_dosen' => 'required',
            'homepage_url_dosen' => 'required',
            'no_telp_dosen' => 'required',
            'email_dosen' => 'required',
            'id_departemen' => 'required',
        ]);
        DosenModel::find($id_dosen)->update($request->all());
        return redirect()->route('admin.dosen.index')
            ->with('success','Dosen updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_dosen)
    {
        DosenModel::find($id_dosen)->delete();
        return redirect()->route('admin.dosen.index')
            ->with('success','Dosen deleted successfully');
    }

    public function getDepartemen()
    {
        return DepartemenModel::all();
    }

    public function getPaperFromKontributor($id_dosen)
    {
        return VPaperKontributorModel::where('id_dosen', $id_dosen)->get();
    }
}
