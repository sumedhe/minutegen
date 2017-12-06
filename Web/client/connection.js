// Get data from the API using the given url
// After the API respond call func();
var server = {
    basepath: '/minutegen/api',

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

    request: function (url, data, method, successFunction = null, errorFunction = null){
        var xhr = new XMLHttpRequest();
        xhr.open(method, url, true);
        xhr.setRequestHeader("Content-type", "application/json");
        xhr.onreadystatechange = function () {
            // Request is complete & Valid response
            if (xhr.readyState == 4 && [200,202,400,401,404,500].indexOf(xhr.status) != -1){
                var jsonString = xhr.responseText;
                console.log('Response: ' + jsonString + '\n Status:' + xhr.status); // TMP
                data = JSON.parse(jsonString);

                // If success
                if ([200, 202].indexOf(xhr.status) != -1){
                    if (successFunction != null) { successFunction(data['data']); }
                } else { // If error
                    if (errorFunction != null) { errorFuntion(data['data']); }
                }

                // Show message
                if (xhr.status != 200) {
                    showMessage(data['message']);
                }

            }
        };
        var json = JSON.stringify(data);
        xhr.send(json);
    }
}

// Generate api path
function api($path){
    return server.basepath + '/' + $path;
}
