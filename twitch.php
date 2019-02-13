<?php

  $clientID = "CLIENT ID";
  $twitchChannel = "TWITCH CHANNEL";

  $JSON = file_get_contents("https://api.twitch.tv/kraken/streams?client_id=".$clientID."&channel=".$twitchChannel);

  echo $JSON;

 ?>
