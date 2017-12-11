        </div>
        <!-- Load basic scripts -->
        <script src=<?= script('init');?>></script>
        <script src=<?= script('navbar');?>></script>
        <script src=<?= script('dropdown');?>></script>
        <script src=<?= script('matter-cards');?>></script>
        <script src=<?= script('minigrid.min');?>></script>
        <script src=<?= script('sidebar');?>></script>
        <script src=<?= script('accordion');?>></script>

        <!-- Client: Load scripts for data access -->
        <script src=<?= client('connection');?>></script>
        <script src=<?= client('session');?>></script>
        <script src=<?= client('helper');?>></script>

        <!-- Client: Load controllers of client -->
        <script src=<?= client('controllers/matters');?>></script>
        <script src=<?= client('controllers/matter-log');?>></script>
        <script src=<?= client('controllers/members');?>></script>
        <script src=<?= client('controllers/memos');?>></script>
        <script src=<?= client('controllers/minutes');?>></script>
        <script src=<?= client('controllers/notifications');?>></script>
        <script src=<?= client('controllers/search-history');?>></script>
        <script src=<?= client('controllers/system-log');?>></script>
        <script src=<?= client('controllers/matter-log');?>></script>

        <!-- Client: Load presentation layer of client -->
        <script src=<?= client('presentation/actions');?>></script>
        <script src=<?= client('presentation/matter-editor-dom');?>></script>
        <script src=<?= client('presentation/matter-log-dom');?>></script>
        <script src=<?= client('presentation/matters-dom');?>></script>
        <script src=<?= client('presentation/members-dom');?>></script>
        <script src=<?= client('presentation/minutes-dom');?>></script>
        <script src=<?= client('presentation/notifications-dom');?>></script>
        <script src=<?= client('presentation/search-history-dom');?>></script>
        <script src=<?= client('presentation/system-log-dom');?>></script>
        <script src=<?= client('presentation/popup-dom');?>></script>

        <!-- Autoload -->
        <script type="text/javascript">
            var BASEURL = '<?= BASEURL ?>';
        </script>

    </body>
</html>
