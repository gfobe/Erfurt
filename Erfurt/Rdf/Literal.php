<?php
require_once 'Erfurt/Rdf/Node.php';

class Erfurt_Rdf_Literal extends Erfurt_Rdf_Node {
	
	protected $_label = false;
	protected $_lang = '';
	protected $_datatype = '';
	
	protected function __construct($label) {
		
		$this->_label = $label;
	}
	
	public function setLanguage($lang) {
		
		$this->_lang = $lang;
	}
	
	public function setDatatype($datatype) {
		
		$this->_datatype = $datatype;
	}
	
	public static function initWithLabel($label) {
		
		return new Erfurt_Rdf_Literal($label);
	}
	
	public static function initWithLabelAndLanguage($label, $lang) {
		
		$l = new Erfurt_Rdf_Literal($label);
		$l->setLanguage($lang);
		return $l;
	}
	
	public static function initWithLabelAndDatatype($label, $datatype) {
		
		$l = new Erfurt_Rdf_Literal($label);
		$l->setDatatype($datatype);
		return $l;
	}
	
	public function getLabel() {
		
		return $this->_label;
	}
	
	public function getDatatype() {
	    
	    return $this->_datatype;
	}
	
	public function getLanguage() {
	    
	    return $this->_lang;
	}
}
?>