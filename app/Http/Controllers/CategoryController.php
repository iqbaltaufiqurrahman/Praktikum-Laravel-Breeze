<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        //return $categories;
        return view('category', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add.category');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate form
        $request->validate([
            'name'      => 'required|min:5|max:100'
        ]);

        //create category data
        Category::create([
            'name'      => $request->name
        ]);

        //redirect to index
        return redirect()->route('category.index')->with(['successAdd' => 'Kategori Berhasil Ditambahkan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::findOrFail($id);

        return view('upt.category', compact('categories'));
    }

    /**
     * Update the specified resource in st
     * orage.
     */
    public function update(Request $request, $id)
    {
        //validate form
        $request->validate([
            'name'      => 'required|min:5|max:100'
        ]);

        //GET data by id
        $categories = Category::findOrFail($id);

        $categories->update([
            'name'      => $request->name
        ]);

        return redirect()->route('category.index')->with('successEdt', 'Kategori Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        //redirect to index
        return redirect()->route('category.index')->with(['successDel' => 'Kategori Berhasil Dihapus!']);
    }
}
