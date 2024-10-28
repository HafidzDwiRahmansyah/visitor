<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;

class VisitorController extends Controller
{
    public function index()
    {
        $data = Visitor::where('kondisi', 'in')->get();
        return view('visitor', compact('data'));
    }

    public function store(Request $request)
    {
        $visitor = new Visitor();

        // dd($request);

        $visitor->nik = $request->nik;
        $visitor->name = $request->nama;
        $visitor->alamat = $request->alamat;
        $visitor->name_pt = $request->name_pt;
        $visitor->pic = $request->pic;
        $visitor->tujuan = $request->tujuan;
        $visitor->no_kartu = $request->no_kartu;
        $visitor->kondisi = 'in';

        $visitor->save();

        return redirect('/')->with('success', 'Berhasil masuk !');
    }

    public function out(Request $request, $id)
    {
        $visitor = Visitor::find($id); 
        $visitor->kondisi = 'out';    
        $visitor->save();
        return redirect('/')->with('success', 'Berhasil keluar');
    }
}
