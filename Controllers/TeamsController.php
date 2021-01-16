<?php

namespace nhl\Controllers;
use nhl\Models\Teams;

class TeamsController extends Teams {
    /**
     * Creates a list of all teams
     *
     * @access public
     * @author Johan Borg <johanborg81@hotmail.com>
     * @return void
     */
    public function team_list() {
        $teams = $this->set_teams();
        if (is_array($teams) || is_object($teams)) {
            foreach ($teams as $team) {
                if (is_array($team) || is_object($team)) {
                    foreach ($team as $name) {
                        echo '<li><a href='.BASE_URL.'views/team.php?id='.$name['id'].'&name='.$name['name'].'>'.$name['name'].'</a></li>';
                    }
                }
            }
        }
    }

    /**
     * Show the team on the team page.
     *
     * @access public
     * @author Johan Borg <johanborg81@hotmail.com>
     * @return void
     */
    public function show_team() {
        $team = $this->set_team();
        function get_team_info(array $team) {
            return iterator_to_array(new \RecursiveIteratorIterator(new \RecursiveArrayIterator($team)), false);
        }
        $info = get_team_info($team);
        return $info;
    }

    /**
     * Show the roster for the team on the team page.
     *
     * @access public
     * @author Johan Borg <johanborg81@hotmail.com>
     * @return void
     */
    public function show_roster() {
        $roster = $this->set_roster();
        if (is_array($roster) || is_object($roster)) {
            foreach ($roster as $players) {
                if (is_array($players) || is_object($players)) {
                    foreach ($players as $player => $stats) {
                        echo "<ul>";
                        echo "<li?><a href=".BASE_URL."views/player.php?id={$stats['person']['id']}>{$stats['person']['fullName']} | {$stats['jerseyNumber']} | {$stats['position']['code']}</a></li>";
                        echo "</ul>";
                    }
                }
            }
        }
    }

    /**
     * List the current season stats for the team on the team page.
     *
     * @access public
     * @author Johan Borg <johanborg81@hotmail.com>
     * @return void
     */
    public function show_current_season() {
        $roster = $this->set_current_season();
        function get_stats(array $roster) {
            return iterator_to_array(new \RecursiveIteratorIterator(new \RecursiveArrayIterator($roster)), false);
        }
        $stats = get_stats($roster);
        return $stats;
    }

    /**
     * List last season stats for the team on the team page
     *
     * @access public
     * @author Johan Borg <johanborg81@hotmail.com>
     * @return void
     */
    public function show_last_season() {
        $last = $this->set_last_season();
        function get_last_stats(array $last) {
            return iterator_to_array(new \RecursiveIteratorIterator(new \RecursiveArrayIterator($last)), false);
        }
        $previous = get_last_stats($last);
        return $previous;
    }
}