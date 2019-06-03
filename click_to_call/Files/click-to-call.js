({
    events: {
        //On click of our "button" element
        'click [data-action=open_phone]': 'togglePopup',
    },
    // tagName attribute is inherited from Backbone.js.
    // We set it to "span" instead of default "div" so that our "button" element is displayed inline.
    tagName: "span",
    // Used to keep track of Popup since it is not attached to this View's DOM
    $popup: undefined,
    togglePopup: function () {
        console.log('toggle popup');
        //Toggle active status on button in footer
        var $button = this.$('[data-action="open_phone"]');
        $button.toggleClass('active');
        if ($button.hasClass('active')) {
            //Create popup if necessary, otherwise just toggle the hidden class to hide/show.
            app.alert.show('greeting-alert', {
                level: 'info',
                messages: '<p>Hello ' + app.user.get('full_name') + '!</p><p>This is just a test popup</p>',
                autoClose: false
            });
        } else {
            app.alert.dismiss('greeting-alert');
        }
    },
})
