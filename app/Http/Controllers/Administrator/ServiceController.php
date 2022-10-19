<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administrator\Service\CreateServiceRequest;
use App\Http\Requests\Administrator\Service\UpdateServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateServiceRequest $request)
    {
        $file = $request->file('image');
        $image = '';
        if (!empty($file)) {
            $image = time() . "." . $file->getClientOriginalExtension();
            $file->move('back/images/service/', $image);
        };

        Service::create([
            'image' => $image,
            'title_one' => $request->title_one,
            'desc_one' => $request->desc_one,
            'link_one' => $request->link_one,
            'title_two' => $request->title_two,
            'desc_two' => $request->desc_two,
            'link_two' => $request->link_two,
            'title_three' => $request->title_three,
            'desc_three' => $request->desc_three,
            'link_three' => $request->link_three
        ]);

        return redirect()->route('service.index');
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
        $service = Service::FindOrFail($id);
        return view('admin.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServiceRequest $request, $id)
    {
        $service = Service::FindOrFail($id);
        $file = $request->file('image');
        $image = '';

        if (!empty($file)) {
            if (file_exists('back/images/service/' . $service->image)) {
                unlink('back/images/service/' . $service->image);
            }

            $image = time() . "." . $file->getClientOriginalExtension();
            $file->move('back/images/service', $image);
        } else {
            $image = $service->image;
        }

        $service->update([
            'image' => $image,
            'title_one' => $request->title_one,
            'desc_one' => $request->desc_one,
            'link_one' => $request->link_one,
            'title_two' => $request->title_two,
            'desc_two' => $request->desc_two,
            'link_two' => $request->link_two,
            'title_three' => $request->title_three,
            'desc_three' => $request->desc_three,
            'link_three' => $request->link_three
        ]);

        return redirect()->route('service.index');
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
