<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Superhero;

class SuperheroController extends Controller
{
    public function index()
    {
        $superheroes = Superhero::all();

        return view('superheroes.index', compact('superheroes'));
    }

    public function create()
    {
        return view('superheroes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'real_name' => 'required',
            'superhero_name' => 'required',
            'photo_url' => 'required',
        ]);

        Superhero::create($request->all());

        return redirect('/');
    }

    public function show($id)
    {
        $superhero = Superhero::findOrFail($id);

        return view('superheroes.show', compact('superhero'));
    }

    public function edit($id)
    {
        $superhero = Superhero::findOrFail($id);

        return view('superheroes.edit', compact('superhero'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'real_name' => 'required',
            'superhero_name' => 'required',
            'photo_url' => 'required',
        ]);

        $superhero = Superhero::findOrFail($id);
        $superhero->update($request->all());

        return redirect('/');
    }}

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
