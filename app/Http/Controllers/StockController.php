<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all = stock::all();
        return view('stock.index', ['all'=>$all]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stock.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'grade' => 'integer|required'
        ]);

        stock::create($request->all());
        return redirect()->route('stock.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $bahan = stock::whereId($id)->first();
        return view('stock.show', ['bahan'=>$bahan]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $bahan = stock::whereId($id)->first();
        return view('stock.edit', ['bahan'=>$bahan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'grade' => 'integer|required'
        ]);

        stock::whereId($id)->update($request->except('_token'));
        return redirect()->route('stock.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        stock::whereId($id)->delete();
        return redirect()->route('stock.index');
    }
}
