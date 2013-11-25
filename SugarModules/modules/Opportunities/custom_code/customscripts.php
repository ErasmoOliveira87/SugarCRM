<?php

class JQuery{

	function JQuery($event, $arguments){
		if($_REQUEST['action'] == "EditView"){
			echo '<script type="text/javascript" src="custom/modules/Opportunities/custom_code/scripts.js"></script>';
		}
	}

}
?>