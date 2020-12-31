<?php
define('TITLE', "Menu Item | Franklin's Fine Dining");
include './assets/includes/header.php';

if (isset($_GET['item'])) {

	$menuItem = $_GET['item'];
	$dish = $menuItems[$menuItem];
}

?>



<?php include './assets/includes/footer.php';?>