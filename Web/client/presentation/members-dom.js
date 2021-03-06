// Members DOM
var membersDOM = {
    // Get DOM Element
    getDOM: function () { return getDOM('contentarea'); },

    // Clear the DOM content
    clear: function (){ mattersDOM.getDOM().innerHTML = ""},

    // Add new member item
    addItems: function (data){
        membersDOM.getDOM().innerHTML = "<div style='margin-top: 48px;'><div class='member-item'><div class='member-title'><span class='member-title'>Members</span></div></div>";
        data.forEach(function(i){
            membersDOM.getDOM().innerHTML += membersDOM.parseItem(i);
        });
        refreshAccordions();

        // Set delete actions
        var deleteButtons = document.getElementsByClassName("member-delete");
        var i;
        for (i = 0; i < deleteButtons.length; i++) {
            // alert(b.id);
            deleteButtons[i].onclick = function(e){
                members.delete(e.target.parentNode.parentNode.dataset.id);
            };
        }
    },

    // Json item to member DOM
    parseItem: function (dataItem){
        var str = "  <div class='member-item' data-id=" + dataItem['id'] + "><div class='accordion member-accordion'><span class='member-name'> " + dataItem['full_name'] +" </span></div><div class='member-panel'><table class='memberTable'><tr><td>First Name</td><td> " + dataItem['first_name'] + "</td></tr><tr><td>Last Name</td><td> " + dataItem['last_name'] + " </td></tr><tr><td>Email</td><td> " + dataItem['email'] + "</td></tr><tr><td>Member Since</td><td> " + dataItem['datetime'] + "</td></tr></table><button date-id =  " + dataItem['datetime'] + " type='' class='member-delete'>Delete</button></div></div>";
        return str;
    },
}
