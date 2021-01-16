<?php

require_once '../Config/init.php';

require_once '../inc/header.php';

require_once '../inc/navbar.php';

use nhl\Controllers\TeamsController;

$team = new TeamsController();
$info = $team->show_team();
$current = $team->show_current_season();
$last = $team->show_last_season();

?>
<div class="container">
    <div class="grids">
        <section class="section__left">
            <?php

            require_once '../inc/teams/team-info.php';

            ?>
        </section>
        <section class="section__middle">
            <?php

            $team->show_roster();

            ?>
        </section>
        <section class="section__right"></section>
    </div>
    <section class="section__bottom">
        <?php

        require_once '../inc/teams/team-current-stats.php';
        require_once '../inc/teams/team-last-stats.php';

        ?>
    </section>
    <section class="buttons">
        <button id="current">Current Season</button>
        <button id="last">Last Season</button>
    </section>
</div>