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
    // Validate
    if (getDOM('matter-editor-title').value.length == 0){
        showMessage("Title field should not be empty!");
        return;
    }
    if (getDOM('matter-editor-content').value.length == 0){
        showMessage("Content field should not be empty!");
        return;
    }

    var userType = getDOM('member-type-name').innerHTML;
    if (getDOM('matter-editor-form').dataset.formType == 'NEW'){
        if (userType != 'Admin'){
            memos.insert();
        } else {
            matters.insert();
        }
    } else {
        matters.update();
    }
    setTimeout(function(){
        matters.refresh();
    }, 400);

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
        var data = {
            'id' : card.dataset.id,
            'state' : target.innerHTML,
        }
        server.post(api('matters/setstate'), data);
    } else if (target.innerHTML == 'edit') {
        matterEditorDOM.showEdit(mattersDOM.getValues(target.parentNode.parentNode)); // Show edit matter
    } else if (target.innerHTML == 'delete'){
        if (confirm("Do you want to delete this item?")){
            matters.delete(target.parentNode.parentNode.dataset.id);
        }
    } else if (target.innerHTML == 'info'){
        matterLog.load(target.parentNode.parentNode.dataset.id);
    } else if (target.innerHTML == 'add_to_photos'){
        var card = target.parentNode.parentNode;
        var data = {
            'id' : card.dataset.id,
        }
        server.post(api('matters/memotomatter'), data, matters.refresh);

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
    window.scrollTo(0, 0);
};

// On click members button
getDOM('members-button').onclick = function () {
    members.load();
    window.scrollTo(0, 0);
};

// On click members button
getDOM('help-button').onclick = function () {
    window.location.href = BASEURL + '/help';
};

// On click members button
getDOM('logout-button').onclick = function () {
    window.location.href = BASEURL + '/api/logout';
};
