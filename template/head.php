<?php
function getHead($title){
	echo '<head>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>'. $title . '</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="author" content="Universidad de Granada" />
		<meta name="description" content="Generador de URLs cortas por la Oficina de Software Libre de la Universidad de Granada" />
		<meta name="keywords" content="short url uri corta" />
		<link href="/css/estilo.css" rel="STYLESHEET" media="screen" type="text/css" />
		<link rel="shortcut icon" href="https://osl.ugr.es/favicon.ico" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Barlow+Condensed:300,400,600,700&amp;lang=en" />
		</head>';
	}
?>
