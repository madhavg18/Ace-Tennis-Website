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
		<li> <a class="current-tab" href="../News/News.php">News</a>
		<ul class="subrank">
							<li><a href="../News/Videos.html">Videos</a></li>
			</ul>
			</li>
		<li> <a href="../HF/HF.html">Health and Fitness</a>
		<ul class="subrank">
			<li><a href="../HF/Strength.html">Strength</a></li>
			<li><a href="../HF/Quickness.html">Quickness</a></li>
			<li><a href="../HF/Nutrition.html">Nutrition</a></li>
			<li><a href="../HF/Cardio.html">Cardio</a></li>
		</ul>
		</li>
		<li> <a href="../Rankings/Rankings.html">Rankings</a>
			<ul class="subrank">
			<li><a href="../Rankings/Rankings.html">Men</a></li>
			<li><a href="../Rankings/womenrankings.html">Women</a></li>
			</ul>
		</li>
		<li> <a href="../Forum/Forum.php">Feedback</a></li>
		<li> <a href="../Acknowledgments/Acknowledgments.html">Acknowledgments</a></li>
		</ul>
	</div>
	<div id="picart">
	<img src="Img3.jpg" alt="Handshake" width="250" height="200" />
	</div>
	<div id="headlines">
		<div id="latestnews">
					<table cellspacing="4px" cellpadding="4px">
					<tr>
					<th>Latest News</th>
					</tr>
					<tr>
					<td><a href="../Home/Nadalusopen.php">Nadal wins 2013 US Open</a></td>
					</tr>
					<tr>
					<td><a href="../Home/Murrary2013.php">Murrary wins 2013 Wimbeldon, Ends 77-year British droughts</a></td>
					</tr>
					<tr>
					<td><a href="../Home/FedererNadal.php">Nadal outlasts Federer to reach the Barclays ATP World Tour finals</a></td>
					</tr>
					<tr>
					<td><a href="../Home/Mcero.php">McEnroe wins 3rd straight Statoil Masters Tennis Legends title</a></td>
					</tr>
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
						echo '<tr><th>Headline News</th></tr>';
						for($x=0;$x<$limit;$x++) {

							$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
							$link = $feed[$x]['link'];
							$description = $feed[$x]['desc'];
							$date = date('l F d, Y', strtotime($feed[$x]['date']));
							echo '<tr><td><a href="../News/news'.$x.'.php">'.$title.'</a></td>';
							echo '</tr>';
						}
			?>
					</table>
					<div id="share2">
										<font color="white"><font size="4"><FONT FACE="Trebuchet MS"><b>Find Ace Tennis At:</b></font><br>

										<a href="http://www.twitter.com/acetennis3"><img src="../twitter.png" width="50px" height="50px" alt="Twitter"></a>
										<a href="https://www.facebook.com/ace.tennis.18"><img src="../facebook.png" width="50px" height="50px" alt="Facebook"></a>
										<a href="https://plus.google.com/u/0/105107292769281538753/posts"><img src="../google.png" width="50px" height="50px" alt="Google Plus"></a>
</div>
		</div>
	</div>
	<div id="picnews">
	<font color="black">
		<p>Rafael Nadal closed in on his first Barclays ATP World Tour Finals title by reaching the decider with a comfortable victory over Roger Federer at the 02 Arena.
		Defeat may have signalled the last time world No.7 Federer even qualifies for the tournament as there is no guarantee he will halt his slide down the world rankings.
		The six-time champion had won his last four indoor meetings with the world No.1 but hit the self-destruct button with 32 unforced errors as Nadal won the Battle of the Bandanas 7-5, 6-3. The 32-year-old Swiss was also attempting to become the oldest finalist since he beat 33-year-old Andre Agassi in the 2003 showpiece.</p>
		<p>The 17-time grand slam winner started well but failed to take advantage of a pivotal moment when he had three break points to take a 4-2 lead.
		Instead, Nadal dug deep into his locker and survived the mini-crisis to hold his serve.
		<p>Nadal's first break point came in the ninth game of an absorbing opening set, and he wasted no time in showing his opponent how to close the deal by going 5-4 up with a forehand down the line.</p>
		<p>Federer was playing some of his best tennis of the week, however, and he immediately forced his way back on to level terms when Nadal went long. The Spaniard was not to be denied, though, and quietened the cheery Swiss fans in the arena by breaking Federer for the second time before holding his own serve to love to clinch the first set.</p>
		<p>If Federer had temporarily lost any confidence or composure, he regained it at the start of the second set, holding his first two serves with some ease and showing he was not bothered by playing just 24 hours after his three-set victory over Juan Martin del Potro.</p>
		<p>But after Nadal held to love he ramped up the pressure by breaking again as Federer walloped a shot into the net to take what appeared to be a decisive 3-2 lead. Could Federer force his way back into contention by breaking straight back as he had done in the first set?</p>
		<p>The answer was "No" as Nadal moved to within sight of the final by holding comfortably. Federer held his own serve to reduce the arrears to 4-3 and briefly threatened Nadal on his next serve only for three straight unforced errors to let the French and US Open champion off the hook.</p>
		<p>Federer was left serving to save the match but was now lacking his earlier zip, and a forehand int the net gave Nadal match point which was sealed when the world No.7 volleyed long.</p>
	</div>

</div>
</body>
</html>