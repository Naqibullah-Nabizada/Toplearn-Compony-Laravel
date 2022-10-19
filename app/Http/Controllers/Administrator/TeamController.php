<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administrator\Team\CreateTeamRequest;
use App\Http\Requests\Administrator\Team\UpdateTeamRequest;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::paginate(2);
        return view('admin.team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTeamRequest $request)
    {
        $file = $request->file('image');
        $image = '';
        if(!empty($file)){
            $image = time().".".$file->getClientOriginalExtension();
            $file->move('back/images/team/', $image);
        };

        Team::create([
            'image' => $image,
            'name' => $request->name,
            'job' => $request->job,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin
        ]);

        return redirect()->route('team.index');
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
        $team = Team::FindOrFail($id);
        return view('admin.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeamRequest $request, $id)
    {
        $team = Team::FindOrFail($id);
        $file = $request->file('image');
        $image = '';

        if (!empty($file)) {
            if (file_exists('back/images/team/' . $team->image)) {
                unlink('back/images/team/' . $team->image);
            }

            $image = time() . "." . $file->getClientOriginalExtension();
            $file->move('back/images/team', $image);
        } else {
            $image = $team->image;
        }

        $team->update([
            'image' => $image,
            'name' => $request->name,
            'job' => $request->job,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin
        ]);

        return redirect()->route('team.index');
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
