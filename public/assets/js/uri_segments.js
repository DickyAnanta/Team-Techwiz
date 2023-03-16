var urlPath = window.location.pathname.split('/');
var jsURI = [];
var urlpathloop = 0;
$.each(urlPath, function (i) {
    if (BASE_URL.localeCompare(BASE_DOMAIN) === 1) {
        i += 1;
    }
    jsURI[urlpathloop] = urlPath[i];
    urlpathloop += 1;
});