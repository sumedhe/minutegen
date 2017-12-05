// Get data from the API using the given url
// After the API respond call func();
var server = {
    get: function (url, func){
        server.request(url, {}, 'GET', func);
    },

    post: function (url, data, func){
        server.request(url, data, 'POST', func);
    },

    put: function (url, data, func){
        server.request(url, data, 'PUT', func);
    },

    delete: function (url, data, func){
        server.request(url, data, 'DELETE', func);
    },

    request: function (url, data, method, func){
        var xhr = new XMLHttpRequest();
        xhr.open(method, url, true);
        xhr.setRequestHeader("Content-type", "application/json");
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var jsonString = xhr.responseText;
                data = JSON.parse(jsonString);
                func(data);
            }
        };
        var json = JSON.stringify(data);
        xhr.send(json);
    }
}
