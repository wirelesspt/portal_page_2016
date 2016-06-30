<script type="text/javascript">
//<![CDATA[
$(document).ready(function(){

        new jPlayerPlaylist({
                jPlayer: "#jquery_jplayer_1",
                cssSelectorAncestor: "#jp_container_1"
        }, [
                {
                        title:"Wireless PT",
                        mp3:"http://37.187.239.8:8000/;stream.mp3"
                },
                {
                        title:"Classic Rock",
                        mp3:"http://relay.181.fm:8030/;stream.mp3"
                },
                {
                        title:"Hard Rock",
                        mp3:"http://108.61.73.119:8014/;stream.mp3"
                },
                {       
                        title:"Heartbeat",
                        mp3:"http://50.7.184.106:8596/;stream.mp3"
                },
                {       
                        title:"Digital Gunfire",
                        mp3:"http://178-63-95-67.linux-101.org:8000/;stream.mp3"
                },
                {       
                        title:"Frequence3",
                        mp3:"http://stream-hautdebit.frequence3.net:8000"    
                },
                {
                        title:"Progressive House",
                        mp3:"http://toronto.etn.fm:8210/;stream.mp3"
                },
                {
                        title:"House Mthn",
                        oga:"http://house.mthn.net:8500/;stream.mp3"
                },
                {
                        title:"Electro, Dance, House",
                        mp3:"http://xltrax.com:8000/;stream.mp3"
                },
                {       title:"Keygen 8bit",
                        mp3:"http://stream.keygen-fm.ru:8082/;streamm.mp3"
                },
                {       title:"Kohina 8bit",
                        oga:"http://stream.nute.net:8000/kohina/stream.ogg"
                }
        ], {

  playlistOptions: {
    autoPlay: true,
    enableRemoveControls: false
  },
                swfPath: "../../dist/jplayer",
                supplied: "oga, mp3",
                wmode: "window",
                useStateClassSkin: true,
                autoBlur: false,
                smoothPlayBar: true,
		volume: 0.5,
                keyEnabled: true
        });
});
//]]>
</script>
