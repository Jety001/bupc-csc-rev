<?php

 $view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
 $title="Student"; 
 $header=$view; 
switch ($view) {
	case 'list' :
		$content    = 'fReports.php';		
		break;

	default :
		$content    = 'fReports.php';		
}
require_once ("../templates/template.php");

?>