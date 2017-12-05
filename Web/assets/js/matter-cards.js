var matterCards = {
    // Card view functions
    grid:null,
    refresh: function (){
        grid = new Minigrid({
          container: '.matter-cards',
          item: '.matter-card',
          gutter: 12
        });
        grid.mount();
    },

    update: function () {
      grid.mount();
    }
}



document.addEventListener('DOMContentLoaded', matterCards.refresh);
window.addEventListener('resize', matterCards.update);
