<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
public function getUrl($url = null)
{
$article = Article::where('url',$url)->first();
//dd($article);
return view('static', compact('article'));
}
}