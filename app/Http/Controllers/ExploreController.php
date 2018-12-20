<?php

namespace App\Http\Controllers;
use App\VPaperTopicModel;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ExploreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function PaperByTopic($id_topic)
    {
      $topic = $this->getPaperTopic($id_topic);
      return view('explore.topic',compact('topic'));
    }
    public function getPaperTopic($id_topic)
    {
        return VPaperTopicModel::where('id_topic', $id_topic)->get();
    }

    public function PaperByYear($year){
      $tahun = $this->getPaperYear($year);
      return view('explore.year',compact('tahun'));
    }
    public function getPaperYear($year)
    {
        return VPaperTopicModel::whereYear('tgl_publikasi_paper',$year)->get();
    }
}
