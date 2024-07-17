<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use App\Models\Feed;

class Feedcontroller extends Controller
{
    public function getindex(){
        $feeds = Feed::orderBY('id', 'DESC')->simplePaginate(100);
        return view('feed', compact('feeds'));
    }
}
