<?php
require_once 'test_base.php';
require_once 'Erfurt/Syntax/RdfParser/Adapter/Arc.php';

class Erfurt_Syntax_RdfParser_Adapter_ArcTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Erfurt_Syntax_RdfParser_Adapter_RdfXml
     * @access protected
     */
    protected $_object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     *
     * @access protected
     */
    protected function setUp()
    {
        $this->_object = new Erfurt_Syntax_RdfParser_Adapter_Arc('rdfxml');    
    }
    
    public function testParseFromUrlToStore()
    {
        $url = 'http://localhost/ontowiki_1_0/ontowiki/src/model/export/f/rdfxml?m=http%3A%2F%2F3ba.se%2Fconferences%2F';
        $graphUri = 'http://3ba.se/conferences/3/';
        
        
        $this->_object->parseFromUrlToStore($url, $graphUri);
    }
}
