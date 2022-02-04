
<a href="{{url(app()->getLocale() .'/nursery_details/'.$nurse->id)}}"><h2>
        @if(App::getLocale() == 'en')   {{$nurse->name_en}} @else   {{$nurse->name_ar}} @endif
    </h2></a>
<h3>
    @if(App::getLocale() == 'en')
        {!!  $nurse->content_en !!}
    @else
        {!! $nurse->content_ar !!}
    @endif
</h3>
<a href=""><img src="{{asset('uploads/'.$nurse->image)}}" alt="" width="1555px" height="550px"></a>

