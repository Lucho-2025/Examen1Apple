<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
    return Items::with('marca')->get();
    }

    public function store(Request $request) {
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required|numeric',
            'marca_id' => 'required|exists:marcas,id'
        ]);
        return Items::create($request->all());
    }

    public function show($id) {
        return Items::with('marca')->findOrFail($id);
    }

    public function update(Request $request, $id) {
        $item = Items::findOrFail($id);
        $item->update($request->all());
        return $item;
    }

    public function destroy($id) {
        Items::destroy($id);
        return response()->json(['mensaje' => 'Eliminado']);
    }
}
