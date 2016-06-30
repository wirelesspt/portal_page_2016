<div class="row">
<div class="col-md-1" style="margin-left:46px;"></div>
<div class="col-md-4" style="margin-bottom:10px; margin-top:0px">
<?php 
if ($cat=="podcast_light") {
    include("player_light.php");
} else {
    include("player.php");
}
?>
</div>

<div class="col-xs-12 col-sm-12 col-lg-6" style="margin-bottom:10px;">
* <a target="_blank" href="http://wirelesspt.net/wiki/shoutcast">Info</a>
<br/>
* <a target="_blank"
href="http://radio.wirelesspt.net:8000/admin.cgi">Podcaster login</a><br>
<br>
* <a target="_blank" href="rtsp://radio.wirelesspt.net:8000">Play on real player</a><br>
* <a href="mms://radio.wirelesspt.net:8000" target="_blank">Play on windows media player</a>
<br/>

* <a href="http://radio.wirelesspt.net:8000" target="_blank">Play on winamp, vlc, iTunes, audacious, xmms, foobar2000</a><br>

<span style="margin-left:64px">
<a target="_blank" href="http://radio.wirelesspt.net:8000">amarok, aTunes, mpv, moc, media player, mpd, cmus</a>
</span>
<br/>

<span style="margin-left:64px">
<a target="_blank" href="http://radio.wirelesspt.net:8000">juk, mpg123, tomahawk, guayadeque, bpm, clementine</a>
</span>
<br/>
<br/>

* vlc http://radio.wirelesspt.net:8000<br/>
* mocp -l  http://radio.wirelesspt.net:8000<br/>
* mplayer http://radio.wirelesspt.net:8000<br/>
* mpv http://radio.wirelesspt.net:8000<br/>
* ffmpeg -i http://radio.wirelesspt.net:8000 -f alsa default<br/>
* ffplay http://radio.wirelesspt.net:8000<br/>
* cmus-remote -p http://radio.wirelesspt.net:8000<br/>
* mpg123 http://radio.wirelesspt.net:8000<br/>
* mpc add http://radio.wirelesspt.net:8000<br/>

</div>
</div>
