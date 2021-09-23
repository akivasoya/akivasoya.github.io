<?php
if (isset($_REQUEST["email"])) {

        $msg = "Contact From Contact Page \n";
		$msg .= "Name : ".$_REQUEST['name']."\n";
		$msg .= "Mail ID : ".$_REQUEST['email']."\n";
		$msg .= "Subject : ".$_REQUEST['subject']."\n";
		$msg .= "Details ".$_REQUEST['message']."\n";
		mail("info@ekakshoverseas.com","Contact From Dehydrated Products Website",$msg,$head);
		header('Location: mail.html');
}
?>