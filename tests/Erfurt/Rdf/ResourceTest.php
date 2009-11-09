<?php
require_once 'Erfurt/TestCase.php';

require_once 'Erfurt/Rdf/Resource.php';

/**
 * Test class for Erfurt_Rdf_Resource.
 * Generated by PHPUnit on 2009-06-08 at 10:38:28.
 */
class Erfurt_Rdf_ResourceTest extends Erfurt_TestCase
{
    /**
     * @var    Erfurt_Rdf_Resource
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
        $this->_object = new Erfurt_Rdf_Resource('http://example.org/resource1');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     *
     * @access protected
     */
    protected function tearDown()
    {
    }

    /**
     * @todo Implement test__toString().
     */
    public function test__toString()
    {
        $should = 'http://example.org/resource1';
        $is = (string)$this->_object;
        $this->assertEquals($should, $is);
    }

    /**
     * @todo Implement testGetIri().
     */
    public function testGetIri()
    {
        $should = 'http://example.org/resource1';
        $is = $this->_object->getIri();
        $this->assertEquals($should, $is);
    }

    /**
     * @todo Implement testGetQualifiedName().
     */
    public function testGetQualifiedName()
    {
        // First we test with the standard object (no qname).
        $this->assertEquals(null, $this->_object->getQualifiedName());
        
        // Now we test with a real qname.
        $this->markTestNeedsDatabase();
        $this->authenticateDbUser();
        $model = Erfurt_App::getInstance()->getSysOntModel();
        
        $r = new Erfurt_Rdf_Resource(EF_RDF_TYPE, $model);
        #$this->assertEquals('rdf:type', $r->getQualifiedName());
        
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @todo Implement testGetNamespace().
     */
    public function testGetNamespace()
    {
        $should = 'http://example.org/';
        $is = $this->_object->getNamespace();
        $this->assertEquals($should, $is);
        
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @todo Implement testGetLocalName().
     */
    public function testGetLocalName()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @todo Implement testGetTitle().
     */
    public function testGetTitle()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @todo Implement testInitWithIri().
     */
    public function testInitWithIri()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @todo Implement testInitWithUri().
     */
    public function testInitWithUri()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @todo Implement testInitWithNamespaceAndLocalname().
     */
    public function testInitWithNamespaceAndLocalname()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @todo Implement testInitWithBlankNode().
     */
    public function testInitWithBlankNode()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @todo Implement testIsBlankNode().
     */
    public function testIsBlankNode()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @todo Implement testGetId().
     */
    public function testGetId()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @todo Implement testGetUri().
     */
    public function testGetUri()
    {
        $should = 'http://example.org/resource1';
        $is = $this->_object->getUri();
        $this->assertEquals($should, $is);
    }
}
?>
