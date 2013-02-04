<?php
global $CONFIG;
$Getform.= elgg_echo('siteoffline:un');
$Getform.= elgg_view('input/text', array('name' => 'username','class' => 'elgg-autofocus',));
$Getform.= elgg_echo('siteoffline:pwd');
$Getform.= elgg_view('input/password', array('name' => 'password'));
$Getform .= elgg_view('input/submit', array('value' => elgg_echo('login')));
$login_url = $vars['url'];
if((isset($CONFIG->https_login)) && ($CONFIG->https_login))
	$login_url = str_replace("http", "https", $vars['url']);
?>