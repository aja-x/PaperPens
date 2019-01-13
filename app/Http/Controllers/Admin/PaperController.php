<?php

namespace App\Http\Controllers\Admin;

use App\PaperModel;
use App\VPaperKeywordModel;
use App\VPaperTopicModel;
use App\VPaperKontributorModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paper = PaperModel::all();
        $i=0;
        return view('admin.paper.index',compact('paper', 'i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_paper)
    {
        $i=0;
        $paper = PaperModel::find($id_paper);
        $topic = $this->getPaperTopic($id_paper);
        $keyword = $this->getPaperKeyword($id_paper);
        $kontributor = $this->getPaperKontributor($id_paper);
        return view('admin.paper.show',compact('paper', 'topic', 'keyword', 'kontributor', 'i'));
    }

    public function getPaperKeyword($id_paper)
    {
        return VPaperKeywordModel::where('id_paper', $id_paper)->get();
    }

    public function getPaperTopic($id_paper)
    {
        return VPaperTopicModel::where('id_paper', $id_paper)->get();
    }

    public function getPaperKontributor($id_paper)
    {
        return VPaperKontributorModel::where('id_paper', $id_paper)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
