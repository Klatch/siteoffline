<?php
elgg_register_event_handler('init', 'system', 'Siteoffline_init');
function Siteoffline_init()
{
	if (elgg_get_plugin_setting('siteoffline', 'Siteoffline') == 'offline' && !elgg_is_admin_logged_in()){
		elgg_register_plugin_hook_handler('index', 'system', 'Siteoffline');
		global $CONFIG;
		$get_url = parse_url($CONFIG->wwwroot, PHP_URL_PATH);
		if($_SERVER["REQUEST_URI"] != $get_url && $_SERVER["REQUEST_URI"] != "${get_url}action/login")
		{
			admin_gatekeeper();
		}
	}
}
function Siteoffline($hook, $type, $return, $params)
{
	global $CONFIG;
	if ($return == true)
	{
		return $return;
	}
	if (!include_once(dirname(__FILE__) . "/index.php"))
	{
		return false;
	}
	return true;
}
?>