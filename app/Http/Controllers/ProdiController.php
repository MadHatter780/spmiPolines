<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $jurusan = Jurusan::join('prodi','prodi.jurusan_id','jurusan.id')
        ->get();
        return view('prodi.index',compact('jurusan'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data["jurusan_id"] = (int)$request->jurusan_id;
        if($request->hasFile('file_akred')){
            $photoName = $request->file('file_akred')->getClientOriginalName();
            $request->file('file_akred')->move('photo/', $photoName);
            $jurus = new Prodi;
            $jurus->fill($data);
            $jurus->file_akred = $photoName;
            $jurus->save();
            return back();
        }
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Prodi::where("jurusan_id",$id)->get();
        $jurusan = Jurusan::get();
        $jurusanNama = Jurusan::where("id",$id)->first();
        return view("prodi.index",compact("data","jurusan","jurusanNama"));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
