<?php
$rss = new DOMDocument();
$rss->load('http://sports.espn.go.com/espn/rss/tennis/news');
$feed = array();
foreach ($rss->getElementsByTagName('item') as $node) {
	$item = array (
		'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
		'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
		'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
		);
	array_push($feed, $item);
}
$limit = 20;
echo '<table> <tr><th>Headlines</ht></tr>';
for($x=0;$x<$limit;$x++) {
	$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
	$link = $feed[$x]['link'];
	$description = $feed[$x]['desc'];
	$date = date('l F d, Y', strtotime($feed[$x]['date']));
	echo '<tr><td>'.$title.'</td>';
	echo '</tr>';
}
echo '</table>'	;
?>