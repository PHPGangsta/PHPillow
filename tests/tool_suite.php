<?php
/**
 * phpillow couchdb backend test suite
 *
 * @version $Revision$
 * @license GPLv3
 */

// Set up environment
if ( !defined( 'PHPILLOW_TEST_ENV_SET_UP' ) )
{
    require dirname( __FILE__ ) . '/test_environment.php';
}

/**
 * Couchdb tool tests
 */
require 'tool/main_test.php';
require 'tool/string_stream_test.php';

/**
* Test suite for phpillow
*/
class phpillowToolTestSuite extends PHPUnit_Framework_TestSuite
{
    /**
     * Basic constructor for test suite
     * 
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->setName( 'Tool tests' );

        $this->addTest( phpillowToolTests::suite() );
        $this->addTest( phpillowStringStreamTests::suite() );
    }

    /**
     * Return test suite
     * 
     * @return prpTestSuite
     */
    public static function suite()
    {
        return new phpillowToolTestSuite( __CLASS__ );
    }
}