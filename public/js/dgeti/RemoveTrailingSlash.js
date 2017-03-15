function removeTrailingSlashUrl() {
    var fullUrl = window.location.href;
    if (fullUrl.substr(-1) === '/') {
        fullUrl = fullUrl.substr(0, fullUrl.length - 1);
        window.location = fullUrl;
    }
}
removeTrailingSlashUrl();