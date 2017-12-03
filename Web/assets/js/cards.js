var cards = {
    grid:null,
    refresh: function (){
        grid = new Minigrid({
          container: '.cards',
          item: '.card',
          gutter: 12
        });
        grid.mount();
    },

    update: function () {
      grid.mount();
    }
}

document.addEventListener('DOMContentLoaded', cards.refresh);
window.addEventListener('resize', cards.update);
