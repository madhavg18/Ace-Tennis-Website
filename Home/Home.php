<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../ace.css">
<meta name="google-site-verification" content="S_D3khHjWeDObabQDJ_O1k185WU_lqaKa3kP8pAZVC0" />
</head>
<body>
<script type="text/javascript">
var Article= new Array ("./Nadalusopen.php", "./Murrary2013.php", "./FedererNadal.php", "./Mcero.php");
//var Image= new Array ("./homenadal.jpg", "./murraywimbledon.jpg", "./nadalwin.jpg", "./ucannotbe.jpg");
var Image= new Array ("./Img1.jpg", "./Img2.jpg", "./Img3.jpg", "./Img4.jpg");
var sText = new Array();
sText[0] ="<span style='font-size: 26px; color: #0B2EF4'><u>Nadal Wins 2013 US Open</u><BR></span>Rafael Nadal closed in on his first Barclays ATP World Tour Finals title by reaching the decider with a comfortable victory over Roger Federer at the 02 Arena. Defeat may have signalled the last time world No.7 Federer even qualifies for the tournament.";
sText[1] ="<span style='font-size: 26px; color: #0B2EF4'><u>Murray Takes Home Wimbeldon Crown</u><BR></span>England's Andy Murray's long-awaited Wimbledon victory against Novak Djokovic could signal a tilting of an entrenched dynamic.Murray, though it took him a while to break through, has become a significant force in the chase for majors.";
sText[2] ="<span style='font-size: 26px; color: #0B2EF4'><u>Nadal Wins Barclays ATP World Tour Finals</u><BR></span>Rafael Nadal closed in on his first Barclays ATP World Tour Finals title by reaching the decider with a comfortable victory over Roger Federer at the 02 Arena. The defeat may have signalled the last time world No.7 Federer even qualifies for the tournament.";
sText[3] ="<span style='font-size: 26px; color: #0B2EF4'><u>McEnroe Wins Statoil Masters</u><BR></span>John McEnroe captured the Statoil Masters Tennis Legends title for the third year in a row as he defeated Mats Wilander 6-2, 6-4 at the Royal Albert Hall in London. The seven-time Grand Slam singles champion, made a fast start to the final, racing into a 3-0 lead over Wilander.";

var imgNum = 0;
var id = 0;
var imgLen = 4;
function change_image (num, slide)
{
	imgNum = imgNum + num;
	if (imgNum >= imgLen) {
		imgNum = 0;
	}
	if (slide == false) {
		clearInterval (id);
	}
	if (imgNum < 0) {
		imgNum = imgNum + imgLen;
	}
	document.slideshow.src = Image[imgNum];
	document.getElementById("slider").href = Article[imgNum];
	document.getElementById("slidetext").innerHTML = sText[imgNum];
	document.getElementById("slidetextlink").href = Article[imgNum];

	return false;
}
id = setInterval ("change_image(1, true)", 2000);

</script>

</div>
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
<script type="text/javascript">
  (function() {
    var cx = '014135509704229782122:pyoh79-flcg';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:searchbox-only></gcse:searchbox-only>
<script>
  (function() {
    var cx = '014135509704229782122:pyoh79-flcg';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:searchresults-only></gcse:searchresults-only>
Ace Tennis
</div>
</div>
	<div id="header">
		<ul>
		<li> <a class="current-tab" href="Home.php">Home</a></li>
		<li> <a href="../News/News.php">News</a>
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
	<div id="slidernews">
	<a id="slider" href="Nadalusopen.php"><img name="slideshow" src="./Img1.jpg" height="390px" width="800px"></a>
	<a id="slidetextlink" href="./Nadalusopen.php">
	<div id="slidetext">
	    <span style="font-size: 30px; color: #0B2EF4"><u>Nadal  US Open</u><BR></span>
		Rafael Nadal closed in on his first Barclays ATP World Tour Finals title by reaching the decider with a comfortable victory over Roger Federer at the 02 Arena. Defeat may have signalled the last time world No.7 Federer even qualifies for the tournament.
	</div>
	</a>
	</div>
	<a id="slideprev" href="#" onclick="return change_image(-1, false)"><img width="30px" height="30px"  src="prev2.png"></img></a>
	<a id="slidenext" href="#" onclick="return change_image(1, false)"><img width="30px" height="30px"  src="next2.png"></img></a>
	<div id="headlines1">
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
	echo '<table cellpadding="5px" cellspacing:"5px"> <tr><th>Headlines</th></tr>';
	for($x=0;$x<$limit;$x++) {

		$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
		$link = $feed[$x]['link'];
		$description = $feed[$x]['desc'];
		$date = date('l F d, Y', strtotime($feed[$x]['date']));
		echo '<tr><td width="50%"><a href="../News/news'.$x.'.php">'.$title.'</a></td>	</tr>';
	}
	echo '<tr>Live Feed from <img src="Logo_ESPN.png" width="45px" height="15px" alt="ESPNS"></tr>';
	echo '</table>'	;
?>
	</div>
	<div id="share">
<font color="black"><font size="4"><FONT FACE="Trebuchet MS"><b>Find Ace Tennis At:</b></font><br>

<a href="http://www.twitter.com/acetennis3"><img src="../twitter.png" width="50px" height="50px" alt="Twitter"></a>
<a href="https://www.facebook.com/ace.tennis.18"><img src="../facebook.png" width="50px" height="50px" alt="Facebook"></a>
<a href="https://plus.google.com/u/0/105107292769281538753/posts"><img src="../google.png" width="50px" height="50px" alt="Google Plus"></a>
<br>
<p>
&#169;<b> 2014 Ace Tennis</b>
</div>
</div>
</body>
</html>
