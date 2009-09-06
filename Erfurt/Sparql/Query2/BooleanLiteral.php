<?php
/**
 * OntoWiki
 * 
 * @package    
 * @author     Jonas Brekle <jonas.brekle@gmail.com>
 * @copyright  Copyright (c) 2008, {@link http://aksw.org AKSW}
 * @license    http://opensource.org/licenses/gpl-license.php GNU General Public License (GPL)
 * @version    $Id$
 */

class Erfurt_Sparql_Query2_BooleanLiteral implements Erfurt_Sparql_Query2_GraphTerm, Erfurt_Sparql_Query2_PrimaryExpression
{

	protected $value;
	public function __construct($num){
		if(is_bool($num)){
			$this->value = $num;
		} else {
			throw new RuntimeException("Argument 1 passed to Erfurt_Sparql_Query2_NumericLiteral::__construct must be boolean, instance of ".typeHelper($num)." given");
		}
		
	}
	
	public function getSparql(){
		return $this->value ? "true" : "false";
	}
	
	public function __toString(){    
        return $this->getSparql();
    }
}
?>