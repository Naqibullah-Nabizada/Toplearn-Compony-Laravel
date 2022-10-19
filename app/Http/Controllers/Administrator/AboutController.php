<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administrator\About\CreateAboutRequest;
use App\Http\Requests\Administrator\About\UpdateAboutRequest;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::all();
        return view('admin.about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAboutRequest $request)
    {
        $file = $request->file('image');
        $image = '';

        if (!empty($file)) {
            $image = time() . "." . $file->getClientOriginalExtension();
            $file->move('back/images/about/', $image);
        }

        About::create([
            'image' => $image,
            'title' => $request->title,
            'subtitle' => $request->title,
            'description' => $request->description,
            'helper' => $request->helper,
            'service_title_one' => $request->service_title_one,
            'service_desc_one' => $request->service_desc_one,
            'service_title_two' => $request->service_title_two,
            'service_desc_two' => $request->service_desc_two,
            'service_title_three' => $request->service_title_three,
            'service_desc_three' => $request->service_desc_three,
            'service_title_four' => $request->service_title_four,
            'service_desc_four' => $request->service_desc_four,
            'experience_title_one' => $request->experience_title_one,
            'experience_desc_one' => $request->experience_desc_one
        ]);

        return redirect()->route('about.index');
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
        $about = About::FindOrFail($id);
        return view('admin.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAboutRequest $request, $id)
    {
        $about = About::FindOrFail($id);
        $file = $request->file('image');
        $image = '';

        if (!empty($file)) {
            if (file_exists('back/images/about/' . $about->image)) {
                unlink('back/images/about/' . $about->image);
            }

            $image = time() . "." . $file->getClientOriginalExtension();
            $file->move('back/images/about', $image);
        } else {
            $image = $about->image;
        }

        $about->update([
            'image' => $image,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'helper' => $request->helper,
            'service_title_one' => $request->service_title_one,
            'service_desc_one' => $request->service_desc_one,
            'service_title_two' => $request->service_title_two,
            'service_desc_two' => $request->service_desc_two,
            'service_title_three' => $request->service_title_three,
            'service_desc_three' => $request->service_desc_three,
            'service_title_four' => $request->service_title_four,
            'service_desc_four' => $request->service_desc_four,
            'experience_title_one' => $request->experience_title_one,
            'experience_desc_one' => $request->experience_desc_one
        ]);

        return redirect()->route('about.index');
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
