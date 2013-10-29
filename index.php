<?php
define ('PRO', 1);
require('./shablon/header.php');
$file_menu;
$file_body;
$g = (isset($_GET['act']) ? $_GET['act'] : 'default');

switch ($g) {
	  case 0:
	  	$file_menu = 'shablon/menu_home.html';
		$file_body = 'content/home.html';
	    break;
	  case 1:
	   	$file_menu = 'shablon/menu_win.html';
	    $file_body = 'content/win.html';
	    break;
	  case 2:
	   	$file_menu = 'shablon/menu_and.html';
	    $file_body = 'content/android.html';
	    break;
	  case 3:
	   	$file_menu = 'shablon/menu_games.html';
	    $file_body = 'content/games.html';
	    break;
	  case 4:
		$file_menu = 'shablon/menu_chat.html';
	    $file_body = 'content/games.html';
	    break;
	  default:
       $file_menu = 'shablon/menu_home.html';
	   $file_body = 'error404.php';
}


require($file_menu);
require($file_body);
require('./shablon/foter.php');
?>
