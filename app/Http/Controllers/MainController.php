<?php

namespace App\Http\Controllers;

use App\Models\Main;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MainController extends Controller
{
    public function index(Request $request)
    {
        $nama = $request->query('yth');
        $main = Main::all();
        // return "Search keyword: " . $nama;
        return view('welcome', compact('main', 'nama'));
    }

    public function store(Request $request)
    {
        // validation
        // dd($request);

        $request->validate([
            'nama' => 'required',
            'kehadiran' => 'required',
            'ucapan' => 'required'
        ]);

        Main::create([
            'nama' => $request->nama,
            'kehadiran' => $request->kehadiran,
            'ucapan' => $request->ucapan,
        ]);
        // return redirect('/welcome')->with(['success' => 'Data Berhasil Disimpan!']);
        return response()->json([
            'success' => true,
            'message' => 'Terimakasih Atas Ucapan dan Doa yang anda berikan'
        ]);
    }
}
