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
			<img src="Img2.jpg" alt="Handshake" width="250" height="191" />
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
		<p>WIMBLEDON, England's Andy Murray's long-awaited Wimbledon victory against Novak Djokovic could signal a tilting of an entrenched dynamic.</p>
		<p>Murray, though it took him a while to break through, has become a significant force in the chase for majors.</p>
		<p>Playing with a calm sometimes lacking in previous campaigns, No. 2 Murray knocked off top-ranked Djokovic 6-4, 7-5, 6-4 on a brilliantly sunny afternoon Ñ thus ending a cloud of anxiety that has hung over Britain.</p>
		<p>
		<p>Scotland's Murray is the first British man to win Wimbledon in 77 years, since Fred Perry won the last of three in a row in 1936.</p>
		<p>"I still can't believe it," Murray said a couple of hours after sending the Kingdom into collective delirium. "Can't get my head around that."</p>
		<p>Djokovic remains No. 1 in the rankings. It could be said, however, that at this moment Murray is at the top of the game.</p>
		<p>
		<p>The two 26-year-olds, born a week apart, have upped the physical stakes with Rafael Nadal and are threatening to separate themselves from Roger Federer, who turns 32 in August and has dropped to No. 5, his lowest ranking in a decade.</p>
		<p>
		<p>"You're looking at a bit of the changing of the guard," John McEnroe said Sunday. "Roger is one of the greatest, if not the greatest ever, but it's going to be harder for him to hang with these guys in long matches now. And Andy's really come into his own."</p>
		<p>One year after a crushing defeat to Federer in the Wimbledon final, Murray returned to the All England Club lawns to capture his second Grand Slam title. He broke through in September at the U.S. Open, where he beat Serbia's Djokovic in a rousing five sets.</p>
		<p>Murray, who also won the 2012 Olympic gold medal at Wimbledon, ran his unbeaten string on grass to 18-0 since.</p>
		<p>"I understand how much everyone wanted to see a British winner at Wimbledon so I hope you enjoyed it," Murray told the crowd at Centre Court, where the year before he broke down into tears in his on-court interview. "I tried my best."</p>
		<p>
		<p>Meeting in their third major final in less than a year, the world's top two players and defensive standouts exchanged many grueling groundstroke rallies. A few went 30 shots or more.</p>
		<p>Murray was quicker around the court and steadier in the clutch, taking advantage of Djokovic's lackluster serving and bouts of error-prone play.</p>
		<p>"The bottom line is that he was a better player in decisive moments," said Djokovic, the 2011 Wimbledon winner. "He was all over the court."</p>
		<p>Murray had a better ratio of winners (36-31) and unforced errors (21-40) than Djokovic, and also smacked more aces (9-4). But the biggest difference was his ability to put return after return in play Ñ 77% in all.</p>
		<p>"Even though when I was putting my first serves in he was always getting them back in the court and making me play an extra shot," Djokovic said. "That's why he won this tournament."</p>
		<p>Murray, too, seemed energized by the nearly 15,000 screaming fans on sold-out Centre Court and thousands more watching the big screen from the grounds.</p>
		<p>With them at his back, he recovered from a break down in the last two sets and shook off the loss of three match points when he was serving for the match at 40-0.</p>
		<p>"At the end, mentally, that last game will be the toughest game I'll play in my entire career, ever," Murray said.</p>
		<p>When Djokovic netted a backhand, Murray's racket and cap went flying as he pumped two fists at his box.</p>
		<p>Soon he was there himself, hugging his coach of the past 18 months, Ivan Lendl, his girlfriend Kim Sears, his father Bill and other members of his team and family.</p>
		<p>The Dunblane native nearly forgot the person most responsible for putting a racket in his hand and shaping his game before reversing course to give her an embrace Ñ his mother Judy, Britain's Fed Cup captain and a former top player in her native Scotland.</p>
		<p>Murray credited hard work and resolve for his win Ñ making the incremental improvements from which champions are constructed.</p>
		<p>"I think I persevered," he said. "That's really been it, the story of my career probably."</p>
		<p>He also learned from his losses, particularly last year's four-set defeat to Federer.</p>
		<p>"I think it was a turning point in some ways," Judy Murray said. "He had chances in the final last year and let it get away. I think every time you have a really tough loss, a loss that really hurts you, you learn a lot from it about how to handle the occasions better going forward."</p>
		<p>Eight-time Grand Slam champion Lendl, who like Murray lost his first four major finals, provided the voice and mind-set to help him turn the corner.</p>
		<p>"I think he believed in me when a lot of people didn't," Murray said of Lendl, who reached two Wimbledon finals but never left with the trophy. "He would have loved to have won here, but it's the next best thing."</p>
		<p>Murray, who skipped the French Open with a bad back, ran his record in Grand Slam finals to 2-5. He lost to Djokovic in January in the Australian Open final. Djokovic fell to 6-5.</p>
		<p>Together, they have contested four major finals and are tied 2-2, with Djokovic beating the Scot two of the last three years in Melbourne and Murray winning here and in September in New York.</p>
		<p>Djokovic leads their head-to-head 11-8, but meetings in the latter stages of Slams seem likely in their budding rivalry.</p>
		<p>"I could see them playing another four times over the next three years," ESPN's Brad Gilbert said.</p>
		<p>
		<p>With the season shifting to North American hardcourts, Murray and Djokovic won't slow down. Both defensive whizzes excel on cement.</p>
		<p>If Nadal's knee is not a problem, it sets up a tantalizing summer between the trio that will culminate at the year's final Grand Slam in New York.</p>
		<p>The fourth-ranked Spaniard tore up the tour after returning from a seven-month absence in February, winning seven titles and a record eighth French Open. But the 27-year-old limped out of Wimbledon's first round with his chronic knee issues again flaring up.</p>
		<p>Federer, the all-time leader with 17 majors, appears to be in slow decline. He owns one win against a top-10 player in 2013 and has captured only one small title at Halle, Germany, last month on grass.</p>
		<p>Perhaps to get more match play, the Swiss is competing in two minor claycourt events in Europe as he prepares for the summer swing.</p>
		<p>"It's definitely a three-horse race for the year-end No. 1, but everything depends on how Rafa's knee is," Gilbert said. "Then we get the hardcourt season that we want."</p>
		</div>
	</div>
</body>
</html>