var navbar = {
    setState: function (state){
        var navbar = document.getElementById('navbar');
        if (state === 1){
            navbar.classList.add('bg-primary')
            navbar.classList.remove('bg-secondary');
            navbar.classList.remove('bg-ternary');
        } else if (state === 2) {
            navbar.classList.remove('bg-primary')
            navbar.classList.add('bg-secondary');
            navbar.classList.remove('bg-ternary');
        } else if (state === 3){
            navbar.classList.remove('bg-primary')
            navbar.classList.remove('bg-secondary');
            navbar.classList.add('bg-ternary');
        }
    }
}
