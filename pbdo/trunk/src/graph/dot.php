<?php

class PBDO_DotGraphManager extends PBDO_GraphManager {


	function strokeGraph() {
		$this->output = "digraph G {\n";
		parent::strokeGraph();
		$this->output .= "}\n";
	}


	function saveGraph() {
		@mkdir("projects/".$this->engine->projectName."/graph");
		$f = fopen("projects/".$this->engine->projectName."/graph/schema.dot",'w+');
		fputs($f, $this->output, strlen($this->output));
		fclose($f);
		$dot = "projects/".$this->engine->projectName."/graph/schema.dot";
		$png = "projects/".$this->engine->projectName."/graph/schema.png";
		`dot -Tpng -o $png $dot`;
	}


	function drawWidget($name,$w,$table) {

		echo "$name;\n";
	}


	function drawEdges() {
//		print_r($this);
		foreach ($this->model->edges as $k=>$v) {
			$this->output .= $this->model->nodes[$v->source]->tableName;
			$this->output .= ' -> ';
			$this->output .= $this->model->nodes[$v->target]->tableName ;
			$this->output .= ";\n";

		}
	}
}

