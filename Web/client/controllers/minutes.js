var minutes = {
    // Load minutes
    load: function (){
        minutesDOM.clear();
        server.get(api('minutes?sort=-id'), minutesDOM.addItems);
    },

    // Generate Minute
    generateMinute: function(){
        server.get(api('minutes/generate'), minutes.load);
    },


    // Generate Minute
    finalizeMinute: function(){
        server.get(api('minutes/finalize'), minutes.load);
    },

}
