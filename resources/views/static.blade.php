@extends('layouts.base')

@section('content')
<section class="section" id="vialogistic">
    <h1>{{$article->name}}</h1>
</section>

{!!$article->body!!}
@endsection