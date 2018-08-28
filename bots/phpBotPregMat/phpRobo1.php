<?php

header("Content-Type: text/html; charset=UTF-8",true); // PARA NÃO APARECEREM CARACTERES ESTRANHOS!

$site = file_get_contents("https://www.youtube.com/watch?v=gsSwt3o430E&index=277&list=WL");

preg_match_all('@<div class="watch-view-count">(.*?)</div>@si',$site,$baslink);


$texto = implode("",$baslink[1]);

echo $texto;

?>