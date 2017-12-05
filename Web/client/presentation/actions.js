// Enter key on searchbar
getDOM('search-field').onkeypress = function (e) {
    if (e.keyCode === 13){
        matters.search(getDOM('search-field').value);
    }
};

// On click add button
getDOM('add-button').onclick = function () {
    getDOM('modal').style.display='block'; // Show matter editor popup
};

// On click matter save button
getDOM('matter-editor-save-button').onclick = function (){
    // matters.save
};
