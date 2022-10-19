<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administrator\Testimonial\CreateTestimonialRequest;
use App\Http\Requests\Administrator\Testimonial\UpdateTestimonialRequest;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use PDO;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonial = Testimonial::paginate(2);
        return view('admin.testimonial.index', compact('testimonial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTestimonialRequest $request)
    {
        $file = $request->file('image');
        $image = '';
        if (!empty($file)) {
            $image = time() . "." . $file->getClientOriginalExtension();
            $file->move('back/images/testimonial/', $image);
        };

        Testimonial::create([
            'image' => $image,
            'name' => $request->name,
            'job' => $request->job,
            'comment' => $request->comment
        ]);

        return redirect()->route('testimonial.index');
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
        $testimonial = Testimonial::FindOrFail($id);
        return view('admin.testimonial.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTestimonialRequest $request, $id)
    {
        $testimonial = Testimonial::FindOrFail($id);
        $file = $request->file('image');
        $image = '';

        if (!empty($file)) {
            if (file_exists('back/images/testimonial/' . $testimonial->image)) {
                unlink('back/images/testimonial/' . $testimonial->image);
            }

            $image = time() . "." . $file->getClientOriginalExtension();
            $file->move('back/images/testimonial', $image);
        } else {
            $image = $testimonial->image;
        }

        $testimonial->update([
            'image' => $image,
            'name' => $request->name,
            'job' => $request->job,
            'comment' => $request->comment
        ]);

        return redirect()->route('testimonial.index');
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
