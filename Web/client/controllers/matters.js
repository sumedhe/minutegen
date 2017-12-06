var matters = {
    // Matter states
    states: ['ONGOING', 'APPROVED', 'REJECTED', 'HOLD'],

    // Load matters
    load: function (){
        mattersDOM.clear();
        server.get(api('matters?sort=-id'), mattersDOM.addItems);
        server.get(api('memos'), mattersDOM.addMemos)
    },

    // Search matters
    search: function (keywords){
        mattersDOM.clear();
        // Show loading...
        mattersDOM.getDOM.innerHTML = "<center>Loading...</center>";
        navbar.setState(keywords == "" ? 1 : 2); // Change navbar color
        server.get(api('matters?search=' + keywords + '&sort=-id'), mattersDOM.addItems);
        server.get(api('memos?search=' + keywords + '&sort=-id'), mattersDOM.addMemos);
    },

    // Add new matter
    insert: function (){
        var data = matterEditorDOM.getValues();
        server.post(api('matters'), data, matterEditorDOM.hide);
    },

    // Update matter
    update: function (){
        var id = getDOM('matter-editor-form').dataset.id;
        var data = matterEditorDOM.getValues();
        server.put(api('matters/' + id), data, matterEditorDOM.hide);
    },

    // Delete matter
    delete: function (id){
        server.delete(api('matters/' + id), null);
    },
}
