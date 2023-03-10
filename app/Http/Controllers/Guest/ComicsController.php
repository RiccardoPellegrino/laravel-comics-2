<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
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
        $formData = $request->all();
        $newcomic = new Comic();
            $newcomic->title = $formData['title'];
            $newcomic->description = $formData['description'];
            $newcomic->thumb = $formData['thumb'];
            $newcomic->prince = $formData['price'];
            $newcomic->series = $formData['series'];
            $newcomic->sale_date = $formData['sale_date'];
            $newcomic->type = $formData['type'];
            $newcomic->writers = $formData['writers'];
            $newcomic->artists = $formData['artists'];
            $newcomic->save();
        return redirect()->route('comics.show', ['comic' => $newcomic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $formData = $request->all();
        $newcomic = Comic::find($id);
            $newcomic->title = $formData['title'];
            $newcomic->description = $formData['description'];
            $newcomic->thumb = $formData['thumb'];
            $newcomic->prince = $formData['price'];
            $newcomic->series = $formData['series'];
            $newcomic->sale_date = $formData['sale_date'];
            $newcomic->type = $formData['type'];
            $newcomic->writers = $formData['writers'];
            $newcomic->artists = $formData['artists'];
            $newcomic->update();
        return redirect()->route('comics.show', ['comic' => $newcomic->id]);
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
        return redirect()->route('comics.index');
    }
}
