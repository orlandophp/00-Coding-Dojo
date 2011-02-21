<?php
/**
 * We use the PHPUnit testing framework available from http://phpunit.de/
 * or http://github.com/sebastianbergmann/phpunit/, preferrably installed
 * via PEAR.
 */
require_once 'PHPUnit/Framework.php';

/**
 * Include the Production Code...
 */
require_once 'main.php';

/**
 * Methods with names beginning with "test" will be run
 * automatically by executing "phpunit test.php".
 */
class Test extends PHPUnit_Framework_TestCase
{
    /**
     * Whatever object we're testing, usually initialized
     * in the setUp() method.
     */
    public $fixture;

    function setUp ( )
    {
        // Executed before every test method...
    }

    function tearDown ( )
    {
        // Executed after every test method...
    }

    function test_something ( )
    {
        $this->assertTrue(False);
    }
} // END Test
