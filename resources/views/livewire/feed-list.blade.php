<div x-data="{
canLoadMore : true
}"  @scroll.window.trottle="
isScrolled = Math.round( window.scrollY + window.innerHeight) >= document.documentElement.scrollHeight;
if(isScrolled && canLoadMore){
@this.loadMore()
}">
                @foreach($feeds as $feed)
                <div>
@switch($feed->model_name)
    @case('Blog')
        @include('feeds.blog')
        @break

    @case('BlogText')
        @include('feeds.blog_text')
        @break

    @case('BlogTextPicture')
        @include('feeds.blog_text_picture')
        @break

    @case('Service')
        @include('feeds.service')
        @break

    @case('Article')
        @include('feeds.article')
        @break



@endswitch
</div>
@endforeach
  
    <a class="w-full p-2 m-2 text-center cursor-pointer" wire:click="loadMore()">Load more</a>
  
</div>
