<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FrecuentQuestion;
use App\Models\Page;
use Illuminate\Http\Request;

class FrecuentQuestionController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.frecuent-questions.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paginas = Page::all();

        return view('admin.frecuent-questions.create',compact('paginas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $frecuent_question = FrecuentQuestion::create($request->all());

        # Asocio en que paginas se va a visualizar la Pregunta Frecuente
        $frecuent_question->pages()->sync($request->paginas);

        return redirect()->route('admin.frecuent.questions.edit', $frecuent_question)->with('success', 'Pregunta Frecuente actualizada con exitisamente!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FrecuentQuestion  $frecuentQuestion
     * @return \Illuminate\Http\Response
     */
    public function edit($frecuent_question)
    {
        $frecuent_question = FrecuentQuestion::find($frecuent_question);
        $paginas = Page::all();
        $selectedPages = $frecuent_question->pages->pluck('id')->toArray();

        return view('admin.frecuent-questions.edit', compact('frecuent_question','paginas','selectedPages'));
    }

    public function show($frecuent_question)
    {
        $frecuent_question = FrecuentQuestion::find($frecuent_question);
        $paginas = Page::all();
        $selectedPages = $frecuent_question->pages->pluck('id')->toArray();

        return view('admin.frecuent-questions.show', compact('frecuent_question','paginas','selectedPages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FrecuentQuestion  $frecuentQuestion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $frecuent_question)
    {
        $frecuent_question = FrecuentQuestion::find($frecuent_question);

        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $frecuent_question->update($request->all());

        # Asocio en que paginas se va a visualizar la Pregunta Frecuente
        $frecuent_question->pages()->sync($request->paginas);

        return redirect()->route('admin.frecuent.questions.show', $frecuent_question)->with('success', 'Pregunta Frecuente actualizada con exitisamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FrecuentQuestion  $frecuentQuestion
     * @return \Illuminate\Http\Response
     */
    public function destroy($frecuent_question)
    {
        $frecuent_question = FrecuentQuestion::find($frecuent_question);

        $frecuent_question->delete();

        return redirect()->route('admin.frecuent.questions.index')->with('success', 'Pregunta Frecuente eliminada con exitisamente!');

    }
}
