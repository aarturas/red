<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
   
    
    public function index()
    {
        return view('page.home');
    }


    public function aboutUs()
     {
    return view('page.about_us');
    }


    public function social()
     {
    return view('page.social');
    }


    public function contact()
     {
    return view('page.contact');
    }


    public function DennisKim()
     {
    return view('page.our team/DennisKim');
    }


    public function SaraMcCoy()
     {
    return view('page.our team/SaraMcCoy');
    }


    public function EmilyPorter()
     {
    return view('page.our team.EmilyPorter');
    }

    

    public function create()
    {
        // return view('page.create', ['page' => Page::all()])
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show(Page $page)
    {
        //
    }

    
    public function edit(Page $page)
    {
        //
    }

    
    public function update(Request $request, Page $page)
    {
        //
    }

   
    public function destroy(Page $page)
    {
        //
    }
}
