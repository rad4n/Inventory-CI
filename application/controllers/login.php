<?php
error_reporting(0);
$page = "login";
mysql_connect("localhost","root","");
mysql_select_db("dbasfa_jaya");
require('libs/Smarty.class.php');
$smarty = new Smarty;

$module = $_GET['module'];
$message = $_GET['message'];

if ($module == 'logged_in'){
	$username	= $_POST['username'];
	$password	= md5($_POST['pass']);
	
	$sql = mysql_query("SELECT * FROM aj_users,aj_employes WHERE username = '$username' AND passwd = '$password' AND aj_employes.nik=aj_users.nik");
	$num_rows = mysql_num_rows($sql);
	$data = mysql_fetch_array($sql);
	echo "$num_rows";
	if ($num_rows > 0){
		$username	= $data[username];
		$password	= $data[password];
		$level		= $data[level];
		$user_id	= $data[user_id];
		$photo		= $data[photo];
		$name		= $data[name];
		
		setcookie("username", $username);
		setcookie("password", $password);
		setcookie("level", $level);
		setcookie("user_id", $user_id);
		setcookie("name", $name);
		setcookie("photo", $photo);
		$_COOKIE['username'] = $username;
		$_COOKIE['password'] = $password;
		$_COOKIE['level'] = $level;
		$_COOKIE['user_id'] = $user_id;
		$_COOKIE['name'] = $name;
		$_COOKIE['photo'] = $photo;
		header('location: index.php');
	}
	else{
		$smarty->assign('error', 'error');
	}
}

elseif ($module == 'logout'){
	setcookie("username", "");
	setcookie("password", "");
	setcookie("level", "");
	header('location: login.php?message=Anda telah logout.');
}

if(!empty($message)){
	$smarty->assign('error', 'logout');
	$smarty->assign('message', $message);
}
$smarty->display("login.tpl");	
?>