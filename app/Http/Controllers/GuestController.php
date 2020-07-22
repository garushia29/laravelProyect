<?php

namespace App\Http\Controllers;

use App\Entry;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    //
    public function index()
    {
        //dd('GuestController');
        $entries = Entry::paginate(10);
        return view('welcome', compact('entries'));
    }
}
