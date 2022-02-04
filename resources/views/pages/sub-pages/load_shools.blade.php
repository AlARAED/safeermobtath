
<a href="{{url(app()->getLocale() .'/school_details/'.$School->id)}}"><h2>
        @if(App::getLocale() == 'en')   {{$School->name_en}} @else   {{$School->name_ar}} @endif
    </h2></a>
<h3>
    @if(App::getLocale() == 'en')
        {!!  $School->content_en !!}
    @else
        {!! $School->content_ar !!}
    @endif
</h3>
<a href=""><img src="{{asset('uploads/'.$School->image)}}" alt="" width="1555px" height="550px"></a>

