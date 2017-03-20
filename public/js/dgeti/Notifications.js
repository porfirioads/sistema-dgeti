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

function showInfoNotification(message) {
    $.notify({
        // options
        message: message,
        icon: 'fa fa-check'
    }, {
        // settings
        type: 'info'
    });
}

function showSuccessNotification(message) {
    $.notify({
        // options
        message: message,
        icon: 'fa fa-check'
    }, {
        // settings
        type: 'success'
    });
}