@extends('layouts.app')
@section('title', __('Correspondence Teacher'))
@section('content')
    <section class="profile_complete teacher_profile std_teacher_profile correspondence_teacher corres_srv_teacher">
        <div class="container">
            <div class="teac_shadow">
                <div class="profile_bg prof_head">
                    <div class="corresp_btn">
                        <nav class="navbar navbar-expand-lg">
                            {{--                    <li class="nav-item dropdown d-inline-block m-auto">--}}
                            {{--                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                            {{--                            <i class="fas fa-cog mr-2"></i>{{__('options')}}--}}
                            {{--                        </a>--}}
                            {{--                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                            {{--                            <a class="dropdown-item" href="#">{{__('options')}} 1</a>--}}
                            {{--                            <a class="dropdown-item" href="#">{{__('options')}} 2</a>--}}
                            {{--                        </div>--}}
                            {{--                    </li>--}}
                        </nav>

                        @if($teach->teacherdepartment->user_id == \Auth::user()->id)
                            <button class="form-control btn_newsletter mt-0 mb-3" id="start">بدء الدرس</button>
                            {{--                    {{__('Payment data')}}--}}
                            <button class="form-control btn_newsletter mt-0 mb-3">{{__('The lesson Completed')}}</button>
                        @endif
                        <button class="form-control btn_newsletter">{{__('Cancel lesson')}}</button>
                    </div>
                    <div class="profile_username">
                        <h5>  @if($teach->teacherdepartment->language_type==1)
                                {{__('French teacher')}}
                            @else
                                {{__('English teacher')}}
                            @endif
                        </h5>
                    </div>
                    <h5 class="mb-3 f_w_400"><i class="fa fa-user"></i>{{$teach->teacherdepartment->first_name}}   {{$teach->teacherdepartment->last_name}}</h5>

                    <div class="d-flex mt-5">

                        @if($teach->teacherdepartment->user_id == \Auth::user()->id)

                            <div class="mr-5">
                                <label for="period">{{__('Determine project period')}}</label>
                                <input type="text" id="hour" class="form-control">
                            </div>
                        @endif
                        {{--                    <div class="">--}}
                        {{--                        <label for="amount">{{__('Determine amount due')}}</label>--}}
                        {{--                        <input type="text" id="amount" class="form-control">--}}
                        {{--                    </div>--}}
                    </div>
                    <div class="create_response" id="app" >

                        <div class="bg_white" id="bg_white">

                            @foreach($messages as $message)

                            <div class="">
                                <div class="row">
                                    <div class="col-12 col-md-6 d-flex">
                                        <div class="prof_img">
                                            <img class="profile_img" src="{{asset('assets/images/avatar.PNG')}}" width="100" height="100" alt="">
                                        </div>
                                        <h5 class="m_auto_20 color_red">{{__('Adam Ali')}}</h5>
                                    </div>
                                </div>
                                @if($message->content !=null)
                                <p class="text-left font_17 p_0_120">{{$message->content}}</p>
                                @endif
                                @if($message->file_url !=null)
                                    <img src="{{asset($message->file_url)}}" width="100" height="100" alt="">


                                @endif


                                @if($message->sound_url !=null)
                                    <div class="audio">
                                    <audio
                                            controls
                                            src="{{asset('uploads\voices\2021\02\05/1612510379.mp3')}}">

                                    </audio>
                                    </div>
                                        {{--<audio controls>--}}

                                            {{--<source src="{{asset('111.mp3')}}" type="audio/mpeg">--}}
                                        {{--</audio>--}}
                                    {{--<audio controls>--}}

                                            {{--<source src="{{asset('222.mp3')}}" type="audio/mpeg">--}}
                                        {{--</audio>--}}

                                @endif
                                @endforeach

                            </div>

                        </div>

                        {{--                    <ul class="messages"  v-chat-scroll>--}}

                        {{--                    <message v-for="value,index  in chat.message" :key=value.index color="light" :user=chat.user[index]>--}}
                        {{--                        @{{ value }}--}}
                        {{--                    </message>--}}

                        {{--                    </ul>--}}
                        <form method="POST" id="form_r" action=""  enctype="multipart/form-data">
                            @csrf
                        <h5 class="text-left mt-5 mb-3 p_0_120 color_blue">{{__('Add response to this message')}}</h5>
                        <div class="corres_response">
                            <textarea name="content_text" id="" cols="30" rows="10" class="form-control mb-4" v-model='message' @keyup.enter='send'></textarea>
                            <div class="row d-flex">
                                <div class="col-12 col-md-4 attach_btn">
                                    <span class="form-control" onclick="document.getElementById('getFile11').click()"><i class="fas fa-paperclip mr-2"></i>{{__('Attach files')}}</span>
                                    <input id="getFile11" name="file_url" type="file" class="d-none">
                                </div>
                                <div class="col-12 col-md-4 attach_btn">
                                    <span class="form-control" id="sendvoice"><img src="{{asset('assets/images/icon/voice_line.svg')}}" width="18" class="mr-2">
                                        {{__('Attach a voice message')}}</span>
                                </div>

                                <div id="sendvoice2">
                                    <ol id="recordingsList">

                                    </ol>
                                    <button id="recordButton"> record</button>
                                    <button id="stopButton"> stop</button>
                                </div>
                            </div>
                        </div>
                        <div class="scholarship">
                            <button class="form-control m-auto btn_complete" id="sendbtn">{{__('Send')}}</button>
                        </div>
                            </form>
                    </div>

                </div>
            </div>

        </div>


        </div>
    </section>

@endsection
@section('js')
    <script src="https://cdn.rawgit.com/mattdiamond/Recorderjs/08e7abd9/dist/recorder.js"></script>
    <script>
        $('#sendvoice').on('click',function (e) {

            $('#sendvoice2').toggle('hidden');

        });
    </script>
    <script>

        var blob2=null;
        //webkitURL is deprecated but nevertheless
        URL = window.URL || window.webkitURL;

        var gumStream; 						//stream from getUserMedia()
        var rec; 							//Recorder.js object
        var input; 							//MediaStreamAudioSourceNode we'll be recording

        // shim for AudioContext when it's not avb.
        var AudioContext = window.AudioContext || window.webkitAudioContext;
        var audioContext //audio context to help us record

        var recordButton = document.getElementById("recordButton");
        var stopButton = document.getElementById("stopButton");
      //  var pauseButton = document.getElementById("pauseButton");

        //add events to those 2 buttons
        recordButton.addEventListener("click", startRecording);
        stopButton.addEventListener("click", stopRecording);
        //pauseButton.addEventListener("click", pauseRecording);

        function startRecording() {

            console.log("recordButton clicked");

            /*
             Simple constraints object, for more advanced audio features see
             https://addpipe.com/blog/audio-constraints-getusermedia/
             */

            var constraints = { audio: true, video:false }

            /*
             Disable the record button until we get a success or fail from getUserMedia()
             */

            recordButton.disabled = true;
            stopButton.disabled = false;
          //  pauseButton.disabled = false

            /*
             We're using the standard promise based getUserMedia()
             https://developer.mozilla.org/en-US/docs/Web/API/MediaDevices/getUserMedia
             */

            navigator.mediaDevices.getUserMedia(constraints).then(function(stream) {
                //  console.log("getUserMedia() success, stream created, initializing Recorder.js ...");

                /*
                 create an audio context after getUserMedia is called
                 sampleRate might change after getUserMedia is called, like it does on macOS when recording through AirPods
                 the sampleRate defaults to the one set in your OS for your playback device

                 */
                audioContext = new AudioContext();

                //update the format
                //  document.getElementById("formats").innerHTML="Format: 1 channel pcm @ "+audioContext.sampleRate/1000+"kHz"

                /*  assign to gumStream for later use  */
                gumStream = stream;

                /* use the stream */
                input = audioContext.createMediaStreamSource(stream);

                /*
                 Create the Recorder object and configure to record mono sound (1 channel)
                 Recording 2 channels  will double the file size
                 */
                rec = new Recorder(input,{numChannels:1})

                //start the recording process
                rec.record()

                console.log("Recording started");

            }).catch(function(err) {
                //enable the record button if getUserMedia() fails
                recordButton.disabled = false;
                stopButton.disabled = true;
               // pauseButton.disabled = true
            });
        }

     /*   function pauseRecording(){
            console.log("pauseButton clicked rec.recording=",rec.recording );
            if (rec.recording){
                //pause
                rec.stop();
                pauseButton.innerHTML="Resume";
            }else{
                //resume
                rec.record()
               pauseButton.innerHTML="Pause";

            }
        }*/

        function stopRecording() {
            console.log("stopButton clicked");

            //disable the stop button, enable the record too allow for new recordings
            stopButton.disabled = true;
            recordButton.disabled = false;
           // pauseButton.disabled = true;

            //reset button just in case the recording is stopped while paused
          //  pauseButton.innerHTML="Pause";

            //tell the recorder to stop the recording
            rec.stop();

            //stop microphone access
            gumStream.getAudioTracks()[0].stop();

            //create the wav blob and pass it on to createDownloadLink
            rec.exportWAV(createDownloadLink, "audio/mp3");
        }

        function createDownloadLink(blob) {

            blob2=blob;
            var url = URL.createObjectURL(blob);
            var au = document.createElement('audio');
            var li = document.createElement('li');
            var link = document.createElement('a');

            //name of .wav file to use during upload and download (without extendion)
            var filename = '111';//new Date().toISOString();

            //add controls to the <audio> element
             au.controls = true;
            au.src = url;
            li.appendChild(au);
            //save to disk link
            //  link.href = url;
            // link.download = filename+".wav"; //download forces the browser to donwload the file using the  filename
            //  link.innerHTML = "Save to disk";

            //add the new audio element to li


            //add the filename to the li
            //  li.appendChild(document.createTextNode(filename+".wav "))

            //add the save to disk link to li
            // li.appendChild(link);

            //upload link
            //   var upload = document.createElement('a');
            // upload.href="#";
            //upload.innerHTML = "Upload";
            //upload.addEventListener("click", function(event){
            //   var xhr=new XMLHttpRequest();

            /* xhr.onload=function(e) {
             if(this.readyState === 4) {
             console.log("Server returned: ",e.target.responseText);
             }
             };
             var fd=new FormData();
             fd.append("audio_data",blob, filename+".wav");
             //fd.append('_token',token);
             xhr.open("POST","http://127.0.0.1:8000/home",true);
             // xhr.setRequestHeader("x-csrf-token", "");
             xhr.send(fd);

             });
             li.appendChild(document.createTextNode (" "))//add a space in between
             li.appendChild(upload)//add the upload link to li
             */
            //add the li element to the ol
            recordingsList.appendChild(li);
        }
    </script>
    <script>
        var channel2 = pusher.subscribe('chatchanel');

        channel2.bind('App\\Events\\ChatEvent', function (data) {
            var message=data.message.message;

            if('{{$teach->id}}'==message.reservation_id){
                if('{{auth()->user()->id}}'==message.sender_id) {
                    var mes='<div class=""><div class="row"><div class="col-12 col-md-6 d-flex"><div class="prof_img">'+
                            '<img class="profile_img" src="{{asset('uploads/')}}'+'/'+message.sender.image+'" width="100" height="100" alt=""></div>'+
                            '<h5 class="m_auto_20 color_red">'+message.sender.name+'</h5>'+
                            '</div></div>'+
                            '<p class="text-left font_17 p_0_120">'+message.content+'</p>'+

                            '</div>';
                    $('#bg_white').append(mes);
                }else{
                    var mes='<div class=""><div class="row"><div class="col-12 col-md-6 d-flex"><div class="prof_img">'+
                            '<img class="profile_img" src="{{asset('uploads/')}}'+'/'+message.sender.image+'" width="100" height="100" alt=""></div>'+
                            '<h5 class="m_auto_20 color_red">'+message.sender.name+'</h5>'+
                            '</div></div>'+
                            '<p class="text-left font_17 p_0_120">'+message.content+'</p>'+

                            '</div>';
                    $('#bg_white').append(mes);
                    }

            }


        });
    </script>
    <script>
        function readFileUrlBlo(url,element) {

            var blob2=null;
            fetch(url)
                    .then(res => res.blob())
        .then(blob => {

                var objectURL = URL.createObjectURL(blob);
            element.attr('src',objectURL);
        //   return objectURL;

        });

        }
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.audio').each(function () {
                readFileUrlBlo($(this).find('audio').attr('src'));
            //   $(this).find('audio').attr('src',"");

            });
        });

        $('#sendbtn').on('click',function (e) {
            e.preventDefault();


            var form_data=new FormData(document.getElementById("form_r"));
            if(blob2!=null) {
                form_data.append("audio_data", blob2, "voice.mp3");
            }
            $.ajax({
                type: 'post',

                url: '{{url(app()->getLocale().'/send_message/'.$teach->id)}}',
                data: form_data,
                processData: false,
                contentType: false,
                success: function (data) {
                    $('#form_r').trigger('reset');
                }

            });
        });

    </script>
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script>
        $('#start').hide();

        $('#hour').on('keyup', function() {
            if (this.value.length) {
                $('#start').show();
            }else{
                $('#start').hide();
            }

            x = document.getElementById("hour").value;

            if (isNaN(x) || x < 1) {
                alert("should be integer");
            }

        });
    </script>


@stop
