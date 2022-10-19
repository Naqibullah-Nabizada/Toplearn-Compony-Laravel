<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administrator\Counter\CreateCounterRequest;
use App\Http\Requests\Administrator\Counter\UpdateCounterRequest;
use App\Models\Counter;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class CounterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $counter = Counter::paginate(2);
        return view('admin.counter.index', compact('counter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.counter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCounterRequest $request)
    {
        $file = $request->file('image');
        $image = '';

        if (!empty($file)) {
            $image = time() . "." . $file->getClientOriginalExtension();
            $file->move('back/images/counter/', $image);
        };

        Counter::create([
            'image' => $image,
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect()->route('counter.index');
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
        $counter = Counter::FindOrFail($id);
        return view('admin.counter.edit', compact('counter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCounterRequest $request, $id)
    {
        $counter = Counter::FindOrFail($id);
        $file = $request->file('image');
        $image = '';

        if (!empty($file)) {
            if (file_exists('back/images/counter/' . $counter->image)) {
                unlink('back/images/counter/' . $counter->image);
            }

            $image = time() . "." . $file->getClientOriginalExtension();
            $file->move('back/images/counter', $image);
        } else {
            $image = $counter->image;
        }

        $counter->update([
            'image' => $image,
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect()->route('counter.index');
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
