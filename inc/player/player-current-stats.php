<section class="current__season">
    <h2>Current Stats</h2>
    <ul class="stats__list">
        <li><span>Assists: </span><?= $current['splits'][0]['stat']['assists']; ?></li>
        <li><span>Goals: </span><?= $current['splits'][0]['stat']['goals']; ?></li>
        <li><span>Points: </span><?= $current['splits'][0]['stat']['points']; ?></li>
        <li><span>Penalty Minutes: </span><?= $current['splits'][0]['stat']['pim']; ?></li>
        <li><span>+-: </span><?= $current['splits'][0]['stat']['plusMinus']; ?></li>
        <li><span>Games: </span><?= $current['splits'][0]['stat']['games']; ?></li>
        <li><span>GWG: </span><?= $current['splits'][0]['stat']['gameWinningGoals']; ?></li>
        <li><span>Overtime Goals: </span><?= $current['splits'][0]['stat']['overTimeGoals']; ?></li>
        <li><span>Shots: </span><?= $current['splits'][0]['stat']['shots']; ?></li>
        <li><span>Shot %: </span><?= $current['splits'][0]['stat']['shotPct']; ?></li>
        <li><span>Power Play Goals: </span><?= $current['splits'][0]['stat']['powerPlayGoals']; ?></li>
        <li><span>Power Play Points: </span><?= $current['splits'][0]['stat']['powerPlayPoints']; ?></li>
        <li><span>Shorthanded Goals: </span><?= $current['splits'][0]['stat']['shortHandedGoals']; ?></li>
        <li><span>Shorthanded Points: </span><?= $current['splits'][0]['stat']['shortHandedPoints']; ?></li>
        <li><span>Time on Power Play: </span><?= $current['splits'][0]['stat']['powerPlayTimeOnIce']; ?></li>
        <li><span>Time on Power Play / Game: </span><?= $current['splits'][0]['stat']['powerPlayTimeOnIcePerGame']; ?></li>
        <li><span>Shorthanded Time On Ice: </span><?= $current['splits'][0]['stat']['shortHandedTimeOnIce']; ?></li>
        <li><span>Shorthanded Time On Ice / Game: </span><?= $current['splits'][0]['stat']['shortHandedTimeOnIcePerGame']; ?></li>
        <li><span>Time On Ice: </span><?= $current['splits'][0]['stat']['timeOnIce']; ?></li>
        <li><span>Time On Ice / Game: </span><?= $current['splits'][0]['stat']['timeOnIcePerGame']; ?></li>
        <li><span>Face Off %: </span><?= $current['splits'][0]['stat']['faceOffPct']; ?></li>
        <li><span>Hits: </span><?= $current['splits'][0]['stat']['hits']; ?></li>
        <li><span>Blocked Shots: </span><?= $current['splits'][0]['stat']['blocked']; ?></li>
    </ul>
</section>