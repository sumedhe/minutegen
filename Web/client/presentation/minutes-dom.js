// Add minute to the minutes list
var minutesDOM = {
    // Button sets to show
    buttonList: {
        'NOTPROCESSED' : ['cancel', 'picture_as_pdf', 'list'], // NOT YET PROCESSED TO MEETING
        'HOLD' : ['update', 'picture_as_pdf', 'list'], // HOLD
        'APPROVED' : ['done', 'picture_as_pdf', 'list'], // APPROVED

    },

    // Get DOM Element
    getDOM: function () { return document.getElementById('minutes'); },

    // Clear the DOM content
    clear: function (){ minutesDOM.getDOM().innerHTML = ""},

    setStateColor: function (dom, state){
        if (dom.classList){
            dom.classList.add(state);
        }
    },
    // Add new minute item
    addItems: function (data){
      var section = minutesDOM.getDOM();
      // Add items
      for (var key in data){
          if (data.hasOwnProperty(key)){
              var dataItem = data[key];
              section.appendChild(minutesDOM.parseItem(dataItem));
          }
      }
      // If no minutes
      var section = minutesDOM.getDOM();
      if (!section.hasChildNodes()){
          section.innerHTML = "<center>No minutes</center>";
      }

    },

    // Json item to minute DOM
    parseItem: function (dataItem){
        var div = domTools.createDiv('minute-item');
        var accordion = domTools.createDiv('minute-accordion');
        var buttons = domTools.createDiv('minute-noti-icon minute-transparent');
        var span = domTools.createSpan('minute-name', dataItem['minute_index']);
        var panel = domTools.createDiv('minute-panel');
        var table = domTools.createTable('minute-accordion-table');
        var tr = domTools.createTr();
        var td_1_a = domTools.createTd(data['Date']);
        var td_1_b = domTools.createTd(dataItem['datetime']);
        var td_2_a = domTools.createTd(data['Matters Approved']);
        var td_2_b = domTools.createTd(dataItem['']);
        var td_3_a = domTools.createTd(data['Pending Matters']);
        var td_3_b = domTools.createTd(dataItem['']);
        var td_4_a = domTools.createTd(data['Attendance']);
        var td_4_b = domTools.createTd(dataItem['']);

        div.appendChild(accordion);
        accordion.appendChild(span);
        accordion.appendChild(buttons);
        div.appendChild(panel);
        panel.appendChild(table);
        table.appendChild(tr);
        tr.appendChild(td_1_a);
        tr.appendChild(td_1_b);
        table.appendChild(tr);
        tr.appendChild(td_2_a);
        tr.appendChild(td_2_b);
        table.appendChild(tr);
        tr.appendChild(td_3_a);
        tr.appendChild(td_3_b);
        table.appendChild(tr);
        tr.appendChild(td_4_a);
        tr.appendChild(td_4_b);

        minutesDOM.setStateColor(accordion, dataItem[''].toLowerCase());
        return div;

        // x document.createElement('tr');
        //  x.iner data
        //  table.a x
        //  td
        // HOW TO CREATE THE TABLE ??

    },
}
