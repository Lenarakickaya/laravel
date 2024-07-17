@extends('layouts.app')

@section('content')
   
<section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap flex-col">
            <div class="text-3xl mt-3 text-center pb-5">{{$blog->name}}</div>
            <div class="grid grid-cols-1 rounded w-full">
                <div>
                    <div class="text p-3 pb-0 font-bold text-center">
                        <a class="text-amber-900 hover:underline"
                           href="{{asset('blog/'.$blog->id)}}">{{$blog->name}}</a>
                    </div>
                    <div class="flex items-center justify-center h-screen">
                        <img src="{{asset('storage/'.$blog->picture)}}">
                    </div>
                    <div class="col-span-3">
                        <div class="flex items-center justify-center">
                            <div class="prose m-2 text-center">
                                {!! $blog->description_small!!}
                            </div>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="flex items-center justify-center">
                            <div class="prose text-justify rounded bg-base-100 shadow p-2">
                                {!! $blog->description!!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center">
                    <div class="text-justify rounded bg-base-100 shadow p-2 w-2/3 mt-5">
                        @foreach($blog->texts()->orderBy('id', 'DESC')->get() as $text)
                            <div>{!! $text->body !!}</div>
                            <div class="max-w-2xl mx-auto">
                                <div class="carousel w-full">
                                    @foreach($text->pictures()->orderBy('position')->get() as $picture)
                                        <div id="slide{{$text->id}}{{$loop->iteration}}" class="carousel-item relative w-full">
                                            <div class="text-center w-full">
                                                <img src="{{asset('storage/blogs/'.$picture->picture)}}" class="w-full"/>
                                                <div
                                                    class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                                                    @php
                                                        if($loop->iteration == 1){
                                                            $prev = $loop->count;
                                                        }else{
                                                            $prev = $loop->iteration-1;
                                                        }
                                                        if($loop->iteration == $loop->count){
                                                           $next = 1;
                                                        }else{
                                                             $next = $loop->iteration+1;
                                                        }
                                                    @endphp
                                                    <a href="#slide{{$text->id}}{{$prev}}" class="btn btn-circle">❮</a>
                                                    <a href="#slide{{$text->id}}_{{$next}}" class="btn btn-circle">❯</a>
                                                </div>
                                                <div class="badge badge-ghost">{{$picture->name}}</div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <div class="w-full bg-white rounded-lg border p-2 my-4 mx-6">

        <h3 class="font-bold">Discussion</h3>

        <form method="post" action="{{asset('blog/'.$blog->id.'/add_comment')}}">
                                @csrf
                                <div class="w-full px-3 my-2">
                <textarea
                    class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
                    name="body" placeholder='Type Your Comment' required></textarea>
                                </div>
                                <div class="w-full flex justify-end px-3">
                                    <input type='submit'
                                           class="px-2.5 py-1.5 rounded-md text-white text-sm bg-indigo-500"
                                           value='Post Comment'>
                                </div>
                            </form>

            <div class="flex flex-col">

            @foreach($comments as $comment)
                                    <div class="border rounded-md p-3 ml-3 my-3">
                                        <div class="flex gap-3 items-center">
                                            <h3 class="font-bold">
                                                {{$comment->username}}
                                            </h3>
                                        </div>
                                        <p class="text-gray-600 mt-2">
                                            {{$comment->body}}
                                        </p>
                                        <p class="float-right">
                                            <em>{{$comment->created_at->diffForHumans()}}</em>
                                        </p>
                                    </div>
                                @endforeach

                





            </div>



           
        </form>


    </div>
@endsection

