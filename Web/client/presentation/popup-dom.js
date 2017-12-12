// Notification DOM
var popupDOM = {
    // Get DOM Element
    getDOM: function () { return getDOM('popup'); },

    // Clear the DOM content
    clear: function (){ mattersDOM.getDOM().innerHTML = ""},

    // Show the window
    show: function (){ getDOM('popup').style.display='block'; }, // Show popup

    hide: function (){ getDOM('popup').style.display = "none"; matters.refresh(); alert();},


}
