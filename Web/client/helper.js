// Get element by id
function getDOM(id, parent = document){
    return parent.getElementById(id);
}

// Get first element by class name
function getDOMClass(className, parent = document){
    var list = parent.getElementsByClassName(className);
    return list.length > 0 ? list[0] : null;
}

// Get elements by class name
function getAllDOMClass(className, parent = document){
    return parent.getElementsByClassName(className);
}

// Create DIV
function createDiv(classNames, innerHTML = ''){
    var div = document.createElement('div');
    div.className = classNames;
    div.innerHTML = innerHTML;
    return div;
}

// Create Material Icon
function createIcon(classNames, iconName){
    var i = document.createElement('i');
    i.className = classNames;
    i.innerHTML = iconName;
    return i;
}

// Create Material Icon List
function createIconList(classNames, iconNames){
    var list = [];
    iconNames.forEach(function(i){
        var icon = document.createElement('i');
        icon.className = classNames;
        icon.innerHTML = i;
        list.push(icon)
    })
    return list;
}

// Remove classes from dom
function removeClasses(dom, classList){
    classList.forEach(function(i){
        if (dom.classList && dom.classList.contains(i)){
            dom.classList.remove(i);
        }
    })
}

// Get next item from a list (round-robin)
function nextItem(list, current){
    return list[(list.indexOf(current) + 1) % list.length];
}

// Get Child element by it's class name
// function getChildByClass(parent, className){
//     parent.getElementsByClassName('')
// }
