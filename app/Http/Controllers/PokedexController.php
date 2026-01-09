<?php

namespace App\Http\Controllers;

use App\Models\Pokedex;
use Illuminate\Http\Request;

class PokedexController extends Controller
{
    public function index()
    {
        $pokedexs = Pokedex::all();
        return view('pokedex.index', compact('pokedexs'));
    }

    public function store(Request $request)
    {
        Pokedex::create($request->all());
        return redirect()->back();
    }

    public function edit($id)
    {
        $pokedex_update = Pokedex::find($id);
        $pokedexs = Pokedex::all();

        return view(
            'pokedex.updatepokedex',
            compact('pokedex_update', 'pokedexs')
        );
    }

    public function update(Request $request, $id)
    {
        Pokedex::find($id)->update($request->all());
        return redirect('/pokedex');
    }

    public function destroy($id)
    {
        Pokedex::find($id)->delete();
        return redirect('/pokedex');
    }
}
