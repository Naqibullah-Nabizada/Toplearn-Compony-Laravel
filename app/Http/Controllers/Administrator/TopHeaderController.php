<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administrator\Seo\UpdateSeoRequest;
use App\Http\Requests\Administrator\TopHeader\CreateTopHeaderRequest;
use App\Http\Requests\Administrator\TopHeader\UpdateTopHeaderRequest;
use App\Models\TopHeader;
use Illuminate\Http\Request;

class TopHeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topHeader = TopHeader::all();
        return view('admin.topHeader.index', compact('topHeader'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.topHeader.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTopHeaderRequest $request)
    {
        TopHeader::create([
            'email' => $request->email,
            'mobile' => $request->mobile,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter
        ]);

        session()->flash('create');
        return redirect()->route('topheader.edit');
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
        $topheader = TopHeader::FindOrFail($id);
        return view('admin.topHeader.edit', compact('topheader'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTopHeaderRequest $request, $id)
    {
        $topheader = TopHeader::FindOrFail($id);

        $topheader->update([
            'email' => $request->email,
            'mobile' => $request->mobile,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter
        ]);

        session()->flash('update');
        return redirect()->route('topheader.index');
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
