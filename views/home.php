<?php

require_once '../Config/init.php';

require_once '../inc/header.php';

require_once '../inc/navbar.php';

use nhl\Controllers\TeamsController;
use nhl\Controllers\PlayersController;

$random = new PlayersController();
$player = $random->home_player();

$current = $random->home_player_current_stats();
$last = $random->home_player_last_stats();
$career = $random->home_player_career_stats();
$playoff = $random->home_player_playoff_stats();

$teams = new TeamsController();


?>
<div class="container">
    <div class="grids">
        <section class="section__left">
            <section class="random__player">
                <h2><?= $player['fullName']; ?></h2>
                <ul class="player__info">
                    <li><span>Birthdate:</span> <?= $player['birthDate']; ?></li>
                    <li><span>Age:</span> <?= $player['currentAge']; ?></li>
                    <li><span>City:</span> <?= $player['birthCity']; ?></li>
                    <li><span>Height:</span> <?= $player['height']; ?></li>
                    <li><span>Number:</span> <?= $player['primaryNumber']; ?></li>
                    <li><span>Position:</span> <?= $player['primaryPosition']['name']; ?></li>
                    <li><span>Shoots/Catches:</span> <?= $player['shootsCatches']; ?></li>
                    <li><span>Team:</span> <?= $player['currentTeam']['name']; ?></li>
                </ul>
            </section>
            <?php

            include_once '../inc/home/current-stats.php';
            include_once '../inc/home/last-stats.php';
            include_once '../inc/home/career-stats.php';
            include_once '../inc/home/playoff-stats.php';

            ?>
            <section class="buttons">
                <button id="current__season">Current Season</button>
                <button id="last__season">Last Season</button>
                <button id="career__stats">Career Stats</button>
                <button id="playoff__stats">Playoff Stats</button>
            </section>
        </section>
        <section class="section__right">
            <section class="teams">
                <ul class="teams__list">
                    <h2>Teams</h2>
                    <?php $teams->team_list(); ?>
                </ul>
            </section>
        </section>
    </div>
</div>

<?php

require_once '../inc/footer.php';
