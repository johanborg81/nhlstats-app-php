<?php

namespace nhl\Models;

/**
 * Player class
 * 
 * @author Johan Borg <johanborg81@hotmail.com>
 * @package nhl\Models
 */
class Player {

    /**
     * Get a player for the homepage
     *
     * @access public
     * @author Johan Borg <johanborg81@hotmail.com>
     * @return string
     */
    public function get_home_players() {
        $url = 'https://statsapi.web.nhl.com/api/v1/people/8476458';
        return $url;
    }

    /**
     * Sort curl data for the player on the homepage
     *
     * @access protected
     * @author Johan Borg <johanborg81@hotmail.com>
     * @return array
     */
    protected function set_home_player() {
        $curl = curl_init();
        $resource = $this->get_home_players();
        curl_setopt($curl, CURLOPT_URL, $resource);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($curl);
        
        if ($e = curl_error($curl)) {
            echo $e;
        } else {
            $obj = json_decode($result, true);
            return $obj;
        }
        curl_close($curl);
    }

    /**
     * Get the api data for the current season
     *
     * @access private
     * @author Johan Borg <johanborg81@hotmail.com>
     */
    private function get_home_player_current_stats() {
        $url = 'https://statsapi.web.nhl.com//api/v1/people/8476458/stats?stats=statsSingleSeason&season=20202021';
        return $url;
    }

    /**
     * Handle the current stats
     *
     * @access protected
     * @author Johan Borg <johanborg81@hotmail.com>
     */
    protected function set_home_player_current_stats() {
        $curl = curl_init();
        $resource = $this->get_home_player_current_stats();
        curl_setopt($curl, CURLOPT_URL, $resource);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($curl);
        
        if ($e = curl_error($curl)) {
            echo $e;
        } else {
            $obj = json_decode($result, true);
            return $obj;
        }
        curl_close($curl);
    }

    /**
     * Get the api data for the last season
     *
     * @access private
     * @author Johan Borg <johanborg81@hotmail.com>
     */
    private function get_home_player_last_stats() {
        $url = 'https://statsapi.web.nhl.com//api/v1/people/8476458/stats?stats=statsSingleSeason&season=20182019';
        return $url;
    }

    /**
     * Handle the data for the last season data stats
     *
     * @access protected
     * @author Johan Borg <johanborg81@hotmail.com>
     */
    protected function set_home_player_last_stats() {
        $curl = curl_init();
        $resource = $this->get_home_player_last_stats();
        curl_setopt($curl, CURLOPT_URL, $resource);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($curl);

        if ($e = curl_error($curl)) {
            echo $e;
        } else {
            $obj = json_decode($result, true);
            return $obj;
        }
        curl_close($curl);
    }

    /**
     * Get the api data for the career stats
     *
     * @access private
     * @author Johan Borg <johanborg81@hotmail.com>
     */
    private function get_home_player_career_stats() {
        $url = 'https://statsapi.web.nhl.com/api/v1/people/8476458?expand=person.stats,stats.team&stats=yearByYear,yearByYearPlayoffs,careerRegularSeason&site=en_nhl';
        return $url;
    }

    /**
     * Handle the data for the career stats
     *
     * @access protected
     * @author Johan Borg <johanborg81@hotmail.com>
     */
    protected function set_home_player_career_stats() {
        $curl = curl_init();
        $resource = $this->get_home_player_career_stats();
        curl_setopt($curl, CURLOPT_URL, $resource);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($curl);

        if ($e = curl_error($curl)) {
            echo $e;
        } else {
            $obj = json_decode($result, true);
            return $obj;
        }
        curl_close($curl);
    }

    /**
     * Get the data for the playoff stats
     *
     * @access private
     * @author Johan Borg <johanborg81@hotmail.com>
     */
    private function get_home_player_playoff_stats() {
        $url = 'https://statsapi.web.nhl.com/api/v1/people/8476458?expand=person.stats,stats.team&stats=yearByYear,yearByYearPlayoffs,careerRegularSeason,careerPlayoffs&site=en_nhl';
        return $url;
    }

    protected function set_home_player_playoff_stats() {
        $curl = curl_init();
        $resource = $this->get_home_player_playoff_stats();
        curl_setopt($curl, CURLOPT_URL, $resource);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($curl);

        if ($e = curl_error($curl)) {
            echo $e;
        } else {
            $obj = json_decode($result, true);
            return $obj;
        }
        curl_close($curl);
    }

    /**
     * Get the url with the id to a certain player
     *
     * @access private
     * @author Johan Borg <johanborg81@hotmail.com>
     * @return string
     */
    private function get_player_url() {
        $id = $_GET['id'];
        $url =  "https://statsapi.web.nhl.com/api/v1/people/$id";
        return $url;
    }

    /**
     * Set options for the curl
     *
     * @access public
     * @author Johan Borg <johanborg81@hotmail.com>
     * @param [type] $curl
     * @param [type] $resource
     * @return void
     */
    private function get_curl($curl, $resource) {
        curl_setopt($curl, CURLOPT_URL, $resource);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    }

    protected function get_player_stats() {
        $curl = curl_init();
        $resource = $this->get_player_url()."?expand=person.stats,stats.team&stats=yearByYear,yearByYearPlayoffs,careerRegularSeason,careerPlayoffs&site=en_nhl";
        $this->get_curl($curl, $resource);
        $result = curl_exec($curl);

        if ($e = curl_error($curl)) {
            echo $e;
        } else {
            $obj = json_decode($result, true);
            return $obj;
        }
        curl_close($curl);
    }

    protected function get_player_current_stats() {
        $curl = curl_init();
        $resource = $this->get_player_url()."/stats?stats=statsSingleSeason&season=20202021";
        $this->get_curl($curl, $resource);
        $result = curl_exec($curl);

        if ($e = curl_error($curl)) {
            echo $e;
        } else {
            $obj = json_decode($result, true);
            return $obj;
        }
        curl_close($curl);
    }

    protected function get_player_last_stats() {
        $curl = curl_init();
        $resource = $this->get_player_url(). "/stats?stats=statsSingleSeason&season=20192020";
        $this->get_curl($curl, $resource);
        $result = curl_exec($curl);

        if ($e = curl_error($curl)) {
            echo $e;
        } else {
            $obj = json_decode($result, true);
            return $obj;
        }
        curl_close($curl);
    }
}