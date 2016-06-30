<?php

switch($cat) {
    case "home":
        if ($lang=="en") {include "portal/inc/home_en.php";}
        else {include "portal/inc/home.php";}
        break;

    case "chat":
        include "portal/inc/chat.php";
        break;

    case "wiki":
        include "portal/inc/wiki.php";
        break;

    case "forum":
        include "portal/inc/forum.php";
        break;

    case "bugtracker":
        include "portal/inc/bugtracker.php";
        break;

    case "podcast":
        include "portal/inc/podcast.php";
        break;

    case "podcast_light":
        include "portal/inc/podcast.php";
        break;

    case "meshmap":
        include "portal/inc/meshmap.php";
        break;

    case "firmware":
        include "portal/inc/firmware.php";
        break;

    case "downloads":
        include "portal/inc/downloads.php";
        break;

    case "copyright":
        include "portal/inc/copyright.php";
        break;

    case "contact":
        include "portal/inc/contact.php";
        break;

    case "users":
        include "portal/inc/users.php";
        break;

    case "znc":
        include "portal/inc/znc.php";
        break;

    case "irc":
        include "portal/inc/chat.php";
        break;

    default:
        include "portal/inc/notfound.php";

}    


?>
