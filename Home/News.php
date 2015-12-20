<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../ace.css">
</head>
<body>
<div id="container">
	<div id="banner">
	Ace Tennis
	</div>
	<div id="header">
		<ul>
		<li> <a href="Home.php">Home</a></li>
		<li> <a href="../News/News.php">News</a></li>
		<li> <a href="../HF/HF.html">Heath and Fitness</a></li>
		<li> <a href="../Scores/Scores.html">Scores</a></li>
		<li> <a href="../Rankings/Rankings.html">Rankings</a></li>
		<li> <a href="../Forum/Forum.html">Forum</a></li>
		</ul>
	</div>

	<div id="picart">
			<img src="Img1.jpg" alt="Handshake" width="250" height="200" />
	</div>
<div id="latestnews">
				<table cellspacing="4px" cellpadding="4px">
				<tr>
				<th>Latest News</th>
				</tr>
				<tr>
				<td><a href="Murrary2013.php">Murrary wins 2013 Wimbeldon, Ends 77-year British droughts</a></td>
				</tr>
				<tr>
				<td><a href="FedererNadal.php">Nadal outlasts Federer to reach the Barclays ATP World Tour finals</a></td>
				</tr>
				<tr>
				<td><a href="Mcero.php">McEnroe wins 3rd straight Statoil Masters Tennis Legends title</a></td>
				</tr>
				</table>
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
						$limit = 6;
						echo '<table> <tr><th>Headlines</ht></tr>';
						for($x=0;$x<$limit;$x++) {

							$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
							$link = $feed[$x]['link'];
							$description = $feed[$x]['desc'];
							$date = date('l F d, Y', strtotime($feed[$x]['date']));
							echo '<tr><td><a href="news'.$x.'.php">'.$title.'</a></td>';
							echo '</tr>';
						}
						echo '</table>'	;
					?>
	</div>
	<div id="picnews">
		<p>NEW YORK -- Hard to believe this is the same Rafael Nadal who was home during the U.S. Open a year ago, nursing a bad left knee.</p>
		<p>Hard to believe this is the guy sent packing in the first round of Wimbledon in June, losing against someone ranked 135th.</p>
		<p>Looking fit as can be and maybe even better than ever, the No. 2-ranked Nadal pulled away from No. 1 Novak Djokovic 6-2, 3-6, 6-4, 6-1 on Monday in a taut, tense U.S. Open final for his 13th Grand Slam title.</p>
		<p>"Very, very emotional, no?" Nadal said during the on-court trophy presentation. "Probably only my team knows how much (this) means for me."</p>
		<p>They started in sunlight and finished at night, a 3-hour, 21-minute miniseries of cliffhangers and plot twists and a pair of protagonists who inspired standing ovations in the middle of games.</p>
		<p>There was no quit in either of them, during points that lasted 15, 25, even more than 50 strokes.</p>
		<p>"Probably nobody brings my game to the limit like Novak," said Nadal, who collected $3.6 million in prize money, including a $1 million bonus for results during the North American hard-court circuit.</p>
		<p>They know each other's games so well, and play such similar hustle-to-every-ball styles, but in the end, it was Nadal who was superior.</p>
		<p>"He was too good. He definitely deserved to win this match today and this trophy," Djokovic said. "Obviously disappointing to lose a match like this."</p>
		<p>Nadal improved to 22-0 on hard courts and 60-3 overall in 2013 with nine titles, including at the French Open, which made him the first man with at least one Grand Slam trophy in nine consecutive seasons. The 27-year-old Spaniard's total of 13 major championships ranks third in the history of men's tennis, behind only Roger Federer's 17 and Pete Sampras' 14.</p>
		<p>Nadal no longer wears the strips of white tape he once did to bolster his left knee, and the way he covered the court against Djokovic - switching from defense to offense in a blink - proved that while he says he still feels pain in that leg, he definitely does not have problems moving around.</p>
		<p>These are the same two who played the longest Grand Slam final in history, a nearly six-hour struggle that left both needing to sit in chairs during the ceremony after Djokovic's victory at the 2012 Australian Open.</p>
		<p>This time, when it ended with a forehand into the net by Djokovic, Nadal dropped to his back on the court, saluted by an Arthur Ashe Stadium crowd that included the Queen of Spain.</p>
		<p>Nadal was relentless from shot to shot, yes, and from point to point, too, but what might have been most impressive was the way he stayed steady when Djokovic recovered from a rough start and began asserting himself.</p>
	</div>
	</div>
</body>
</html>