<?php

namespace App\Http\Controllers;
use App\Models\Friends;
use Illuminate\Http\Request;

Class CobaController extends Controller
{

    public function index()
    {
        $friends = Friends::paginate(3);

        return view('index', compact('friends'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // Validate the request...

        $friends = new Friends;

        $friends->nama = $request->nama;
        $friends->no_telp = $request->no_telp;
        $friends->alamat = $request->alamat;

        $friends->save();
    }
}
