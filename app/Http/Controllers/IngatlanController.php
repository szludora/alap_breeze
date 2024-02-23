<?php

namespace App\Http\Controllers;

use App\Models\Ingatlan;
use Illuminate\Http\Request;

class IngatlanController extends Controller
{
    public function index()
    {
        return response()->json(Ingatlan::all());
    }

    public function show($id)
    {
        return response()->json(Ingatlan::find($id));
    }

    public function store(Request $request)
    {
        (new Ingatlan())->fill($request->all())->save();
    }

    public function update(Request $request, $id)
    {
        (Ingatlan::findorFail($id))->fill($request->all())->save();
    }
    public function destroy($id)
    {
        Ingatlan::findOrFail($id)->delete();
    }
}
