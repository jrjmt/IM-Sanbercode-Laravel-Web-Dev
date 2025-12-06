<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = DB::table('categories')->get();
        return view('category.index', compact('categories'));
    }
    
    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:255',
            'description' => 'required'
        ],
        [
            'required' => "kolom :attribute wajib diisi",
            'min' => "teks :attribute minimal :min karakter",
            'max' => "teks :attribute maksimal :max karakter"
        ]);
        
        $now = Carbon::now();
        DB::table('categories')->insert([
            'name'        => $request->input('name'),
            'description' => $request->input('description'),
            'created_at'  => $now,
            'updated_at'  => $now,
        ]);
        return redirect('/category')->with('success', 'Category berhasil ditambahkan');
    }

    public function show($id)
    {
        $category = DB::table('categories')->where('id', $id)->first();
        return view('category.show', compact('category'));
    }

    public function edit($id)
    {
        $category = DB::table('categories')->where('id', $id)->first();
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'        => 'required|string|min:3|max:255',
            'description' => 'required'
        ]);

        DB::table('categories')->where('id', $id)->update([
            'name'        => $request->name,
            'description' => $request->description,
            'updated_at'  => Carbon::now(),
        ]);
        return redirect('/category')->with('success', 'Category berhasil diperbarui');
    }

    public function destroy($id)
    {
        DB::table('categories')->where('id', $id)->delete();
        return redirect('/category')->with('error', 'Category berhasil dihapus');
    }
}