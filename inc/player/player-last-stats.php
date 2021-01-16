<section class="last__season">
    <h2>Last Season</h2>
    <ul class="stats__list">
        <li><span>Assists: </span><?= $last['splits'][0]['stat']['assists']; ?></li>
        <li><span>Goals: </span><?= $last['splits'][0]['stat']['goals']; ?></li>
        <li><span>Points: </span><?= $last['splits'][0]['stat']['points']; ?></li>
        <li><span>Penalty Minutes: </span><?= $last['splits'][0]['stat']['pim']; ?></li>
        <li><span>+-: </span><?= $last['splits'][0]['stat']['plusMinus']; ?></li>
        <li><span>Games: </span><?= $last['splits'][0]['stat']['games']; ?></li>
        <li><span>GWG: </span><?= $last['splits'][0]['stat']['gameWinningGoals']; ?></li>
        <li><span>Overtime Goals: </span><?= $last['splits'][0]['stat']['overTimeGoals']; ?></li>
        <li><span>Shots: </span><?= $last['splits'][0]['stat']['shots']; ?></li>
        <li><span>Shot %: </span><?= $last['splits'][0]['stat']['shotPct']; ?></li>
        <li><span>Power Play Goals: </span><?= $last['splits'][0]['stat']['powerPlayGoals']; ?></li>
        <li><span>Power Play Points: </span><?= $last['splits'][0]['stat']['powerPlayPoints']; ?></li>
        <li><span>Shorthanded Goals: </span><?= $last['splits'][0]['stat']['shortHandedGoals']; ?></li>
        <li><span>Shorthanded Points: </span><?= $last['splits'][0]['stat']['shortHandedPoints']; ?></li>
        <li><span>Time on Power Play: </span><?= $last['splits'][0]['stat']['powerPlayTimeOnIce']; ?></li>
        <li><span>Time on Power Play / Game: </span><?= $last['splits'][0]['stat']['powerPlayTimeOnIcePerGame']; ?></li>
        <li><span>Shorthanded Time On Ice: </span><?= $last['splits'][0]['stat']['shortHandedTimeOnIce']; ?></li>
        <li><span>Shorthanded Time On Ice / Game: </span><?= $last['splits'][0]['stat']['shortHandedTimeOnIcePerGame']; ?></li>
        <li><span>Time On Ice: </span><?= $last['splits'][0]['stat']['timeOnIce']; ?></li>
        <li><span>Time On Ice / Game: </span><?= $last['splits'][0]['stat']['timeOnIcePerGame']; ?></li>
        <li><span>Face Off %: </span><?= $last['splits'][0]['stat']['faceOffPct']; ?></li>
        <li><span>Hits: </span><?= $last['splits'][0]['stat']['hits']; ?></li>
        <li><span>Blocked Shots: </span><?= $last['splits'][0]['stat']['blocked']; ?></li>
    </ul>
</section>