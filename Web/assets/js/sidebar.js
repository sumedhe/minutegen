function toggleSidebar() {
    var sidebar = document.getElementById('sidebar');
    var searchbar = document.getElementById('searchbar');
    var page = document.getElementById('page');
    if (getComputedStyle(sidebar).visibility == 'hidden'){
        sidebar.style.width = '230px';
        sidebar.style.visibility = 'visible';
        page.style.marginLeft = '150px';
        searchbar.style.marginLeft = '80px'
    } else {
        sidebar.style.width = '0';
        sidebar.style.visibility = 'hidden';
        page.style.marginLeft = '0';
        searchbar.style.marginLeft = '30px'
    }
}
