<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Counter;
use App\Models\Faq;
use App\Models\Hero;
use App\Models\Intro;
use App\Models\Project;
use App\Models\Seo;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\TopHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $seo = Seo::orderBy('id', 'desc')->take(1)->first();
        $topHeader = TopHeader::orderBy('id', 'desc')->take(1)->first();
        $hero = Hero::orderBy('id', 'desc')->take(1)->first();
        $about = About::orderBy('id', 'desc')->take(1)->first();
        $intro = Intro::orderBy('id', 'desc')->take(1)->first();
        $service = Service::orderBy('id', 'desc')->take(1)->first();
        $counter = Counter::take(4)->get();
        $teams = Team::take(4)->get();
        $projects = Project::take(6)->get();
        $testimonial = Testimonial::take(3)->get();
        $blogs = Blog::with('user')->take(4)->get();
        $faq = Faq::orderBy('id', 'desc')->take(1)->first();
        return view('front.index', compact('seo', 'topHeader', 'hero', 'about', 'intro', 'service', 'counter', 'teams', 'projects', 'testimonial', 'blogs', 'faq'));
    }

    public function contact(Request $request)
    {
        Contact::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'subject' => $request->subject,
            'description' => $request->description
        ]);
        return 200;
    }


    public function blog()
    {
        $topHeader = TopHeader::orderBy('id', 'desc')->take(1)->first();
        $blog = Blog::orderBy('id', 'desc')->take(4)->get();
        $project = Project::orderBy('id', 'desc')->take(6)->get();
        return view('front.blog', compact('blog', 'topHeader', 'project'));
    }

    public function blogDetail($id)
    {
        $topHeader = TopHeader::orderBy('id', 'desc')->take(1)->first();
        $blogDetail = Blog::with('user')->findOrFail($id);
        $project = Project::orderBy('id', 'desc')->take(6)->get();
        $comment = Comment::with('user')->where('blog_id', $id)->where('status', 1)->get();

        return view('front.blog-details', compact('blogDetail', 'project', 'topHeader', 'comment'));
    }


    public function comment(Request $request)
    {
        Comment::create([
            'comment' => $request->comment,
            'user_id' => Auth::user()->id,
            'blog_id' => $request->blog_id
        ]);
        return 200;
    }
}
