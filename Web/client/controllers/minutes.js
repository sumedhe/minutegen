var minutes = {
    // Load minutes
    load: function (){
      minutesDOM.clear();
      server.get(api('minutes?sort=id'), minutesDOM.addItems);
    },

    // Search minutes
    search: function (keywords){
      minutesDOM.clear();
      minutesDOM.getDOM.innerHTML = "<center>Loading...</center>";
      server.get(api('minutes?search=').concat(keywords, '&sort=id'), minutesDOM.addItems);
    },

    // Add new minute
    insert: function (){

    },

    // Update minutes
    update: function (minuteIndex){

    },

    // Delete minutes
    delete: function (minuteIndex){

    },

    // Create the first minute
    createFirstMinute: function(){

    },

    // Create the final minute
    createFinalMinute: function(){

    },

    // Send the minute to the higher board
    sendMinute: function(){

    },
}
