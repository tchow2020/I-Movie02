<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Category;

class MovieController extends Controller
{
    private $movie;

    public function __construct(Movie $movie) {
        $this->movie = $movie;
    }

    public function index(Request $params, Category $categories)
    {
        $categoriaCode = $params->query('categoria');
        $categoria = $categories::where('code', $categoriaCode)->get();
        if (isset($categoriaCode)) {
            $movies = $this->movie::where('category_id', $categoria[0]->id)->get();
        } else {
            $movies = $this->movie::all();
        }
        return view('imovie', [
            'movies' => $movies,
        ]);
    }

    public function create(Request $request)
    {
        $data = $request->only(
            'titulo',
            'descricao',
            'category_id',
            'tag',
            'img_url',
            'ano'
        );
        $save = $this->movie->create($data);
        if ($save) return redirect()->route('index')->with('success', 'Filme adicionado.');
        return redirect()->route('index')->with('error', 'Não foi possivel adicionar o filme');
    }

    public function buscarFilme(Request $request)
    {
        $query = $request->query('busca');
        $data = $this->movie::query()->where('titulo', 'LIKE', "%{$query}%")->get();
        return view('imovie', ['movies' => $data, 'query' => $query]);
    }

    public function ver($titulo)
    {
        $movie = $this->movie::where('titulo', $titulo)->get();
        return view('movies.ver', [
            'titulo' => $titulo,
            'movie' => $movie[0]
        ]);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
