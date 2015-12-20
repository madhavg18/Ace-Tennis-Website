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
		<img src="Img4.jpg" alt="Handshake" width="250" height="200" />
	</div>
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
	<p>
		John McEnroe captured the Statoil Masters Tennis Legends title for the third year in a row on Sunday as he defeated Mats Wilander 6-2, 6-4 at the Royal Albert Hall in London.
	</p>
	<p>"I'm figuring I have maybe one or two more years against Mats; he's getting closer," said McEnroe, who also defeated Wilander in last year's final. "So next year it'll probably go to a third set; that may be the time to hang it up. So that means I can come back one more time!"</p>
	<p>
	Wilander said, "It's great to get three matches in here plus doubles with Mansour [Bahrami] and John [McEnroe] the other day. I think it's John that said it's our these days."
	<br>
	<br>
	The American, who is a seven-time Grand Slam singles champion, made a fast start to the final, racing into a 3-0 lead over Wilander, whom he played 13 times on the ATP World Tour.
	<br>
	<br>
	A strong performance in the first set from McEnroe saw him engineer set point in the eighth game with a backhand winning pass. Leading 40/15 on Wilander's serve, he clinched the opener with a forehand winning pass.
	<br>
	<br>
	After squandering an initial break advantage in the second set, McEnroe regained his lead in the eighth game, rolling back the years as he closed down the net to smash away a winner for a 5-3 lead.
	<br>
	<br>
	There was still time for one more McEnroe tantrum as he served for the match, though. The American was unhappy with a Wilander challenge on the first point and subsequently dropped serve to allow the Swede back into the match. He regrouped quickly, though, and broke Wilander in the next game to triumph, converting his third match point with a forehand winner.
	</p>
	<p>
	"I was playing well. I was hitting the ball clean," said McEnroe. "I got a little careless and Mats' concentration is great so he takes advantage of some opportunities when they come up. I would have liked to have done a little better with the first serve. The percentage was a bit low for indoors. Other than that I feel like I was hitting the ball great and returning great, putting a lot of pressure on his serve. I was feeling good."
	<br>
	<br>
	Wilander said, "John is hitting the ball extremely well. He returns so well. I think that's something that has maybe got better with age. It's really hard to find a space in the service box that he doesn't get to. He seems to read my serve and he's just a little too good, especially on the big points.
	</p>
	</div>
</body>
</html>