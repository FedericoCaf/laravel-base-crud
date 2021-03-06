<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::orderBy('id','desc')->paginate(10);
        return view('comics.home', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate( $this->validationData(), $this->validationErrors() );

        $data = $request->all();

        $new_comic = new Comic();
        // $new_comic->title = $data['title'];
        // $new_comic->type = $data['type'];
        // $new_comic->series = $data['series'];
        // $new_comic->price = $data['price'];
        // $new_comic->sale_date = $data['sale_date'];
        // $new_comic->image = $data['image'];
        // $new_comic->description = $data['description'];
        // $new_comic->slug = Str::slug($new_comic->title, '-');
        $data['slug'] = Str::slug($data['title'], '-');
        $new_comic->fill($data);
        $new_comic->save();

        return redirect()->route('comics.show', $new_comic);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);
        if($comic){

            return view('comics.show', compact('comic'));
        }
        abort(404, 'Fumetto non presente nel database');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::find($id);
        if($comic){

            return view('comics.edit', compact('comic'));
        }
        abort(404, 'Fumetto non presente nel database');
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate( $this->validationData(), $this->validationErrors() );

        $data = $request->all();

        $data['slug'] = Str::slug($data['title'], '-');
        $comic->update($data);

        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        // return redirect()->route('comics.index');
        return redirect()->route('comics.index')->with('deleted', "Il fumetto $comic->title ?? stata eliminato");
    }

    private function validationData(){
        return [
            'title' => "required|max:50|min:2",
            'type' => 'required|max:20|min:2',
            'image' => 'required|max:255',
            'price' => 'required|numeric|min:1',
            'series' => 'required|max:30|min:2',
            'sale_date' => 'required'
        ];
    }

    private function validationErrors(){
        return [
            'title.required' => 'Il titolo ?? un campo obbligatorio',
            'title.max' => 'Il numero di caratteri consentito per il nome del fumetto ?? di :max caratteri',
            'title.min' => 'Il numero minimo di caratteri per il nome del fumetto ?? di :min caratteri',
            'type.required' => 'Il tipo di fumetto ?? un campo obbligatorio',
            'type.max' => 'Il numero di caratteri per il tipo consentito ?? di :max caratteri',
            'type.min' => 'Il numero minimo di caratteri per il tipo ?? di :min caratteri',
            'price.required' => 'Il prezzo ?? oblbigatorio',
            'price.numeric' => 'Il prezzo deve essere un numero',
            'price.min' => 'Il prezzo deve essere di minmo 1 euro',
            'image.required' => "L'immagine ?? un campo obbligatorio",
            'image.max' => "L'url dell'immagine non pu?? contenere pi?? di 255 caratteri",
            'series.required' => 'La serie del fumetto ?? un campo obbligatorio',
            'series.max' => 'Il numero di caratteri consentito per la serie ?? di :max caratteri',
            'series.min' => 'Il numero minimo di caratteri per la serie ?? di :min caratteri',
            'sale_date.required' => 'La data ?? obbligatoria'
        ];
    }



}
