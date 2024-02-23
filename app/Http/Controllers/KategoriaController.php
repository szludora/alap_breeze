<?php

namespace App\Http\Controllers;

use App\Models\Kategoria;
use Illuminate\Http\Request;

class KategoriaController extends Controller
{
    public function index()
    {
        return response()->json(Kategoria::all());
    }

    public function show($id)
    {
        return response()->json(Kategoria::find($id));
    }

    public function store(Request $request)
    {
        (new Kategoria())->fill($request->all())->save();
    }

    public function update(Request $request, $id)
    {
        (Kategoria::findorFail($id))->fill($request->all())->save();
    }
    public function destroy($id)
    {
        Kategoria::findOrFail($id)->delete();
    }
}
