// Get data from the API using the given url
// After the API respond call func();
var server = {
    getData: function (url, func){
        var xhr = new XMLHttpRequest();
        xhr.open("GET", url, true);
        xhr.setRequestHeader("Content-type", "application/json");
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var jsonString = xhr.responseText;
                data = JSON.parse(jsonString);
                func(data);
                // document.getElementById('demo').innerHTML = jsonString;
            }
        };
        var data = JSON.stringify({});
        xhr.send(data);
    }
}
