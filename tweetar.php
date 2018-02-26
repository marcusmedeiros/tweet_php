<?php
  $texto = $_POST['tweet'];

  include("TwitterAPIExchange.php");


//ADICIONA OS ACESSOS CODIGO DE ACESSO DO TWITTER..
//https://apps.twitter.com/app/
  $settings = array(
    'oauth_access_token' => "***",
    'oauth_access_token_secret' => "***",
    'consumer_key' => "***",
    'consumer_secret' => "***"
  );

  $url = "https://api.twitter.com/1.1/statuses/update.json";

  $postdata = array(
    'status' => $texto
  );

  $requestMethod = "POST";

  $twitter = new TwitterAPIExchange($settings);

  echo $twitter->setPostfields($postdata)
              ->buildOauth($url, $requestMethod)
              ->performRequest();

header('Location:index.html');

 ?>
