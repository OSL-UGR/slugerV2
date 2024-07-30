<?php

function parse_path() {
	$path = array();
	if (isset($_SERVER['REQUEST_URI'])) {
		$path = explode('/', $_SERVER['REQUEST_URI']);
  }
return $path;
}

$path_info = parse_path();

$_GET['user'] = $path_info[0];

switch($path_info[1]) {
	case 'ayuda': include 'template/ayuda.html';
		break;
	case '': include 'template/form.html';
		break;
	case 'licencia': include 'template/licencia.html';
		break;
	case 'api': include 'template/api.html';
		break;
	case 'sitemap': header("Location: /sitemap.xml");
		die();
		break;
	default:
		header("Location: index.php?modo=go&url=". $path_info[1]);
		die();
}
?>
