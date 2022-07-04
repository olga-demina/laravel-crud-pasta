<?php

namespace App\Http\Controllers;

use App\Pasta;
use Illuminate\Http\Request;

class PastaController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $pasta_list = Pasta::all();
        return view('pasta.index', compact('pasta_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
       return view('pasta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        // Controllo i dati
        $request->validate($this->getValidationRules());

        // Salva i dati nel database
        $data = $request->all();
        $new_pasta = new Pasta();
        $new_pasta->fill($data);
        // $new_pasta->title = $data['title'];
        // $new_pasta->type = $data['type'];
        // $new_pasta->image_src = $data['image_src'];
        // $new_pasta->cook_time = $data['cook_time'];
        // $new_pasta->weight = $data['weight'];
        // $new_pasta->description = $data['description'];
        $new_pasta->save();

        // Reindirizzo sulla rotta che mostra i dettagli di pasta salvata
        return redirect()->route('pasta.show', ['pastum' => $new_pasta->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $pasta = Pasta::find($id);
        return view('pasta.show', compact('pasta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $pasta_to_update = Pasta::findOrFail($id);
        return view('pasta.edit', compact('pasta_to_update'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        // Validazione dei dati
        $request->validate($this->getValidationRules());

        // Salvataggio dei dati
        $data = $request->all();

        $pasta = Pasta::findOrFail($id);

        // $pasta->title = $data['title'];
        // $pasta->type = $data['type'];
        // //...
        // $pasta->save();
        
        $pasta->update($data);

        return redirect()->route('pasta.show', ['pastum' => $pasta->id]);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $pasta = Pasta::findOrFail($id);
        $pasta->delete();
        return redirect()->route('pasta.index');
    }

    /**
     * Returns an array with validation rules
     * @return Array
     */
    private function getValidationRules() {
        return [
            'title' => 'required|max:100|min:5',
            'type' => 'required|max:50',
            'image_src' => 'required',
            'cook_time' => 'required|max:50',
            'weight' => 'required|max:10',
            'description' => 'required'
        ];
    }
}
