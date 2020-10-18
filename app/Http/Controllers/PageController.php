<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //Group distrito
    public function historia() {
        return view('web.page_historia');
    }

    public function geografia() {
        return view('web.page_geografia');
    }

    public function turismo() {
        return view('web.page_turismo');
    }
}
