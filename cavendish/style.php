<?php header("Content-type: text/css");
include('config.php');
?>
#header h6 a { 
	background-color: transparent; 
	background-image: url("'.$cavendishLogoURL.'"); 
	background-repeat: no-repeat; 
	width:<?php echo $cavendishLogoWidth ?> px;
	height:<?php echo $cavendishLogoHeight ?> px;
	margin-top:<?php echo $cavendishLogoMargin ?> px;
	}
<?php
if ($cavendishSiteWith) { ?>
#globalWrapper {
	width:<?php echo $cavendishSiteWith ?> px;
	}
<?php
}
if ($cavendishSidebarSearchbox)	{
	?>#nav #p-search {display:none;}<?php
}
?>
			