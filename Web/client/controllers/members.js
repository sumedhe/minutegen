var members = {
    // Load members
    load: function (){
        membersDOM.clear();
        server.get(api('members'), membersDOM.addItems);
    },

    // Delete members
    delete: function (id){
        // Generate Minute
        if (confirm('Do you want to delete member?')){
            server.delete(api('members/delete'), {'id': id}, members.load);
        }
    },
}
