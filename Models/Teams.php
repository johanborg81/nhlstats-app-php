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
     * Set options for the curl
     *
     * @access public
     * @author Johan Borg <johanborg81@hotmail.com>
     * @param [type] $curl
     * @param [type] $resource
     * @return void
     */
    private function get_curl($curl, $resource)
    {
        curl_setopt($curl, CURLOPT_URL, $resource);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
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

    private function get_team() {
        $get_id = $_GET['id'];
        $url = "https://statsapi.web.nhl.com/api/v1/teams/$get_id";
        return $url;
    }

    protected function set_team() {
        $curl = curl_init();
        $resource = $this->get_team()."?expand=teams.stats";
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

    protected function set_roster() {
        $curl = curl_init();
        $resource = $this->get_team(). "/roster";
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

    protected function set_current_season() {
        $curl = curl_init();
        $resource = $this->get_team()."/stats";
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

    public function set_last_season() {
        $curl = curl_init();
        $resource = $this->get_team(). "?expand=team.stats&season=20192020";
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