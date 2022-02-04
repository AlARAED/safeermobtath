
    <a href="{{url(app()->getLocale() .'/university_details/'.$collage->id)}}"><h2>
            @if(App::getLocale() == 'en')   {{$collage->name_en}} @else   {{$collage->name_ar}} @endif
        </h2></a>
    <h3>
        @if(App::getLocale() == 'en')
            {!!  $collage->content_en !!}
        @else
            {!! $collage->content_ar !!}
        @endif
    </h3>
    <a href=""><img src="{{asset('uploads/'.$collage->image)}}" alt="" width="1555px" height="550px"></a>

