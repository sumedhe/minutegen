var matters = {
    // Matter states
    states: {
        '0' :  ['FAST_TRACK', 'RECOMMEND', 'HOLD'], // Not in minute
        '1' :  ['ONGOING', 'APPROVED', 'REJECTED', 'HOLD'], // In minute
    },

    string: '',

    refresh: function(){
        mattersDOM.clear();
        if (this.string == ''){
            server.get(api('matters?sort=-id'), mattersDOM.addItems);
            server.get(api('memos'), mattersDOM.addMemos)
            navbar.setState(1);
        } else {
            server.get(api('matters?search=' + this.string + '&sort=-id'), mattersDOM.addItems);
            server.get(api('memos?search=' + this.string + '&sort=-id'), mattersDOM.addMemos);
            navbar.setState(2);
        }
    },


    // Load matters
    load: function (){
        mattersDOM.clear();
        showLoader();
        this.string = '';

        var suff = '';
        var userType = getDOM('member-type-name').innerHTML;
        if (userType == 'Student'){
            suff = '&section_id=4';
        }
        // alert(userType);
        server.get(api('matters?sort=-id' + suff), mattersDOM.addItems);
        if (userType == 'Admin'){
            server.get(api('memos'), mattersDOM.addMemos)
        }
        navbar.setState(1);
    },

    // Search matters
    search: function (keywords){
        mattersDOM.clear();
        if (keywords == ""){
            this.string = "";
            navbar.setState(1);
        } else {
            this.string = keywords;
        }
        // Show loading...
        showLoader();
        navbar.setState(keywords == "" ? 1 : 2); // Change navbar color
        // getDOM('search-field').value = keywords;
        var suff = '';
        var userType = getDOM('member-type-name').innerHTML;
        // alert(userType);
        if (userType == 'Student'){
            suff = '&section_id=4';
        }
        // alert(suff);
        server.get(api('matters?search=' + keywords + '&sort=-id' + suff), mattersDOM.addItems);
        if (userType == 'Admin'){
            server.get(api('memos?search=' + keywords + '&sort=-id'), mattersDOM.addMemos);
        }
    },

    // Add new matter
    insert: function (){
        var data = matterEditorDOM.getValues();
        server.post(api('matters'), data,  matterEditorDOM.hide);
    },

    // Update matter
    update: function (){
        var id = getDOM('matter-editor-form').dataset.id;
        var data = matterEditorDOM.getValues();
        server.put(api('matters/' + id), data,  matterEditorDOM.hide);
    },

    // Delete matter
    delete: function (id){
        server.delete(api('matters/' + id), null,  matterEditorDOM.hide);
    },
}
