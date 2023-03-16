var loading = '<div class="col-md-2 col-6" id="src-loading">';
loading += '<img src="/assets/system-images/app-loading.svg" alt="Search..." style="width: 100%;padding:5px;">';
loading += '</div>';

var loader = document.getElementsByClassName("loading-layout")[0];
$(document).ready(function () {

    document.addEventListener('readystatechange', (event) => {
        loader.style.display = "block";
    });

    window.addEventListener("load", function () {
        loader.style.display = "none";
    })
})