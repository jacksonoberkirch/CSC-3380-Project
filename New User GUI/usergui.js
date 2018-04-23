function toggle_visibility(id) {
    var e =document.getElementById("gui-wrapper");

    if(e.style.display == 'block'){
        e.style.display = 'none';
    }
    else
        e.style.display = 'block';
}