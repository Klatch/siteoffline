<?php
if(elgg_is_admin_logged_in())
{
	forward();
}
$path = elgg_get_plugins_path();
$siteoffline_url = "siteoffline";
global $CONFIG;
$Getform.= elgg_echo('siteoffline:uname');
$Getform.= '<br>'.elgg_view('input/text', array('name' => 'username','class' => 'elgg-autofocus',));
$Getform.= '<br>'.elgg_echo('siteoffline:pwd');
$Getform.= '<br>'.elgg_view('input/password', array('name' => 'password'));
$Getform.= '<br>'.elgg_view('input/submit', array('value' => elgg_echo('login')));
$login_url = $vars['url'];
if((isset($CONFIG->https_login)) && ($CONFIG->https_login))
	$login_url = str_replace("http", "https", $vars['url']);
if($siteoffline_call = elgg_get_plugin_setting("sitoffline_call", "Siteoffline"))
	$x_call =$siteoffline_call;
if($siteoffline_email = elgg_get_plugin_setting("sitoffline_email", "Siteoffline"))
	$x_email =$siteoffline_email;
if($siteoffline_msg = elgg_get_plugin_setting("sitoffline_msg", "Siteoffline"))
	$x_msg ='<h1>'.$siteoffline_msg.'</h1>';
//	$x_msg ='<h2>The Site is OffLine Temporarily</h2>';
if($sitoffline_logo = elgg_get_plugin_setting("sitoffline_logo", "Siteoffline"))
	$x_logo =$sitoffline_logo;
if($sitoffline_background = elgg_get_plugin_setting("sitoffline_background", "Siteoffline"))
	$x_background =$sitoffline_background;
echo "<html>\n";
echo "<head>\n";
echo "<title>\n";
echo elgg_echo('siteoffline');
echo "</title></head>\n";
echo "<body style=\"background:$x_background;\">\n";
echo "<div align=\"center\">\n";
echo "<img src=\"$x_logo\"/>";
echo "<table width=\"734\" height=\"212\" border=\"0\">\n";
echo "<tr>\n";
echo "<td width=\"717\" align='center'>";
echo '<h2>'.$SiteUrl=elgg_get_site_url().'</h2>';
echo "</td>\n";
echo "<td width=\"10\" height=\"82\">&nbsp;</td>\n";
echo "</tr>\n\n";
echo "<tr>\n";
echo "<td align=\"center\"><p align=\"center\"><strong>$x_msg</strong></p>\n";
echo "<p align=\"center\"><strong>\n";
echo elgg_echo('siteoffline:emergency');
echo "<br>\n";
echo "Email :&nbsp;\n";
echo $x_email ?><?php
echo "<br>\n";
echo "Call us:&nbsp;\n";
echo $x_call;
?>
<?php
echo "</strong></p>\n";
echo "<br><p align=\"center\"><strong>\n";
echo elgg_echo('siteoffline:login');
echo "</strong></p>\n<br>";
echo '<center>'.elgg_view('input/form',array('body'=>$Getform,'action'=>"{$login_url}action/login")).'</center>';
echo "</ul>\n";
echo "</div>\n";
echo "</td>\n";
echo "<td>&nbsp;</td>\n";
echo "</tr>\n";
echo "</table>\n";
echo "</div>\n";
echo "</body>\n";
echo "</html>\n";
	if(count($_SESSION['msg']['error'])>0)
	{
		foreach($_SESSION['msg']['error'] as $error) {
			echo "<p style='font-weight: bold;'>$error</p>";
			echo '</div>';
		}
	}
	unset($_SESSION['msg']['error']);
?>