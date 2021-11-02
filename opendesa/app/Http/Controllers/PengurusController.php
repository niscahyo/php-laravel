<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;
use Illuminate\Http\Request;

class PengurusController extends Controller
{
    
    public function index()
    {
        $pengurus = Pengurus::latest()->paginate(5);
        return view('pengurus.index', compact('pengurus'))
        ->with('i', (request()->input('page', 1)-1)*(5));
    }

    
    public function create()
    {
         return view('pengurus.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required'
        ]);
        $input = $request->all();
        Pengurus::create($input);

        return back()->with('message', 'Sukses');
    }

    public function show(pengurus $id)
    {
        return view('pengurus.show');
    }

    public function edit(pengurus $id)
    {
        return view('pengurus.edit');
    }

    public function update(Request $request, pengurus $id)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'ttd' => 'required'
        ]);

       // $Pengurus->update($request->all());

        return redirect()->route('pengurus.index')
        ->with('success', 'Pengurus berhasil diupdate');
    }

    public function destroy($id)
    {
        $pengurus->delete();

        return redirect()->route('pengurus.index')
        ->with('success', 'Pengurus berhasil didelete');
    }
}