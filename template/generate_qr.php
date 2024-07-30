<?php
error_reporting(E_ERROR | E_PARSE);

// Include the phpqrcode library
include($_SERVER["DOCUMENT_ROOT"].'/lib/phpqrcode/qrlib.php');


function generateQRCodeFromUrlPNG($url) {
	ob_start();
	QRCode::png($url, null, QR_ECLEVEL_L, 20, 1);
	$imageString = base64_encode( ob_get_contents() );
	ob_end_clean();

	echo $imageString;
}

function generateQRCodeFromUrlSVG($url) {
	ob_start();
	QRCode::svg($url, false, null);
	$imageString = base64_encode( ob_get_contents() );
	ob_end_clean();
	echo $imageString;
}
/*
$url = $_GET['url'];
$mode = $_GET['mode'];
if($mode == 'svg'){
	generateQRCodeFromURLSVG($url);
}
else if($mode == 'png'){
	generateQRCodeFromURLPNG($url);
}
*/
?>
