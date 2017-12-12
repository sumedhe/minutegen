var memos = {
    // Add new matter
    insert: function (){
        var data = this.getValues();
        server.post(api('memos'), data,  matterEditorDOM.hide);
    },

    // Update memo
    update: function (memoIndex, title, content, section){

    },

    // Get Values
    getValues: function (){
        var values = {
            'title'     : getDOM('matter-editor-title').value,
            'content'   : getDOM('matter-editor-content').value,
        };
        return values;
    },

    // Delete memo
    delete: function (memoIndex){

    },
}
