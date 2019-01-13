<?php

namespace App\Http\Controllers;

use App\PaperModel;
use App\VPaperKeywordModel;
use App\VPaperTopicModel;
use App\VPaperKontributorModel;
use Illuminate\Http\Request;

class PaperController extends Controller
{
    public function index()
    {
        $paper = PaperModel::all();
        $i=0;
        return view('paper.index',compact('paper', 'i'));
    }

    /**
     * Menampilkan form tambah paper
     * Return to view -> paper.create
     **/
    public function create()
    {
        return view('paper.create');
    }

    /**
     * Memasukkan hasil post dari form tambah paper ke database
     * return to view -> paper.index
     **/
    public function store(Request $request)
    {
        $request->validate([
            'nama_paper' => 'required'
        ]);
        PaperModel::create($request->all());
        return redirect()->route('paper.index')->with('success','Paper created successfully.');
    }

    /**
     * Menampilkan data paper secara spesifik
     * Return to view -> paper.index
     **/
    public function show($id_paper)
    {
        $paper = PaperModel::find($id_paper);
        $topic = $this->getPaperTopic($id_paper);
        $keyword = $this->getPaperKeyword($id_paper);
        $kontributor = $this->getPaperKontributor($id_paper);
        return view('paper.show',compact('paper', 'topic', 'keyword', 'kontributor'));
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
     * Menampilkan form edit paper
     * Return to view -> paper.edit
     **/
    public function edit($id_paper)
    {
        $paper =  PaperModel::find($id_paper);
        return view('paper.edit', compact('paper'));
    }

    /**
     * Memasukkan hasil post dari form edit paper ke database
     * Return to view -> paper.index
     **/
    public function update(Request $request, $id_paper)
    {
        $request->validate([
            'nama_paper' => 'required'
        ]);
        PaperModel::find($id_paper)->update($request->all());

        return redirect()->route('paper.index')
            ->with('success','Paper updated successfully');
    }

    /**
     * Menghapus data paper
     * Return to view -> paper.index
     **/
    public function destroy($id_paper)
    {
        PaperModel::find($id_paper)->delete();
        return redirect()->route('paper.index')
            ->with('success','Paper deleted successfully');
    }
}
