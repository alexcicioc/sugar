SUGAR.App.events.on("router:init", function () {
    //Register the route #helloWorld
    SUGAR.App.router.route("helloWorld", "Hello World", function () {
        SUGAR.App.alert.show('message-id', {
            level: 'info',
            messages: 'Hello, fabulous person!',
            autoClose: false
        });
    });
});
