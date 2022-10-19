<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administrator\Project\CreateProjectRequest;
use App\Http\Requests\Administrator\Project\UpdateProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::paginate(2);
        return view('admin.project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProjectRequest $request)
    {
        $file = $request->file('image');
        $image = '';
        if (!empty($file)) {
            $image = time() . "." . $file->getClientOriginalExtension();
            $file->move('back/images/project', $image);
        }

        Project::create([
            'image' => $image,
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect()->route('project.index');
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
        $project = Project::FindOrFail($id);
        return view('admin.project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectRequest $request, $id)
    {
        $project = Project::FindOrFail($id);
        $file = $request->file('image');
        $image = '';

        if (!empty($file)) {
            if (file_exists('back/images/project/' . $project->image)) {
                unlink('back/images/project/' . $project->image);
            }

            $image = time() . "." . $file->getClientOriginalExtension();
            $file->move('back/images/project', $image);
        } else {
            $image = $project->image;
        };

        $project->update([
            'image' => $image,
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect()->route('project.index');
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
