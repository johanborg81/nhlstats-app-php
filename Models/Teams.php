<?php

namespace nhl\Models;

/**
 * Teams class
 * 
 * @author Johan Borg <johanborg81@hotmail.com>
 * @package nhl\Models
 */
class Teams {

    /**
     * Get the url to the api
     *
     * @access private
     * @author Johan Borg <johanborg81@hotmail.com>
     */
    private function get_teams() {
        $url = 'https://statsapi.web.nhl.com/api/v1/teams/';
        return $url;
    }

    /**
     * Get the teams through a curl request
     *
     * @access public
     * @author Johan Borg <johanborg81@hotmail.com>
     */
    protected function set_teams()
    {
        $curl = curl_init();
        $resource = $this->get_teams();
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

    private function get_team() {
        $get_id = $_GET['id'];
        $url = "https://statsapi.web.nhl.com/api/v1/teams/$get_id?expand=teams.stats";
        return $url;
    }

    protected function set_team() {
        $curl = curl_init();
        $resource = $this->get_team();
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

    private function get_roster() {
        $get_id = $_GET['id'];
        $url = "https://statsapi.web.nhl.com/api/v1/teams/$get_id/roster";
        return $url;
    }

    protected function set_roster() {
        $curl = curl_init();
        $resource = $this->get_roster();
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

    private function get_current_season() {
        $id = $_GET['id'];
        $url = "https://statsapi.web.nhl.com/api/v1/teams/$id/stats";
        return $url;
    }

    protected function set_current_season() {
        $curl = curl_init();
        $resource = $this->get_current_season();
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

    private function get_last_season() {
        $id = $_GET['id'];
        $url = "https://statsapi.web.nhl.com/api/v1/teams/$id?expand=team.stats&season=20192020";
        return $url;
    }

    public function set_last_season() {
        $curl = curl_init();
        $resource = $this->get_last_season();
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
}