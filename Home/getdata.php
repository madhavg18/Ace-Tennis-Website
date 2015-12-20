<?php

include('simple_html_dom.php');
$html= file_get_html('http://espn.go.com/tennis/');

echo ('******************************');
$e = $html->find('#Top_Stories');
$f = $e[0]->find('.top-story-content');
echo $f[0];
//$i = $f[0]->find('img');
//$a = $f[0]->find('a');
//echo $a[0]->href;

//echo $i[0]->src;
//$html1= file_get_html($a[0]->href);
//echo $htm1;
//foreach($html1->find('p') as $element)
//       echo $element ;




?>

