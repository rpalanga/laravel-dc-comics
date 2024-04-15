<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use Illuminate\Support\Facades\Validator;


class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validation($request->all());

        $newComic = new Comic();

        $newComic->title = $request->title;
        $newComic->description = $request->description;
        $newComic->thumb = $request->thumb;
        $newComic->price = $request->price;
        $newComic->series = $request->series;
        $newComic->sale_date = $request->sale_date;
        $newComic->type = $request->type;

        $newComic->artists = $request->artists;
        $newComic->writers = $request->writers;

        $newComic->save();
        
        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $this->validation($request->all());

        $comic->title = $request->title;
        $comic->description = $request->description;
        $comic->thumb = $request->thumb;
        $comic->price = $request->price;
        $comic->series = $request->series;
        $comic->sale_date = $request->sale_date;
        $comic->type = $request->type;

        $comic->artists = $request->artists;
        $comic->writers = $request->writers;

        $comic->save();
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }

  private function validation($data){

    $validator = Validator::make($data, [
        'title'=> 'required|max:100',
        'description' => 'required|max:8000',
        'thumb'=> 'nullable|max:8000',
        'price'=> 'required|max:30',
        'series'=> 'required|max:50',
        'sale_date'=> 'required|date|max:10',
        'type'=> 'required|max:100',
        'artists'=> 'required|max:500',
        'writers'=> 'required|max:500'
    ],[
        //  'title'=> 'Hai dimenticato di inserire il titolo',
        'required'=> 'Hai dimenticato di inserire :attribute',
        'max'=> 'Il valore inserito in :attribute ha superato il valore :max di caratteri',
    ]
    
    ,[
        'title'=> 'Titolo',
        'description' => 'Descrizione',
        'thumb'=> 'Immagine',
        'price'=> 'Prezzo',
        'series'=> 'Serie',
        'sale_date'=> 'Data di uscita',
        'type'=> 'Tipologia',
        'artists'=> 'Artisti',
        'writers'=> 'Scrittori',
    ]
    
    )->validate();


  }
}

