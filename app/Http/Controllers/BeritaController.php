<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    // Other methods...

    public function showPublic($id)
    {
        $berita = Berita::findOrFail($id);
        return view('berita.show', compact('berita'));
    }

    public function indexPublic()
    {
        $beritas = Berita::latest()->paginate(10);
        return view('moreberita', compact('beritas'));
    }
} 