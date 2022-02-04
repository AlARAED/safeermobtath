
$(document).ready(function () {
    //alert('as');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#contact_form').click(function () {
        event.preventDefault();
        $.ajax({
            type: 'post',
            url: 'admin/store',
            data: $('#contact_us').serialize(),
            success: function (data) {
                if (status == 200) {
                    alert('ttt');
                } else {
                   // @if(App::getLocale()=='en')
                  // toastr.success("Your request has been sent successfully. Wait for response from admin");
                   // @else
                    toastr.success("تم اضافة الدولة بنجاح !");
                   // @endif

                }

            }
        });
    });




});


