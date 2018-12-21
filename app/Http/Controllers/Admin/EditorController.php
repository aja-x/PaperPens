<?php

namespace App\Http\Controllers\Admin;

use App\EditorModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $editor = EditorModel::all();
        $i=0;
        return view('admin.editor.index',compact('editor', 'i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.editor.create');
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
            'nama_editor' => 'required',
            'email_editor' => 'required',
            'password_editor' => 'required',
        ]);
        EditorModel::create($request->all());
        return redirect()->route('admin.editor.index')
            ->with('success','Editor created successfully.');
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
    public function edit($id_editor)
    {
        $editor =  EditorModel::find($id_editor);
        return view('admin.editor.edit', compact('editor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_editor)
    {
        $request->validate([
            'nama_editor' => 'required',
            'email_editor' => 'required',
            'password_editor' => 'required',
        ]);
        EditorModel::find($id_editor)->update($request->all());
        return redirect()->route('admin.editor.index')
            ->with('success','Editor updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_editor)
    {
        EditorModel::find($id_editor)->delete();
        return redirect()->route('admin.editor.index')
            ->with('success','Editor deleted successfully');
    }
}
