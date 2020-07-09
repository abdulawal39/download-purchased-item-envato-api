<?php
if(isset($_REQUEST['purchase_code']) && !empty($_REQUEST['purchase_code'])){
	$purchase_code = htmlspecialchars($_REQUEST['purchase_code']);
} else {
	$purchase_code = "PURCHASE-CODE-HERE";
}

require_once('class.env.php');
$o = EnvatoApi2::verifyPurchase( $purchase_code );
if ( is_object($o) ) {
	$dl_url = $o->download_url;
	header('Location: '.$dl_url);
	die();
}