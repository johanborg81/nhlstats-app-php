<?php

class RouterTest extends \PHPUnit\Framework\TestCase {
    /**
     * @test
     */
    public function assertClassHasAttributes() {
        $this->assertClassHasAttribute('request', nhl\Core\Router::class, "It doesn't have any attributes");
    }

    /**
     * Test if the init.php directory exists
     * 
     * @test
     *
     * @return void
     */
    public function checkIfDirectoryExists() {
        $path = '\wamp64\www\phpsandbox\php-con-to-pro\nhlstats_curl\Config/';

        $this->assertDirectoryExists($path, "Path is incorrect or doesn't exists");
    }
}