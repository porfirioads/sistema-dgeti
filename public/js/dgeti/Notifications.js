function showErrorNotification(message) {
    $.notify({
        // options
        message: message,
        icon: 'fa fa-times'
    }, {
        // settings
        type: 'danger'
    });
}