<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Mail;
use Session;

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

    public function postContact(Request $request)
    {
        $this->validate($request, array(
            'email' => 'required | email',
            'subject' => 'min:3',
            'message' => 'min:10'
        ));

        $data = array(
            'email' => $request->email,
            'subject' => $request->subject,
            'bodyMessage' => $request->message
        );

        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->from($data['email']);
            $message->to('13759113589@139.com');
            $message->subject($data['subject']);
        });

        Session::flash('success', 'Your email was successfully sent');
        return redirect('/');
    }

}
