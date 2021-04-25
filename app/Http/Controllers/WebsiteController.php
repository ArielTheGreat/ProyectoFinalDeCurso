<?php

namespace App\Http\Controllers;

use App\Mail\VisitorContact;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class WebsiteController extends Controller
{
    public function index()
    {
       /* $categories = Category::orderBy('name', 'ASC')->where('is_published', '1')->get();
        $posts = Post::orderBy('id', 'DESC')->where('post_type', 'post')->where('is_published', '1')->paginate(5);*/
        //return view('website.index', compact('posts', 'categories'));
        return view('website.index');
    }
}
