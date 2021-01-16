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