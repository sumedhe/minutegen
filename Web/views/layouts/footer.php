        </div>
        <!-- Load basic scripts -->
        <script src=<?= script('main');?>></script>
        <script src=<?= script('navbar');?>></script>
        <script src=<?= script('dropdown');?>></script>
        <script src=<?= script('cards');?>></script>
        <script src=<?= script('minigrid.min');?>></script>
        <script src=<?= script('sidebar');?>></script>

        <!-- Load scripts for data access -->
        <script src=<?= client('connection');?>></script>
        <script src=<?= client('helper');?>></script>
        <script src=<?= client('matters');?>></script>
        <script src=<?= client('presentation/matters');?>></script>

    </body>
</html>
