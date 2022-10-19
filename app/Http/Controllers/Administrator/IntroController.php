<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administrator\Intro\CreateIntroRequest;
use App\Http\Requests\Administrator\Intro\UpdateIntroRequest;
use App\Models\Intro;
use Illuminate\Http\Request;

class IntroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $intro = Intro::all();
        return view('admin.intro.index', compact('intro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.intro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateIntroRequest $request)
    {
        $file = $request->file('image');
        $image = '';
        if (!empty($file)){
            $image = time().".".$file->getClientOriginalExtension();
            $file->move('back/images/intro/', $image);
        }

        Intro::create([
            'image' => $image,
            'title' => $request->title,
            'description' => $request->description,
            'meetting' => $request->meetting
        ]);

        return redirect()->route('intro.index');
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
        $intro = Intro::FindOrFail($id);
        return view('admin.intro.edit', compact('intro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIntroRequest $request, $id)
    {
        $intro = Intro::FindOrFail($id);
        $file = $request->file('image');
        $image = '';

        if (!empty($file)) {
            if (file_exists('back/images/intro/' . $intro->image)) {
                unlink('back/images/intro/' . $intro->image);
            }

            $image = time() . "." . $file->getClientOriginalExtension();
            $file->move('back/images/intro', $image);
        } else {
            $image = $intro->image;
        }

        $intro->update([
            'image' => $image,
            'title' => $request->title,
            'description' => $request->description,
            'meetting' => $request->meetting
        ]);

        return redirect()->route('intro.index');
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
