// Enter key on searchbar
getDOM('search-field').onkeypress = function (e) {
    if (e.keyCode === 13){
        matters.search(getDOM('search-field').value);
    }
};

// On click add button
getDOM('add-button').onclick = function () {
    matterEditorDOM.showNew();
};

// On click matter save button
getDOM('matter-editor-submit').onclick = function (){
    if (getDOM('matter-editor-submit').value == 'Add'){
        matters.insert();
    } else {
        matters.update();
    }
    return false;
};

// On click matter card button (Dynamic)
getDOM('contentarea').onclick = function(e){
    e = e || event;
    var target = e.originalTarget || e.srcElement;
    if(target.classList.contains('matter-card-state')){
        // Change the matter state to next state
        mattersDOM.setState(target.parentNode.parentNode, nextItem(matters.states, target.innerHTML));
    } else if (target.innerHTML == 'edit') {
        matterEditorDOM.showEdit(mattersDOM.getValues(target.parentNode.parentNode)); // Show edit matter
    } else if (target.innerHTML == 'delete'){
        matters.delete(target.parentNode.parentNode.dataset.id);
    }
};
