/**
 * Script que da solución temporal al problema ocurrido cuando una url
 * termina con "/", no debe quedarse así, algo hay que arreglar en el
 * proyecto de laravel.
 */

function removeTrailingSlashUrl() {
    var fullUrl = window.location.href;
    if (fullUrl.substr(-1) === '/') {
        fullUrl = fullUrl.substr(0, fullUrl.length - 1);
        window.location = fullUrl;
    }
}
removeTrailingSlashUrl();
