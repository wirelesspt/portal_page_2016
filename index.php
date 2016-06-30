<?php
if (!isset($_GET['hl'])) {$lang="pt";
} else {$lang=$_GET['hl'];}

if (!isset($_GET['id'])) {$cat="home";
} else {$cat=$_GET['id'];}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="Description" content="Rede Wireless Livre e Gratuita Portuguesa  />
<meta name="Keywords" content="Portugal wireless mesh batman-adv olsr 802.11s babel bmx6 cjdns wirelesspt criptografia segurança mvwrt firmware tor vpn irc servidor server fórum wiki meshmap privacidade dyi rede network linux freifunk guifi battlemesh voip chat opensource "/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>WirelessPT.net</title>
<link href="portal/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="portal/assets/css/docs.min.css" rel="stylesheet">
<link href="portal/assets/css/custom.css" rel="stylesheet">
<script src="portal/assets/js/jquery.min.js"></script>
<?php
if ($cat=="podcast") {
    echo "<link href=\"player/css/jplayer.min.css\" rel=\"stylesheet\">\n";
    echo "<script src=\"player/js/jquery.jplayer.min.js\"></script>\n";
    echo "<script src=\"player/js/jplayer.playlist.min.js\"></script>\n";
    include("portal/inc/player_js.php");
}
?>

</head>
<body>
<header class="navbar navbar-static-top bs-docs-nav" id="top">
  <div class="container">
      <div class="navbar-header col-md-1" style="float:left; margin-right:63px; margin-left:-15px;">
      <a href="./"><img src="portal/img/logo-wirelesspt.jpg" alt="wirelesspt" style="width:100px"></a>
    </div>
    <div><h3><img src="portal/img/portugal_100px.png" alt="mesh" style="margin-top:5px"></h3></div>
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="./">Portal</a></li>
        <li><a href="?id=chat">Chat</a></li>
        <li><a href="wiki/" target="_blank">Wiki</a></li>
        <li><a href="forum/" target="_blank">Forum</a></li>
        <li><a href="bugs/" target="_blank">Bugtracker</a></li>
        <li><a href="?id=podcast">Podcast</a></li>
        <li><a href="?id=meshmap">Meshmap</a></li>
        <li><a href="?id=firmware">Firmware</a></li>
        <li><a href="?id=downloads">Downloads</a></li>
<?php
	if ($lang=="pt") {
		print "\t<li><a href=\"?hl=en\">English</a></li>";
	} else {
		print "\t<li><a href=\"?hl=pt\">Português</a></li>";
	}
?>
      </ul>
    </nav>
  </div>
</header>

<div class="container" style="font-size:14px; padding-top:10px">
<?php include("portal/inc/main.php");?>
</div>

<footer class="bs-docs-footer">
    <ul class="bs-docs-footer-links muted">
      <li><a href="https://facebook.com/wirelesspt"><img src="portal/img/facebook.png" alt="Facebook"></a></li>
      <li>&nbsp;</li>
      <li><a href="https://twitter.com/wirelesspt"><img src="portal/img/twitter.png" alt="Twitter"></a></li>
      <li>&nbsp;</li>
      <li><a href="https://youtube.com/user/wirelesspt"><img src="portal/img/youtube.png" alt="Youtube"></a></li>
      <li>&nbsp;</li>
      <li><a href="https://pinterest.com/wirelesspt/"><img src="portal/img/pinterest.png" alt="Pinterest"></a></li>
      <li>&nbsp;</li>
      <li><a href="https://github.com/wirelesspt/"><img src="portal/img/github.png" alt="Github"></a></li>
      <li>&nbsp;</li>
      <li><a href="https://reddit.com/user/wirelesspt"><img src="portal/img/reddit.png" alt="Reddit"></a></li>
      <li>&nbsp;</li>
      <li><a href="https://paypal.com/cgi-bin/webscr?cmd=_donations&amp;business=suporte%40wirelesspt%2enet&amp;lc=PT&amp;item_name=WirelessPT&amp;item_number=01012011&amp;currency_code=EUR&amp;bn=PP%2dDonationsBF%3aDonativo%2epng%3aNonHosted"><img src="portal/img/paypal.png" alt="Paypal"></a></li>
      <li>&nbsp;</li>
      <li><a href="https://twitrss.me/twitter_user_to_rss/?user=wirelesspt"><img src="portal/img/rss.png" alt="RSS"></a></li>
    </ul>
</footer>

<footer>
    <div class="bs-docs-social">
      <ul class="bs-docs-social-buttons">
        <li><a href="?id=copyright" target="_blank">Copyright</a></li>
	<li><a href="https://twitter.com/share?text=Portugal%20Wireless%20Open%20Source%20Mesh%20Network;url=http://wirelesspt.net" target="_blank">Tweet it</a></li>
	<li><a href="https://facebook.com/sharer.php?u=http://wirelesspt.net" target="_blank">Facebook share</a></li>
        <li><a href="?id=contact">Contact</a>	</li>
      </ul>
    </div>
</footer>

<script src="portal/dist/js/bootstrap.min.js"></script>
</body>
</html>
