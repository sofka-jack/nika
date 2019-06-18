<?php
$text = file_get_contents( 'https://unihelp.by/child' );
preg_match( '/<h1 class="title">(.*?)<\\/h1>/is' , $text , $name );

preg_match( '/<div class="text">(.*?)<\\/div>/is' , $text , $date_and_town);
$str=strpos($date_and_town, ",");
$date=substr($date_and_town, 0, $str);
$toun=substr($date_and_town, $str, strlen($date_and_town));

preg_match( '/<h2 class="child-title h3 text-center">Диагноз ребенка</h2><p class="text-center">(.*?)<\\/p>/is' , $text , $diagnosis);


preg_match( '/<h2 class="child-title h3 text-center">История</h2><p class="text-center">(.*?)<\\/p>/is' , $text , $history);

?>