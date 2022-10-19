<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administrator\Seo\CreateSeoRequest;
use App\Http\Requests\Administrator\Seo\UpdateSeoRequest;
use App\Models\Seo;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seos = Seo::all();
        return view('admin.seo.index', compact('seos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.seo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSeoRequest $request)
    {

        Seo::create([
            'title' => $request->title,
            'keywords' => $request->keywords,
            'description' => $request->description,
            'site_name' => $request->site_name,
            'site_url' => $request->site_url,
            'twitter_name' => $request->twitter_name,
            'twitter_description' => $request->twitter_description
        ]);

        session()->flash('create');
        return redirect()->route('seo.index');
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
        $seo = Seo::FindOrFail($id);
        return view('admin.seo.edit', compact('seo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSeoRequest $request, $id)
    {
        $seo = Seo::FindOrFail($id);
        $seo->update([
            'title' => $request->title,
            'description' => $request->description,
            'keywords' => $request->keywords,
            'site_name' => $request->site_name,
            'site_url' => $request->site_url,
            'twitter_name' => $request->twitter_name,
            'twitter_description' => $request->twitter_description
        ]);

        session()->flash('update');
        return redirect()->route('seo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $seo = Seo::FindOrFail($id);
        $seo->destroy();
        return redirect()->route('seo.index');
    }
}
