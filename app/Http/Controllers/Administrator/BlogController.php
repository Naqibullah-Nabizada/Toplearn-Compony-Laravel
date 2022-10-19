<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administrator\Blog\CreateBlogRequest;
use App\Http\Requests\Administrator\Blog\UpdateBlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{

    public function index()
    {
        $blogs = Blog::with('user')->orderBy('id','desc')->paginate(3);
        return view('admin.blog.index', compact('blogs'));
    }


    public function create()
    {
        return view('admin.blog.create');
    }


    public function store(CreateBlogRequest $request)
    {
        $file = $request->file('image');
        $image = '';
        if(!empty($file)){
            $image = time().".".$file->getClientOriginalExtension();
            $file->move('back/images/blog/', $image);
        };

        Blog::create([
            'image' => $image,
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => Auth::user()->id
        ]);

        return redirect()->route('blog.index');
    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        $blog = Blog::FindOrFail($id);
        return view('admin.blog.edit', compact('blog'));
    }


    public function update(UpdateBlogRequest $request, $id)
    {
        $blog = Blog::FindOrFail($id);
        $file = $request->file('image');
        $image = '';

        if (!empty($file)) {
            if (file_exists('back/images/blog/' . $blog->image)) {
                unlink('back/images/blog/' . $blog->image);
            }

            $image = time() . "." . $file->getClientOriginalExtension();
            $file->move('back/images/blog', $image);
        } else {
            $image = $blog->image;
        };

        $blog->update([
            'image' => $image,
            'title' => $request->title,
            'description' => $request->description
        ]);

        session()->flash('update');
        return redirect()->route('blog.index');
    }


    public function destroy($id)
    {

    }
}
