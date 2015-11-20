<?php

	$this_page = $_SERVER["REQUEST_URI"];
	$smarty->assign('pksa_domain', PKSA);
	$smarty->assign('pksa_url', PKSA_URL);
	$smarty->assign('root_dir',PKSA_ROOT);
	$smarty->assign('root_url',PKSA_URL);
	
	$smarty->assign('current_page', $page);
	$smarty->assign('this_page', $this_page);
	$smarty->assign('cookie', $cookie);
	$smarty->assign('key', (isset($_SESSION['SessionKey'])) ? $_SESSION['SessionKey']:"0" );
	$smarty->display("$page.tpl");
exit();

?>
