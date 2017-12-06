var domTools = {
    createDiv: function (classNames, innerHTML = ''){
        var div = document.createElement('div');
        div.className = classNames;
        div.innerHTML = innerHTML;
        return div;
    },

    createSpan: function (classNames, innerHTML = ''){
        var span = document.createElement('span');
        span.className = classNames;
        span.innerHTML = innerHTML;
        return span;
    },

    createTable: function (classNames){
        var i = document.createElement('table');
        i.className = classNames;
        return i;
    },

    createTr: function (){
        var i = document.createElement('tr');
        return i;
    },

    createTd: function (tableTd){
        var i = document.createElement('td');
        i.innerHTML = tableTd;
        return i;
    },

    createIconList: function (classNames, iconNames){
        var list = [];
        iconNames.forEach(function(i){
            var icon = document.createElement('i');
            icon.className = classNames;
            icon.innerHTML = i;
            list.push(icon)
        })
        return list;
    },

    createTable: function (classNames, tableRows){
        var table = [];
        tableRows.forEach(function(i){
            var table = document.createElement('tr');
            var td = document.createElement('td');
            table.innerHTML = 'Date';
            table.innerHTML = i;
            table.innerHTML = 'Date';
            table.innerHTML = 'Date';

            list.push(icon)
        })
        return list;
    },

    removeClasses: function (dom, classList){
        classList.forEach(function(i){
            if (dom.classList && dom.classList.contains(i)){
                dom.classList.remove(i);
            }
        })
    },

}
