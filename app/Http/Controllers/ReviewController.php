<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Auth;

class ReviewController extends Controller
{
    public function getIndex(){
        return view('review');
       }
       public function postIndex(Request $request)
    {
        $request['user_id'] = Auth::guest() ? 0 : Auth::user()->id;
        Review::create($request->all());
        $request->session()->flash('status', 'Your message has been received. After verification it will be posted on the website');
        return redirect()->back();
    }
