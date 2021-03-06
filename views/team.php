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
    <div class="grids__team">
        <section class="section__left">
            <?php

            require_once '../inc/teams/team-info.php';

            ?>
        </section>
        <section class="section__middle">
            <div class="team__roster">
                <h2>Current Roster</h2>
                <?php

                $team->show_roster();

                ?>
            </div>
        </section>
        <section class="section__right">
            <section class="teams">
                <ul class="teams__list">
                    <h2>Teams</h2>
                    <?php

                    $team->team_list();

                    ?>
                </ul>
            </section>
        </section>
        <div class="bottom">
            <section class="buttons">
                <button id="current__season">Current Season</button><br>
                <button id="last__season">Last Season</button>
            </section>
            <section class="section__bottom">
                <?php

                require_once '../inc/teams/team-current-stats.php';
                require_once '../inc/teams/team-last-stats.php';

                ?>
            </section>

        </div>
    </div>


</div>
<?php

require '../inc/footer.php';
