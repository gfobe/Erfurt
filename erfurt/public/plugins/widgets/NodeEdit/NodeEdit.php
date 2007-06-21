<?php

/**
  * Erfurt node edit widget
  *
  * @author Norman Heino <norman@feedface.de>
  * @version $Id$
  */
class NodeEdit extends Erfurt_Plugin_Widget {
	
	public function __construct($elementName = null, $values = null) {
		parent::__construct($elementName, 
			                $values, 
							// config
							array('class' => 'NodeEditContainer')
		);
		
		$this->scripts[] = $this->widgetBaseUrl . 'NodeEdit/node_edit.js';
		
		$cb = new CheckboxEdit();
		$le = new LiteralEdit();
		$re = new LiteralEdit();
		$this->styles = array_merge(array($this->widgetBaseUrl . 'NodeEdit/node_edit.css'), 
		                               $cb->getStylesheets(), 
		                               $le->getStylesheets(), 
		                               $re->getStylesheets());
	}
	
	public function getSingleValueHtml($value, $num = 1) {
		$name = $this->elementName;
		
		$options = array('resource' => 'Resource', 'literal' => 'Literal');
		
		if ($value instanceof Resource) {
			$selected = 'resource';
			$literalPrefix = 'porp';
			$resPrefix = 'prop';
		} else { // Literal + default
			$selected = 'literal';
			$literalPrefix = 'prop';
			$resPrefix = 'porp';
		}
		
		$checkbox = new CheckboxEdit($name . '[' . $num . '][type]', $selected, array(
																				'cardinality' => 1, 
																				'prefix' => $name, 
																				'class' => 'NodeEditSelector', 
																				'separator' => '&nbsp;', 
																				'onchange' => 'toggleSubWidget(\'' . $this->id . '\',this.value,' . $num . ')', 
																				'options' => $options
																				)
		);
		$resource = new ResourceEdit($name, $value, array('cardinality' => 1, 
																	'display' => ($selected == 'literal' ? 'none' : ''), 
																	'cssId' => 'resource' . $this->id,
																	'start' => $num
																	)
		);
		$literal = new LiteralEdit($name, $value, array('cardinality' => 1, 
														'display' => ($selected == 'resource' ? 'none' : ''), 
														'cssId' => 'literal' . $this->id,
														'start' => $num
														)
		);
		$ret = $checkbox . $resource . $literal;
		
		return $ret;
	}
}

?>
