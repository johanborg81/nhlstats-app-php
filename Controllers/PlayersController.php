<?php

namespace nhl\Controllers;
use nhl\Models\Player;

/**
 * PlayersController class
 * 
 * @package nhl\Controllers
 */
class PlayersController extends Player {
    /**
     * Creates a player on the homepage
     *
     * @access public
     * @author Johan Borg
     * @return void
     */
    public function home_player() {
        $random_player = $this->set_home_player();
        if (is_array($random_player) || is_object($random_player)) {
            foreach ($random_player as $random) {
                if (is_array($random) || is_object($random)) {
                    foreach ($random as $player) {
                        return $player;
                    }
                }
            }
        }
    }

    /**
     * List the current stats for the player on the homepage
     *
     * @access public
     * @author Johan Borg
     * @return array
     */
    public function home_player_current_stats() {
        $current_stats = $this->set_home_player_current_stats();
        function get_current_stats(array $current_stats) {
            return iterator_to_array(new \RecursiveIteratorIterator(new \RecursiveArrayIterator($current_stats)), false);
        }
        $stats = get_current_stats($current_stats);
        return $stats;
    }

    /**
     * List the last season stats for the player on the homepage
     *
     * @access public
     * @author Johan Borg
     * @return array
     */
    public function home_player_last_stats() {
        $last_stats = $this->set_home_player_last_stats();
        function get_last_stats(array $last_stats) {
            return iterator_to_array(new \RecursiveIteratorIterator(new \RecursiveArrayIterator($last_stats)), false);
        }
        $stats = get_last_stats($last_stats);
        return $stats;
    }

    /**
     * List the career stats for the player on the homepage
     *
     * @access public
     * @author Johan Borg
     * @return array
     */
    public function home_player_career_stats() {
        $career_stats = $this->set_home_player_career_stats();
        function get_career_stats(array $career_stats) {
            return iterator_to_array(new \RecursiveIteratorIterator(new \RecursiveArrayIterator($career_stats)), false);
        }
        $career = get_career_stats($career_stats);
        return $career;
    }

    /**
     * List the playoff stats for the player on the homepage
     *
     * @access public
     * @author Johan Borg
     * @return array
     */
    public function home_player_playoff_stats() {
        $playoff_stats = $this->set_home_player_playoff_stats();
        function get_playoff_stats(array $playoff_stats) {
            return iterator_to_array(new \RecursiveIteratorIterator(new \RecursiveArrayIterator($playoff_stats)), false);
        }
        $playoff = get_playoff_stats($playoff_stats);
        return $playoff;
    }

    /**
     * Show the player on the player page
     *
     * @access public
     * @author Johan Borg
     */
    public function show_player() {
        $stats = $this->get_player_stats();
        if (is_array($stats) | is_object($stats)) {
            foreach ($stats as $stat) {
                if (is_array($stat) | is_object($stat)) {
                    foreach ($stat as $player) {
                        return $player;
                    }
                }
            }
        }
    }

    /**
     * List the current stats for the player on the player page.
     *
     * @access public
     * @author Johan Borg
     * @return array
     */
    public function show_current_stats() {
        $stats = $this->get_player_current_stats();
        if (is_array($stats) | is_object($stats)) {
            foreach ($stats as $stat) {
                if (is_array($stat) | is_object($stat)) {
                    foreach ($stat as $current) {
                        return $current;
                    }
                }
            }
        }
    }

    /**
     * List the last season stats for the player on the player page.
     *
     * @access public
     * @author Johan Borg
     * @return array
     */
    public function show_last_stats() {
        $stats = $this->get_player_last_stats();
        if (is_array($stats) | is_object($stats)) {
            foreach ($stats as $stat) {
                if (is_array($stat) | is_object($stat)) {
                    foreach ($stat as $last) {
                        return $last;
                    }
                }
            }
        }
    }
}