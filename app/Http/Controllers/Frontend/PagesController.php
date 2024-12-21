<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('Frontend.pages.index');
    }

    public function blogsidebar()
    {
        return view('Frontend.pages.blogsidebar');
    }
    public function about()
    {
        return view('Frontend.pages.about');
    }
    public function blogsingle()
    {
        return view('Frontend.pages.blogsingle');
    }
    public function confirmation()
    {
        return view('Frontend.pages.confirmation');
    }
    public function contact ()
    {
        return view('Frontend.pages.contact');
    }
    public function department()
    {
        return view('Frontend.pages.department');
    }
    public function departmentsingle()
    {
        return view('Frontend.pages.departmentsingle');
    }
    public function doctor()
    {
        return view('Frontend.pages.doctor');
    }
    public function appoinment()
    {
        return view('Frontend.pages.appoinment');
    }
    public function doctorsingle()
    {
        return view('Frontend.pages.doctorsingle');
    }
    public function services()
    {
        return view('Frontend.pages.services');
    }



}
