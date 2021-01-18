<?php

require_once '../Config/init.php';

require_once '../inc/header.php';

require_once '../inc/navbar.php';

use nhl\Controllers\PlayersController;
use nhl\Controllers\TeamsController;

$stats = new PlayersController();
$player = $stats->show_player();
$current = $stats->show_current_stats();
$last = $stats->show_last_stats();

$team = new TeamsController();

?>
<div class="container">
    <section class="grids">
        <section class="section__left">
            <?php

            include_once '../inc/player/player-info.php';

            ?>
        </section>
        <section class="section__middle">
            <?php

            include_once '../inc/player/player-current-stats.php';
            include_once '../inc/player/player-last-stats.php';
            include_once '../inc/player/player-career-stats.php';
            include_once '../inc/player/player-playoff-stats.php';

            ?>
        </section>
        <section class="section__right">
        
        </section>
    </section>
    <section class="buttons">
        <button id="current__season">Current Season</button>
        <button id="last__season">Last Season</button>
        <button id="career__stats">Career Stats</button>
        <button id="playoff__stats">Playoff Stats</button>
    </section>
</div>
<?php

require '../inc/footer.php';