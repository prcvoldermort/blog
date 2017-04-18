<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function getIndex() {
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        return view('pages/welcome')->with('posts', $posts);
    }

    public function getAbout() {
        $first = "Yuan";
        $last = "Zhang";

        $fullname = $first . " " . $last;
        $email = "13759113589@139.com";

        return view('pages/about')->withFullname($fullname)->withEmail($email);
    }

    public function getContact() {
        return view('pages/contact');
    }

}
