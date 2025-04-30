<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::all();
        //return $items;
        return view('item', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Mengambil data dari tabel categories
        $categories = Category::all();

        return view('add.item', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate form
        $request->validate([
            'name'          => 'required|min:5|max:100',
            'category_id'   => 'required|exists:categories,id', //
            'price'         => 'required|numeric|min:4',
            'stock'         => 'required|numeric|min:4'
        ]);

        //create item data
        Item::create([  
            'name'          => $request->name,
            'category_id'   => $request->category_id,
            'price'         => $request->price,
            'stock'         => $request->stock     
        ]);

        //redirect to index
        return redirect()->route('item.index')->with(['successAdd' => 'Data Berhasil Ditambahkan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        $item->delete();

        //redirect to index
        return redirect()->route('item.index')->with(['successDel' => 'Data Berhasil Dihapus!']);
    }
}
