var domTools = {
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

    removeClasses: function (dom, classList){
        classList.forEach(function(i){
            if (dom.classList && dom.classList.contains(i)){
                dom.classList.remove(i);
            }
        })
    },

}
