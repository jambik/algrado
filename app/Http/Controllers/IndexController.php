<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Http\Requests;
use App\Page;
use App\Room;
use App\Service;

class IndexController extends FrontendController
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = Page::find(1);

        $rooms = Room::all();
        $gallery = Gallery::first();
        $services = Service::all();

        return view('index', compact('page', 'rooms', 'gallery', 'services'));
    }
}
