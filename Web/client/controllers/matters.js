var matters = {
    // Load matters
    load: function (){
        mattersDOM.clear();
        if (session.privilegeLevel == 1){ server.get(api('memos'), mattersDOM.addMemos) }; // FOR ADMIN
        if (!mattersDOM.getDOM().hasChildNodes()){ mattersDOM.clear(); } // Clear if no memos
        server.get(api('matters?sort=id'), mattersDOM.addItems);
    },

    // Search matters
    search: function (keywords){
        mattersDOM.clear();
        mattersDOM.getDOM.innerHTML = "<center>Loading...</center>";
        if (keywords == ""){
            navbar.setState(1);
        } else {
            navbar.setState(2);
        }
        if (session.privilegeLevel == 1){ server.get(api('memos?search=').concat(keywords, '&sort=id'), mattersDOM.addMemos) }; // FOR ADMIN
        if (!mattersDOM.getDOM().hasChildNodes()){ mattersDOM.clear(); } // Clear if no memos
        server.get(api('matters?search=').concat(keywords, '&sort=id'), mattersDOM.addItems);
    },

    // Add new matter
    insert: function (title, content, section){
        data = {
            title: title,
            content: content,
            section_id: section,
            // minute_id: 1, // TMP
        }
        server.post(api('matters'), data, showMessage);
    },

    // Update matter
    update: function (matterIndex, title, content, section){

    },

    // Delete matter
    delete: function (matterIndex){

    },
}
