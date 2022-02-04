var notificationsWrapper = $('.dropdown-notifications');
var notificationsToggle = notificationsWrapper.find('a[data-toggle]');
var notificationsCountElem = notificationsToggle.find('span[data-count]');
var notificationsCount = parseInt(notificationsCountElem.data('count'));
var notifications = $('#notify_li');

// Subscribe to the channel we specified in our Laravel Event
var channel = pusher.subscribe('application');
// var channel = pusher.subscribe('contact');
var channel3 = pusher.subscribe('NewAppServiceAfterArrive');
var channel2 = pusher.subscribe('translation');




// Bind a function to a Event (the full Laravel class)
channel.bind('App\\Events\\NewApplication', function (data) {

    $('#notify_li2').remove();
    $('#notify_li2').hide();
    var existingNotifications = notifications.html();

    // if type application route to application
    if(data.type=='NewApplication')
        var rout='/admin/application';
    if(data.type=='NewTranslationApplication')
        var rout='/admin/translation';
    if(data.type=='NewAppServiceAfterArrive')
        rout='/admin/Insurance';
    if(data.type=='QusetionNotification')
        rout='/admin/Faq';
    if(data.type=='ContactNotification')
        rout='/admin/contactus';
    if(data.type=='NewTeacher')
        rout='/admin/applicationteacher';


    var newNotificationHtml = '<a href="' + rout + '" class="dropdown-item"><i class="fas fa-users mr-2"></i> ' + data.MESSAGE + '</a>';


    notifications.prepend(newNotificationHtml);
    notificationsCount += 1;
    notificationsCountElem.attr('data-count', notificationsCount);
    notificationsWrapper.find('.notif-count').text(notificationsCount);
    notificationsWrapper.show();
    $('#breaking_audio').trigger('play');
    toastr.info(data.MESSAGE);

});


