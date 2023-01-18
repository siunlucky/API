<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $guests = Guest::latest()->get();
        return view('.admin.dashboard', [
            'guests' => $guests
        ]);
    }

    public function destroy(Guest $guest)
    {
        $guest = Guest::findOrFail($guest->id);
        $guest->delete();
        if ($guest) {
            //redirect dengan pesan sukses
            return redirect()->route('dashboard')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('dashboard')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
