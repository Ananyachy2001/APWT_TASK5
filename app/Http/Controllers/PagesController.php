<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medical;
class PagesController extends Controller
{
    public function home(){
        return view('pages.home');
    }

}
