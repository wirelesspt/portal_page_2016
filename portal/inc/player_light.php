<div id="playing">Playing: Wireless PT</div>
<audio id="radio" src="http://37.187.239.8:8000/;stream.mp3" controls autoplay></audio>
<script>
function change_r(src,desc) {
  document.getElementById('radio').src=src;
  document.getElementById('playing').innerHTML='Playing: '+desc;
  radio.play();
}
$(document).ready(function() {
  $("#radio").prop("volume", 0.5);
});
</script>
<br/><br/>
<a href="#" onclick="change_r('http://37.187.239.8:8000/;stream.mp3','Wireless PT')">Wireless PT</a><br/>
<a href="#" onclick="change_r('http://relay.181.fm:8030/;stream.mp3','Classic Rock')">Classic Rock</a><br/>
<a href="#" onclick="change_r('http://108.61.73.119:8014/;stream.mp3','Hard Rock')">Hard Rock</a><br/>
<a href="#" onclick="change_r('http://50.7.184.106:8596/;stream.mp3','Heartbeat')">Heartbeat</a><br/>
<a href="#" onclick="change_r('http://178-63-95-67.linux-101.org:8000/;stream.mp3','Digital Gunfire')">Digital Gunfire</a><br/>
<a href="#" onclick="change_r('http://stream-hautdebit.frequence3.net:8000','Frequence3')">Frequence3</a><br/>
<a href="#" onclick="change_r('http://toronto.etn.fm:8210/;stream.mp3','Progressive House')">Progressive House</a><br/>
<a href="#" onclick="change_r('http://house.mthn.net:8500/;stream.mp3','House Mthn')">House Mthn</a><br/>
<a href="#" onclick="change_r('http://xltrax.com:8000/;stream.mp3','electro, dance house')">electro, dance, house</a><br/>
<a href="#" onclick="change_r('http://stream.keygen-fm.ru:8082/;stream.mp3','Keygen 8bit')">Keygen 8bit</a><br/>
<a href="#" onclick="change_r('http://stream.nute.net:8000/kohina/stream.ogg','Kohina 8bit')">Kohina 8bit</a><br/>
