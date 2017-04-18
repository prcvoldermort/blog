<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex() {
        return view('pages/welcome');
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
