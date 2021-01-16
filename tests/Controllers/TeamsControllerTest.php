<?php

class TeamsControllerTest extends \PHPUnit\Framework\TestCase {
    /**
     * @test
     */
    public function checkIfString() {
        $test = new \nhl\Controllers\TeamsController;

        $actual = $test->team_list();

        $this->assertTrue(!is_string($actual), 'Content is not an external resource');
    }
}