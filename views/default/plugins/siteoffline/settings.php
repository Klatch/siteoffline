<?php
$path = elgg_get_plugins_path();
$Siteoffline_url = "Siteoffline";
$soffline_ver = $path. $Siteoffline_url . "/version.php";
include $soffline_ver;
$siteoffline_label2 = elgg_echo('siteoffline:1');
$siteoffline_label3 = elgg_echo('siteoffline:2');
$siteoffline_label4 = elgg_echo('siteoffline:3');
$siteoffline_label5 = elgg_echo('siteoffline:4');
$siteoffline_label6 = elgg_echo('siteoffline:7');
$title = elgg_echo('siteoffline:copy');
$xsettings = elgg_echo('siteoffline:5');
$siteoffline_label = elgg_echo('siteoffline:6');
$siteoffline = elgg_view('input/dropdown', array(
    'name' => 'params[siteoffline]',
    'value' => $vars['entity']->siteoffline,
    'options_values' => array('offline' => elgg_echo('siteoffline:offline'), 'no' => elgg_echo('siteoffline:noffline'))
        ));
$siteOffline_2 = elgg_view("input/text", array(
"name" => "params[sitoffline_call]",
"value" => $vars['entity']->sitoffline_call));

$siteOffline_3 = elgg_view("input/text", array(
"name" => "params[sitoffline_email]",
"value" => $vars['entity']->sitoffline_email));

$siteOffline_4 = elgg_view("input/text", array(
"name" => "params[sitoffline_msg]",
"value" => $vars['entity']->sitoffline_msg));

$siteOffline_5 = elgg_view("input/text", array(
"name" => "params[sitoffline_logo]",
"value" => $vars['entity']->sitoffline_logo));

$siteOffline_6 = elgg_view("input/text", array(
"name" => "params[sitoffline_background]",
"value" => $vars['entity']->sitoffline_background));

$settings = <<<__HTML
    <h3>$xsettings</h3>
    <div>
	<p></p>
        <p><i>$siteoffline_label</i><br>$siteoffline</p>
		<p><i>$siteoffline_label2</i>
		<br>$siteOffline_2</p>
	    <p><i>$siteoffline_label3</i>
		<br>$siteOffline_3</p>
	    <p><i>$siteoffline_label4</i>
		<br>$siteOffline_4</p>
	    <p><i>$siteoffline_label5</i>
		<br>$siteOffline_5</p>
	    <p><i>$siteoffline_label6</i>
		<br>$siteOffline_6</p>
		<hr>
		<p><i>$mainpage_copytights</i>
		<p>Release:$siteoffline_release</p>
		<p>Version:$siteoffline_version</p>
    </div>
</div>
__HTML;
echo $settings, $title;
?>