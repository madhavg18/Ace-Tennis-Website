<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../ace.css">
</head>
<body>
<div id="container">
	<div id="banner">
<div id="google">
<form action="http://www.google.com/cse" id="cse-search-box">
 <input type="hidden" name="cx" value="014135509704229782122:pyoh79-flcg" />
<input type="hidden" name="ie" vlaue="UTF-8" />
<input type= "text" name="q" size="31" />
<input type="submit" name="sa" value="Search" />
</div>
</form>
<script type="text/javascript" src="https://www.google.com/cse/publicurl?cx=014135509704229782122:pyoh79-flcg"></script>
	Ace Tennis
	</div>
	<div id="header">
		<ul>
		<li> <a href="../Home/Home.php">Home</a></li>
		<li> <a class="current-tab"  href="../News/News.php">News</a>
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
	</div><div id="headlines">
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
						echo '<tr><td><a href="news'.$x.'.php">'.$title.'</a></td>';
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
	<div id="picnews1">
		<font color="black">
<p>
LONDON -- Wimbledon champion
<a href="http://sports.espn.go.com/sports/tennis/players/profile?playerId=235">Andy Murray</a>
has been voted the BBC's 60th Sports Personality of the Year, winning the accolade after becoming the first British man to lift the trophy at the All England Club in 77 years.
</p>
<p>
The 26-year-old Scot ended one of the longest droughts in British sport by beating
<a href="http://sports.espn.go.com/sports/tennis/players/profile?playerId=296">Novak Djokovic</a>
in straight sets in July.
</p>
<p>Murray was presented with the BBC award on Sunday in Florida by 18-time grand slam singles champion Martina Navratilova as training commitments prevented him from traveling to the ceremony in the English city of Leeds.</p>
<p>Sometimes derided for a dour personality, Murray quipped: "No matter how excited I try to sound my voice still sounds incredibly boring. But I'm actually incredibly excited right now. That's just my voice. I'm sorry."</p>
<p></p>
<p></p>
	</div>