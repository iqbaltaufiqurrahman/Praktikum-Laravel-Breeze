<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = Transaction::all();
        //return $transactions;
        return view('transaction', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Mengambil data dari tabel users 
        $users = User::all();

        return view('add.transaction', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //validate form
         $request->validate([
            'user_id'          => 'required|exists:users,id', //
            'date'             => 'required|date',
            'total'            => 'required|numeric',
            'paytotal'         => 'required|numeric'
        ]);

        //create item data
        Transaction::create([  
            'user_id'          => $request->user_id,
            'date'             => $request->date,
            'total'            => $request->total,
            'paytotal'         => $request->paytotal 
        ]); 

        //redirect to index
        return redirect()->route('transaction.index')->with(['success' => 'Data Berhasil Ditambahkan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
