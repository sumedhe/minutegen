// Enter key on searchbar
getDOM('search-field').onkeypress = function (e) {
    if (e.keyCode === 13){
        matters.search(getDOM('search-field').value);
    }
};

// On click add button
getDOM('add-button').onclick = function () {
    // matterEditorDOM.showNew();
    matterLog.load(1);
    // popupDOM.show();
};

// On click matter save button
getDOM('matter-editor-submit').onclick = function (){
    if (getDOM('matter-editor-form').dataset.formType == 'NEW'){
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
        var card = target.parentNode.parentNode;
        mattersDOM.setState(card, nextItem(matters.states[card.dataset.isInMinute.toString()], card.dataset.state));
    } else if (target.innerHTML == 'edit') {
        matterEditorDOM.showEdit(mattersDOM.getValues(target.parentNode.parentNode)); // Show edit matter
    } else if (target.innerHTML == 'delete'){
        matters.delete(target.parentNode.parentNode.dataset.id);
    }
};


// SIDE BAR

// On click matters button
getDOM('matters-button').onclick = function () {
    matters.load();
};

// On click minutes button
getDOM('minutes-button').onclick = function () {
    minutes.load();
};

// On click members button
getDOM('members-button').onclick = function () {
    members.load();
};

// On click members button
getDOM('help-button').onclick = function () {
    window.location.href = BASEURL + '/help';
};
