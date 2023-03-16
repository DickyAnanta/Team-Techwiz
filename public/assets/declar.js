function bin2hex(s) {
    var v, i, f = 0,
        a = [];
    s += '';
    f = s.length;

    for (i = 0; i < f; i++) {
        a[i] = s.charCodeAt(i).toString(16).replace(/^([\da-f])$/, "0$1");
    }

    return a.join('');
}

function isJson(str) {
    try {
        JSON.parse(str);
    } catch (e) {
        return false;
    }
    return true;
}

var BASE_URL = window.location.origin + "/";
var BASE_DOMAIN = window.location.origin + "/";