<?php


namespace App\Http\Controllers;


class PagesController extends Controller
{

    public function index(){
        return view('pages.index');
    }

    public function getAbout(){
        return view('pages.about');
    }
}
