var matterLog = {
    // Get DOM Element
    getDOM: function () { return getDOM('popup'); },
    // Clear the DOM content
    clear: function (){ matterLog.getDOM().innerHTML = ""},

    load: function (matterId){
        popupDOM.clear();
        server.get(api('matterlogs?matter_id=' + matterId), matterLog.addItems);
    },

    addItems: function (data){
        var index = '';
        if (data.length > 0){
            index = data[0]['matter_index'];
        } else {
            index = '(No Enty)';
        }
        matterLog.getDOM().innerHTML = "<div class='matter-log-item'><div class='matter-log-title'><span class='matter-log-id'> MATTER LOG</span><span class='matter-log-title-text'>" + index + "</span></div></div>";
        data.forEach(function(i){
            matterLog.getDOM().innerHTML += matterLogDOM.parseItem(i);
        });
        popupDOM.show();
        refreshAccordions();
    },

}
