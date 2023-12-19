<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Http\Requests\StoreHeroRequest;
use App\Http\Requests\UpdateHeroRequest;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $heroes = Hero::all();
        // ritorna la vista che mostre l'elenco recuperato dal db
        return view('heroes.index', compact('heroes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('heroes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHeroRequest $request)
    {
        $data = $request->all();

        $newHero = new Hero();
        $newHero->title = $data['title'];
        $newHero->description = $data['description'];
        $newHero->thumb = $data['thumb'];
        $newHero->series = $data['series'];
        $newHero->sale_date = $data['sale_date'];
        $newHero->type = $data['type'];
        $newHero->price = $data['price'];
        $newHero->save();

        return redirect()->route('heroes.show',$newHero->id);
        // dd($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Hero $hero)
    {
        return view('heroes.show',compact('hero'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hero $hero)
    {
        return view('heroes.edit',compact('hero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHeroRequest $request, Hero $hero)
    {
        $data = $request->all();
        //dd($data);
        $hero->update($data);
        return redirect()->route('heroes.show', $hero->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hero $hero)
    {
        $hero->delete();

        return redirect()->route('heroes.index');
    }
}
