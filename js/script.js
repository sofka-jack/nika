"use strict"

window.onscroll = function () {
    var header = document.getElementsByClassName("ways-to-help__header")[0];
    var logo = document.getElementsByClassName("logo")[0];
    var shadow = '0 0 10px rgba(0,0,0,0.5)';

    if(window.pageYOffset > 150) {
        header.style.boxShadow  = shadow;
        header.style.height = '70px';
        logo.style.width = '70px';
    } else {
        header.style.boxShadow = '';
        header.style.height = '100px';
        logo.style.width = '90px';
    }
}

/*modal*/

var modal = document.getElementsByClassName('container_modal')[0];
var button = document.getElementsByClassName('i-want-to-help')[0];
var close = document.getElementsByClassName('cross_close')[0];


button.onclick = function(e) {
    e.preventDefault();
    modal.style.display = "block";
}

close.onclick = function(e) {
    e.preventDefault();
    modal.style.display = "none";
}


/*modal*/