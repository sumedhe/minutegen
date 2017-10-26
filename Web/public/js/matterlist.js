// Add matters to the matters page
function addMatters(data){
    var section = document.getElementById('matterlist');
    section.innerHTML = ""; // tmp
    if (data.length === 0){
        section.innerHTML = "<center>No matters</center>";
        return;
    }
    for (var key in data){
        if (data.hasOwnProperty(key)){
            // Add new matter item
            var item = data[key];

            var button = document.createElement('button');
            button.className += 'accordion';
            button.innerHTML = item['title'];
            section.appendChild(button);

            var div = document.createElement('div');
            div.className += 'panel';
            div.innerHTML = "<p>".concat(item['content'], "<br><br>Minute Index: ", item['minute_index'], "<br><br>Section: ", item['section_name'], "<br><br>State: ", item['state'], "</p>");
            section.appendChild(div);
        }
    }

    // Add bottom space
    var div = document.createElement('div');
    div.style.height="200px";
    section.appendChild(div);

    updateAccordion();
}


// Load and view matters from the server
function loadMatters(){
    var data = getFromAPI('/minutegen/api/matters', addMatters);
}

// Search matters
function searchMatters(e){
    if (e.keyCode === 13){
        var section = document.getElementById('matterlist');
        section.innerHTML = "<center>Loading...</center>";
        var text = document.getElementById('myInput').value;
        var data = getFromAPI('/minutegen/api/matters?search='.concat(text), addMatters);
    }
}
