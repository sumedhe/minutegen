// Add matters to the matters page
var mattersDOM = {
    // Button sets to show
    buttonList: {
        'MEMO' : ['edit', 'add_to_photos', 'delete'], // MEMO
        'DEFAULT' : ['notifications_off', 'content_copy', 'pause', 'edit', 'delete', 'assignment_turned_in', 'assignment_late', 'assignment'], // DEFAULT
        'APPROVED' : ['notifications_off', 'content_copy'], // APPROVED
        'REJECTED' : ['notifications_off'], // REJECTED
        'HOLD' : ['notifications_off'], // HOLD
    },

    // Get DOM Element
    getDOM: function () { return document.getElementById('contentarea'); },

    // Clear the DOM content
    clear: function (){ mattersDOM.getDOM().innerHTML = ""},

    setStateColor: function (dom, state){
        if (dom.classList){
            domTools.removeClasses(dom, ['matter-default', 'matter-approved', 'matter-rejected', 'matter-hold', 'matter-memo']);
            dom.classList.add('matter-' + state);
        }
    },

    // ### Matters ###
    addItems: function (data){
        var section = mattersDOM.getDOM();
        // Add items
        for (var key in data){
            if (data.hasOwnProperty(key)){
                var dataItem = data[key];
                section.appendChild(mattersDOM.parseItem(dataItem));
            }
        }
        // If no matters
        var section = mattersDOM.getDOM();
        if (!section.hasChildNodes()){
            section.innerHTML = "<center>No matters</center>";
        }
        // Rearrange cards
        matterCards.refresh();
    },

    // Json item to Matter DOM
    parseItem: function (dataItem){
        var div = domTools.createDiv('matter-card');
        var title = domTools.createDiv('matter-card-title', dataItem['title']);
        var content = domTools.createDiv('matter-card-content', dataItem['content']);
        var buttons = domTools.createDiv('matter-card-buttons matter-card-hover-effect');
        var index = domTools.createDiv('matter-card-index', dataItem['matter_index']);

        div.appendChild(title);
        div.appendChild(content);
        div.appendChild(buttons);
        div.appendChild(index);
        domTools.createIconList('material button card-button', mattersDOM.buttonList[dataItem['state']]).forEach(function (i){
            buttons.appendChild(i);
        })
        div.id = dataItem['matter_index'];
        mattersDOM.setStateColor(div, dataItem['state'].toLowerCase());
        return div;
    },

    // ### Memo ###
    addMemos: function (data){
        var section = mattersDOM.getDOM();
        // Add items
        for (var key in data){
            if (data.hasOwnProperty(key)){
                var dataItem = data[key];
                section.appendChild(mattersDOM.parseMemo(dataItem));
            }
        }
        // If no matters
        if (!section.hasChildNodes()){
            section.innerHTML = "<center>No matters</center>";
        }
        // Rearrange cards
        matterCards.refresh();
    },

    // Json item to Matter DOM
    parseMemo: function (dataItem){
        var div = domTools.createDiv('matter-card');
        var title = domTools.createDiv('matter-card-title', dataItem['title']);
        var content = domTools.createDiv('matter-card-content', dataItem['content']);
        var buttons = domTools.createDiv('matter-card-buttons matter-card-hover-effect');

        div.appendChild(title);
        div.appendChild(content);
        div.appendChild(buttons);
        domTools.createIconList('material button card-button', mattersDOM.buttonList['MEMO']).forEach(function (i){
            buttons.appendChild(i);
        })
        div.id = dataItem['id'];
        mattersDOM.setStateColor(div, 'memo');
        return div;
    },
}
