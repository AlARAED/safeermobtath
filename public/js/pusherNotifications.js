var notificationsWrapper = $('.dropdown-notifications');
var notificationsToggle = notificationsWrapper.find('a[data-toggle]');
var notificationsCountElem = notificationsToggle.find('span[data-count]');
var notificationsCount = parseInt(notificationsCountElem.data('count'));
var notifications = $('.dropdown-notifications .scrollable-container');

// Subscribe to the channel we specified in our Laravel Event
var channel = pusher.subscribe('application');
// var channel = pusher.subscribe('contact');
// var channel = pusher.subscribe('Insurance');
// var channel = pusher.subscribe('ask');




// Bind a function to a Event (the full Laravel class)
channel.bind('App\\Events\\NewApplication', function (data) {


    var existingNotifications = notifications.html();

    // if type application route to application
    if(data.type=='NewApplication')
    var rout='/admin/application';


    var newNotificationHtml = '<a href="' + rout + '" class="dropdown-item"><i class="fas fa-users mr-2"></i> ' + data.MESSAGE + '</a>';


    notifications.prepend(newNotificationHtml);
    notificationsCount += 1;
    notificationsCountElem.attr('data-count', notificationsCount);
    notificationsWrapper.find('.notif-count').text(notificationsCount);
    notificationsWrapper.show();
});


