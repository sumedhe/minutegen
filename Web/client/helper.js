// Button list
buttonIcons = {
    'B_EDIT'            : 'edit',
    'B_CREATE_MATTER'   : 'add_to_photos',
    'B_DUPLICATE'       : 'content_copy',
    'B_DELETE'          : 'delete',
    'B_NOTIFICATION_ON' : 'notifications',
    'B_NOTIFICATION_OFF': 'notifications_off',
    'B_LOG'             : 'info',
};

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
        var item = createButton(i);
        item.className = classNames;
        list.push(item);
    })
    return list;
}

// Create get button
function createButton(name){
    var i = document.createElement('i');
    i.innerHTML = buttonIcons[name];
    i.name = name;
    return i;
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
    console.log(list);
    console.log(current);

    return list[(list.indexOf(current) + 1) % list.length];
}

// Show Loader
function showLoader(){
    getDOM('contentarea').innerHTML = "<center><div class='loader'></div></center>";
}

// Get Child element by it's class name
// function getChildByClass(parent, className){
//     parent.getElementsByClassName('')
// }
