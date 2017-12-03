var docTools = {
    createDiv: function (classNames, innerHTML = ''){
        var div = document.createElement('div');
        div.className = classNames;
        div.innerHTML = innerHTML;
        return div;
    },

    createIcon: function (classNames, iconName){
        var i = document.createElement('i');
        i.className = classNames;
        i.innerHTML = iconName;
        return i;
    },

    createIconList: function (classNames, iconName){
        var list = [];
        iconName.forEach(function(i){
            var icon = document.createElement('i');
            icon.className = classNames;
            icon.innerHTML = i;
            list.push(icon)
        })
        return list;
    },
}
