<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all = Warehouse::all();
        return view('warehouse.index', ['all'=>$all]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('warehouse.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'grade' => 'integer|required'
        ]);

        Warehouse::create($request->all());
        return redirect()->route('warehouse.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $bahan = Warehouse::whereId($id)->first();
        return view('warehouse.edit', ['bahan'=>$bahan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'grade' => 'integer|required'
        ]);

        Warehouse::whereId($id)->update($request->except('_token'));
        return redirect()->route('warehouse.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Warehouse::whereId($id)->delete();
        return redirect()->route('warehouse.index');
    }
}
