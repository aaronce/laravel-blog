<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Prophecy\Call\Call;

class PagesController extends Controller
{
    public function index () {
        $title = 'Welcomes to Laravel';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about () {
        $title = 'About us';
        return view('pages.about')->with('title', $title);
    }

    public function services () {
        $data = [
            'title' => 'Services',
            'services' => [
                'web design', 'Programming', 'SEO'
            ]
        ];
        return view('pages.services')->with($data);
    }
}
