// Minutes DOM
var minutesDOM = {
    // Get DOM Element
    getDOM: function () { return getDOM('contentarea'); },

    // Clear the DOM content
    clear: function (){ mattersDOM.getDOM().innerHTML = ""},

    // Add new minute item
    addItems: function (data){
        minutesDOM.getDOM().innerHTML += "<div class='minute-item'><div class='minute-title'><span class='minute-title-text'>Minutes</span></div></div>";
        data.forEach(function(i){
            minutesDOM.getDOM().innerHTML += minutesDOM.parseItem(i);
        });
        refreshAccordions();
    },

    // Json item to minute DOM
    parseItem: function (dataItem){
        var str = "<div class='minute-item'><div class='accordion minute-accordion'><button class='minute-noti-icon noti-icon-cancel' name='noti' id='noti'><i class='material'>update</i></button><span class='minute-name'> Minute No: " + dataItem['minute_index'] + "</span><button type='submit' class='minute-transparent' name='download' id='download'><i class='material'>picture_as_pdf</i></button><button class='minute-transparent' name='matterview' id='matterview'><i class='material'>list</i></button></div><div class='minute-panel'><table class='minute-accordion-table'><tr><td>Date</td><td>" + dataItem['datetime'] + "</td></tr><tr><td>Matters Approved</td><td>" + dataItem['approved_count'] + "</td></tr><tr><td>Pending Matters</td><td> " + dataItem['sent_count'] + " </td></tr><tr><td>Attendance</td><td>" + dataItem['attendance_count'] + "</td></tr></table>";
        str += "<a href='" + server.basepath + '/minutes/download?minute_index=' + dataItem['minute_index'] + "' target='_blank'> <button type='submit' class='minute-raw' name='raw' id='raw'>Raw Minute</button> </a>   </div></div>";
        return str;
    },
}
