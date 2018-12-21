<?php

namespace App\Http\Controllers\Admin;

use App\DepartemenModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartemenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departemen = DepartemenModel::all();
        $i = 0;
        return view('admin.departemen.index',compact('departemen', 'i'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.departemen.create');
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
            'nama_departemen' => 'required',
        ]);
        DepartemenModel::create($request->all());
        return redirect()->route('admin.departemen.index')
            ->with('success','Departemen created successfully.');
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
    public function edit($id_departemen)
    {
        $departemen =  DepartemenModel::find($id_departemen);
        return view('admin.departemen.edit', compact('departemen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_departemen)
    {
        $request->validate([
            'nama_departemen' => 'required',
        ]);
        DepartemenModel::find($id_departemen)->update($request->all());
        return redirect()->route('admin.departemen.index')
            ->with('success','Departemen updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_departemen)
    {
        DepartemenModel::find($id_departemen)->delete();
        return redirect()->route('admin.departemen.index')
            ->with('success','Departemen deleted successfully');

    }
}
