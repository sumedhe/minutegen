// Matters DOM
var mattersDOM = {
    // Button sets to show
    buttonList: {
        'MEMO' : ['edit', 'add_to_photos', 'delete'], // MEMO
        'ONGOING' : ['notifications_off', 'content_copy', 'pause', 'edit', 'delete', 'assignment_turned_in', 'assignment_late', 'assignment'], // ONGOING
        'APPROVED' : ['notifications_off', 'content_copy'], // APPROVED
        'REJECTED' : ['notifications_off'], // REJECTED
        'HOLD' : ['notifications_off'], // HOLD
    },


    //
    // buttons: {
    //     'EDIT' : 'edit',
    //     'NOTIFICATIONS':
    // },

    // Get DOM Element
    getDOM: function () { return getDOM('contentarea'); },

    // Clear the DOM content
    clear: function (){ mattersDOM.getDOM().innerHTML = ""},

    setState: function (dom, state){
        var stateButton = getDOMClass('matter-card-state', getDOMClass('matter-card-buttons', dom));
        stateButton.innerHTML = state;
        removeClasses(dom, ['matter-onhold', 'matter-approved', 'matter-rejected', 'matter-hold']);
        dom.classList.add('matter-' + state.toLowerCase());
    },

    getValues: function (div){
        var values = {
            'id': div.dataset.id,
            'title': getDOMClass('matter-card-title', div).innerHTML,
            'content': getDOMClass('matter-card-content', div).innerHTML,
            'section_id': div.dataset.sectionId,
        };
        return values;
    },

    // Set matter item list
    setItems: function (data){
        mattersDOM.clear();
        mattersDOM.addItems(data);
    },

    // Add matter items
    addItems: function (data, isMemos = false){
        var section = mattersDOM.getDOM();
        if (section.innerHTML.includes('No matters')) { section.innerHTML = ''; } // Clear 'No matters' message if exists
        // Add items
        data.forEach(function (item){
            if (isMemos){
                var domItem = mattersDOM.parseMemo(item);
                section.insertBefore(domItem, section.children[0])
            } else {
                var domItem = mattersDOM.parseItem(item);
                section.appendChild(domItem);
            }
        });

        // If no matters
        if (!section.hasChildNodes()){
            section.innerHTML = "<center>No matters</center>";
        }
        // Rearrange cards
        matterCards.refresh();
    },

    // Add memos
    addMemos: function (data){
        mattersDOM.addItems(data, true);
    },

    // Json item to Matter DOM
    parseItem: function (item){
        var div = createDiv('matter-card');
        var title = createDiv('matter-card-title', item['title']);
        var content = createDiv('matter-card-content', item['content']);
        var buttons = createDiv('matter-card-buttons matter-card-hover-effect');
        var index = createDiv('matter-card-index', item['matter_index']);
        var stateButton = createDiv('matter-card-state button', item['state']);
        div.dataset.sectionId = parseInt(item['section_id']);
        div.dataset.id = parseInt(item['id']);
        div.dataset.minuteId = parseInt(item['minute_id']);

        div.appendChild(title);
        div.appendChild(content);
        div.appendChild(buttons);
        div.appendChild(index);
        createIconList('material button card-button', mattersDOM.buttonList[item['state']]).forEach(function (i){
            buttons.appendChild(i);
        })
        buttons.appendChild(stateButton);
        div.id = item['id'];
        mattersDOM.setState(div, item['state']);
        return div;
    },

    // Json item to Matter DOM
    parseMemo: function (item){
        var div = createDiv('matter-card matter-memo');
        var title = createDiv('matter-card-title', item['title']);
        var content = createDiv('matter-card-content', item['content']);
        var buttons = createDiv('matter-card-buttons matter-card-hover-effect');
        div.dataset.id = parseInt(item['id']);

        div.appendChild(title);
        div.appendChild(content);
        div.appendChild(buttons);
        createIconList('material button card-button', mattersDOM.buttonList['MEMO']).forEach(function (i){
            buttons.appendChild(i);
        })
        div.id = 'memo' + item['id'];
        return div;
    },
}
