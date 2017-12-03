// Add matters to the matters page
var mattersDOM = {
    buttonList: {
        '1' : ['notifications_off', 'content_copy', 'pause', 'edit', 'delete', 'assignment_turned_in', 'assignment_late', 'assignment'], // DEFAULT
        '2' : ['notifications_off', 'content_copy'], // APPROVED
        '3' : ['notifications_off'], // REJECTED
        '4' : ['notifications_off'], // HOLD
        '5' : ['edit', 'add_to_photos', 'delete'], // DRAFT
    },

    // Get DOM Element
    getDOM: function () {
        return document.getElementById('contentarea');
    },

    parseItem: function (dataItem){
        // Create DOM Item
        var div = docTools.createDiv('card');
        var title = docTools.createDiv('card-title', dataItem['title']);
        var content = docTools.createDiv('card-content', dataItem['content']);
        var buttons = docTools.createDiv('card-buttons card-hover-effect');
        var index = docTools.createDiv('card-index', dataItem['matter_index']);

        div.appendChild(title);
        div.appendChild(content);
        div.appendChild(buttons);
        div.appendChild(index);
        docTools.createIconList('material button card-button', mattersDOM.buttonList[dataItem['matter_state_id']]).forEach(function (i){
            buttons.appendChild(i);
        })
        return div;
    },

    // Clear the DOM content
    clear: function (){ mattersDOM.getDOM().innerHTML = ""},

    // Add items from given array
    addItems: function (data){
        var section = mattersDOM.getDOM();
        // If no matters
        if (data.length === 0){
            section.innerHTML = "<center>No matters</center>";
            return;
        }
        // Add items
        for (var key in data){
            if (data.hasOwnProperty(key)){
                var dataItem = data[key];
                section.appendChild(mattersDOM.parseItem(dataItem));
            }
        }
        // Rearrange cards
        cards.refresh();
    },
}


// Load and view matters from the server
function loadMatters(){
    mattersDOM.clear();
    server.getData('/minutegen/api/matters?sort=id', mattersDOM.addItems);
}

// Search matters
function searchMatters(e){
    if (e.keyCode === 13){
        var text = document.getElementById('searchfield').value;
        mattersDOM.clear();
        mattersDOM.getDOM.innerHTML = "<center>Loading...</center>";
        if (text == ""){
            navbar.setState(1);
        } else {
            navbar.setState(2);
        }
        server.getData('/minutegen/api/matters?search='.concat(text, '&sort=id'), mattersDOM.addItems);
    }
}
