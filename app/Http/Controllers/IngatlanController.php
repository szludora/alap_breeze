<?php

namespace App\Http\Controllers;

use App\Models\Ingatlan;
use App\Models\Kategoria;
use Illuminate\Http\Request;

class IngatlanController extends Controller
{
    // appends használatakor
     public function index()
    {
        return Ingatlan::all();
    } 

 /*  
    // with-es megoldás
 public function index()
    {
        return Ingatlan::with('kategoriaja:id,nev')->get();
    } */

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
