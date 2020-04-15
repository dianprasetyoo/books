<?php switch($type){
	case "show_book";
		include("list.php");
	break;
	case "add_book";
		include("add.php");
	break;
	case "update_book";
		include("update.php");
	break;
	}
?>