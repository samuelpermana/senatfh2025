<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::all();
        return view('cms.berita.index', compact('beritas'));
    }

    public function create()
    {
        return view('cms.berita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120', // 5MB limit
        ]);

        $data = $request->all();

        if ($request->hasFile('picture')) {
            $data['picture'] = $request->file('picture')->store('berita_pictures', 'public');
        }

        Berita::create($data);

        return redirect('/admin/berita')->with('success', 'Berita created successfully.');
    }

    public function show($id)
    {
        $berita = Berita::findOrFail($id);
        return view('cms.berita.show', compact('berita'));
    }

    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('cms.berita.edit', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120', // 5MB limit
        ]);

        $berita = Berita::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('picture')) {
            // Optionally delete the old picture
            if ($berita->picture) {
                Storage::disk('public')->delete($berita->picture);
            }
            $data['picture'] = $request->file('picture')->store('berita_pictures', 'public');
        }

        $berita->update($data);

        return redirect('/admin/berita')->with('success', 'Berita updated successfully.');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();

        return redirect('/admin/berita')->with('success', 'Berita deleted successfully.');
    }

    public function showPublic($id)
    {
        $berita = Berita::findOrFail($id);
        return view('show', compact('berita'));
    }

    public function indexPublic()
    {
        $beritas = Berita::latest()->paginate(10);
        return view('moreberita', compact('beritas'));
    }
}