var members = {
    // Load members
    load: function (){
        membersDOM.clear();
        server.get(api('members'), membersDOM.addItems);
    },

    // Search members
    search: function (keywords){

    },

    // Add new members
    insert: function (title, content, section){

    },

    // Update members
    update: function (matterIndex, title, content, section){

    },

    // Delete members
    delete: function (matterIndex){

    },
}
