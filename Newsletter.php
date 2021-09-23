<?php
if (isset($_REQUEST["email"])) {

        $msg = "News Latter Page \n";
		$msg .= "Mail ID : ".$_REQUEST['email']."\n";
		mail("info@ekakshoverseas.com","Contact From Dehydrated Website",$msg,$head);
		header('Location: dehydreated-onions-garlic.html');
}
?>