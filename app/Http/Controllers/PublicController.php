<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Testimonial;
use App\Models\Topic;


class PublicController extends Controller
{
    public function index()
    {
        $topics = Topic::latest()->take(2)->get();
        $categories = Category::with(['topics' => function ($query) { $query->take(3);}])->limit(5)->get();
        $testimonials = Testimonial::limit(3)->get();
        return view('public.index',compact('topics','categories','testimonials'));
    }

    public function topiclist()
    {
        $topics = Topic::where('published',1)->latest()->take(3)->paginate(3);
        $trendingtopics = Topic::where('published',1)->where('trending',1)->latest()->take(2)->get();
        return view('public.topics-listing',compact('topics','trendingtopics'));
    }

    public function testimonials()
    {
        $testimonials = Testimonial::where('published', 1)->get();
        return view('public.testimonials',compact('testimonials'));
    }

    public function contact()
    {

        return view('public.contact');
    }

    public function topicsdetail(string $id)
    {
       $topic = Topic::FindOrfail($id);
        return view('public.topics-detail',compact('topic'));
    }
    

}
