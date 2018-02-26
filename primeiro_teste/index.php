<?php

  include("TwitterAPIExchange.php");

  $settings = array(
    'oauth_access_token' => "YOUR_OAUTH_ACCESS_TOKEN",
    'oauth_access_token_secret' => "YOUR_OAUTH_ACCESS_TOKEN_SECRET",
    'consumer_key' => "YOUR_CONSUMER_KEY",
    'consumer_secret' => "YOUR_CONSUMER_SECRET"
  );
  ///FALTA COLOCAR AS INFORMACOES DA CONTA NO SETTINGS
  ///TO ESPERANDO A CONFIRMAÇÃO DO TWITTER PARA CONTINUAR...
  ///https://developer.twitter.com/en/docs/tweets/post-and-engage/api-reference/post-statuses-update
  /// https://developer.twitter.com/en/review <- MINHA PAGINA TWEETAR
  /// https://github.com/J7mbo/twitter-api-php <- GITBASE
  ///https://www.youtube.com/watch?v=GcTvDsnofSk <- VIDEO BASE

  $url = "https://api.twitter.com/1.1/statuses/update.json";

  $postdata = array(
    'status' => "Se você está lendo esse tweet, é porque eu consegui! kkk <3 "
  );

  $requestMethod = "POST";

  $twitter = new TwitterAPIExchange($settings);

  echo $twitter->setPostfields($postdata)
              ->buildOauth($url, $requestMethod)
              ->performRequest();



 ?>
