<div class="row">
<div class="col-md-1" style="margin-left:10px;">

<script>
function open_c(id,href) {
  var test = document.getElementById(id+'_src').src;
  show_id(id);
  if (test == href+'/' || test == href) {
    document.getElementById(id).style.display="block";
  } else {
    document.getElementById(id+'_src').src=href;
  }
}
function show_id(id) {
  document.getElementById('chat').style.display="none";
  document.getElementById('users').style.display="none";
  document.getElementById('znc').style.display="none";
  document.getElementById('mumble').style.display="none";
  document.getElementById(id).style.display="block";
}
</script>

<nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand" href="#" onclick="open_c('chat','https://wirelesspt.net:6698/?channels=wirelesspt&amp;uio=MT1udWxsf1')" title="chatroom"><img src="portal/img/chat.png" alt="Webchat"></a>
    <a class="navbar-brand" href="#" onclick="open_c('users','https://wirelesspt.net:7777')" title="account"><img src="portal/img/users.png" alt="Setup"></a>
    <a class="navbar-brand" href="#" onclick="open_c('znc','https://wirelesspt.net:8888')" title="irc bouncer"><img src="portal/img/znc.png" alt="ZNC"></a>
    <a class="navbar-brand" href="irc://irc.wirelesspt.net:+6697/wirelesspt" title="download at adiirc.com"><img src="portal/img/irc.png" alt="IRC"></a>
    <a class="navbar-brand" href="http://wirelesspt.net/arquivos/android/androirc.apk" title="get androirc app"><img src="portal/img/android.png" alt="Android"></a>
    <a class="navbar-brand" href="#" onclick="show_id('mumble')" title="mumble voip"><img src="portal/img/mumble.png" alt="Mumble"></a>
    </div>
  </div>
</nav>

</div>

<div class="col-md-10 container bs-docs-container" style="margin-left:35px; margin-bottom:10px;">
<div id="chat" style="display:block">
<iframe id="chat_src" src="https://wirelesspt.net:6698/?channels=wirelesspt&amp;uio=d4" style="width:100%; height:500px; border:none"></iframe>
</div>
<div id="users" style="display:none">
<iframe id="users_src" src="portal/inc/index.html" style="width:100%; height:500px; border:none"></iframe>
</div>
<div id="znc" style="display:none">
<iframe id="znc_src" src="portal/inc/index.html" style="width:105%; height:500px; border:none"></iframe>
</div>
<div id="mumble" style="display:none">
<?php include("portal/inc/mumble.php");?>
</div>
</div>

</div>
