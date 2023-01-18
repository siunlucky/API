<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NoteController extends Controller
{
    public function index()
    {
        $guests = Guest::latest()->get();
        return view('.pages.note-galery', [
            'guests' => $guests

        ]);
    }

    public function store(Request $request)
    {
        $guest = Guest::create([
            'name' => $request->name,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'note' => $request->note
        ]);
        if ($guest) {
            //redirect dengan pesan sukses
            return redirect()->route('note-galery')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('note-galery')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
}
