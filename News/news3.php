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
<p>PLANTATION, Fla. -- Francis Tiafoe became the youngest boys' singles champion in the history of the Orange Bowl International, winning Sunday at 15.</p>
<p>
Tiafoe, from College Park, Md., beat
<a href="http://sports.espn.go.com/sports/tennis/players/profile?playerId=2238">Stefan Kozlov</a>
of Pembroke Pines, Fla., 7-6 (3), 0-6, 6-3 in the first all-America Orange Bowl boys' final since 2004. It also was the first time two 15-year-olds played each other in the singles final in the tournament's 67-year history.
</p>
<p>In the girls' final, Russia's Varvara Flink beat Serbia's Ivana Jorovic 6-1, 2-6, 6-4.</p>
<p></p>
<p></p>
	</div>