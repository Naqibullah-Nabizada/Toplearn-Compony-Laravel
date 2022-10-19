<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faq = Faq::all();
        return view('admin.faq.index', compact('faq'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Faq::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'faq_one' => $request->faq_one,
            'faq_desc_one' => $request->faq_desc_one,
            'faq_two' => $request->faq_two,
            'faq_desc_two' => $request->faq_desc_two,
            'faq_three' => $request->faq_three,
            'faq_desc_three' => $request->faq_desc_three
        ]);

        return redirect()->route('faq.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faq = Faq::FindOrFail($id);
        return view('admin.faq.edit', compact('faq'));
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
        $faq = Faq::FindOrFail($id);
        $faq->update([
            'title' => $request->title,
            'desc' => $request->desc,
            'faq_one' => $request->faq_one,
            'faq_desc_one' => $request->faq_desc_one,
            'faq_two' => $request->faq_two,
            'faq_desc_two' => $request->faq_desc_two,
            'faq_three' => $request->faq_three,
            'faq_desc_three' => $request->faq_desc_three
        ]);

        session()->flash('update');
        return redirect()->route('faq.index');
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
