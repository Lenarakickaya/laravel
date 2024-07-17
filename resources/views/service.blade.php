

@foreach($cervices as $cervice)
<div>
    <img src="{{asset('storage/'.$service->picture)}}" />
    <a href="{{asset('service/'.$service->id)}}">
        {{$service->name}}
</a>
</div>
@endforeach