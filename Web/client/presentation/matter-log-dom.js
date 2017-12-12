// Matter Log
var matterLogDOM = {
    // Json item to matterLog DOM
    parseItem: function (dataItem){
        var str = "<div class='matter-log-item'><div class='accordion matter-log-accordion'><span class='matter-log-date'>" + dataItem['datetime'] + "  -  </span><span class='matter-log-hearing'>" + dataItem['log_message'] + "</span><!-- <span class='matter-log-board'>IUD</span> --></div>";
        if (dataItem['title'] != null) { str += "<div class='matter-log-panel'></br><label class='matter-log-title-name'>" + dataItem['title'] + "</label><p class='matter-log-content'>" + dataItem['content'] + "</p><p> " + dataItem['amend'] + "</p></div></div>"; }
        return str;
    }
}
