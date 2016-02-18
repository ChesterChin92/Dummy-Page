/**
 * Created by chins on 2/17/2016.
 */
function $(id) {
    return document.getElementById(id);
}

function ide(id, list) {
    var elem = $(id); //get visible article
    elem.style.visibility = "visible";
    elem.style.position = "fixed"; // Making all text to appear at fix location
    elem.style.position.left = "100px";
    elem.style.position.top = "150px";

    for (var i = 0; i < list.length; i++) {
        //Itterate each element
        var itm = $(list[i]);
        itm.style.visibility = "hidden";

    }
}

function status(id,list) {
    var elem = $(id);
    elem.className = 'active';

    for (var i = 0; i < list.length; i++) {
        var itm = $(list[i]);
        itm.className = 'disabled';
    }
}