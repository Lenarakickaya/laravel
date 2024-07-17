<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\MyEmail;
use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{
    public function postIndex(Request $request){
        abort_if(!$request->message, '401', 'message is emptu');
       //dd($request->all());
       Mail::to('minich268@gmail.com')->send(new MyEmail($request->message));
return redirect()->back();
    }
}