<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administrator\Hero\CreateHeroRequest;
use App\Http\Requests\Administrator\Hero\UpdateHeroRequest;
use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hero = Hero::all();
        return view('admin.hero.index', compact('hero'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.hero.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateHeroRequest $request)
    {
        $file = $request->file('image');
        $image = '';
        if (!empty($file)) {
            $image = time() . "." . $file->getClientOriginalExtension();
            $file->move('back/images/hero', $image);
        }

        Hero::create([
            'image' => $image,
            'established' => $request->established,
            'description' => $request->description,
            'contact' => $request->contact,
            'question' => $request->question
        ]);

        return redirect()->route('hero.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hero = Hero::FindOrFail($id);
        return view('admin.hero.edit', compact('hero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHeroRequest $request, $id)
    {
        $hero = Hero::FindOrFail($id);
        $file = $request->file('image');
        $image = '';

        if (!empty($file)) {
            if (file_exists('back/images/hero/' . $hero->image)) {
                unlink('back/images/hero/' . $hero->image);
            }

            $image = time() . "." . $file->getClientOriginalExtension();
            $file->move('back/images/hero', $image);
        } else {
            $image = $hero->image;
        }

        $hero->update([
            'image' => $image,
            'established' => $request->established,
            'description' => $request->description,
            'contact' => $request->contact,
            'question' => $request->question
        ]);

        return redirect()->route('hero.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
