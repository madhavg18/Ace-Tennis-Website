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
		<li> <a class="current-tab" href="Forum.php">Feedback</a></li>
		<li> <a href="../Acknowledgments/Acknowledgments.html">Acknowledgments</a></li>
		</ul>
	</div>
		<div id="Comments">
		<p class="addcom">Your feedback is important to us. Please leave a comment.</p>
			<form action="save-comments.php" method="post">
			<p class="Nocomments">
			Name : <input type="text" name="username"></input><br><BR>
			Comment: <BR><textarea rows="5" cols="100" name="comment">Type your comment here</textarea>
			</p>
			<p class="Nocomments">
			<button type="submit"><b>Save</b></button>
			</p>
			</div>
</form>
	<div id="commenttab">
	<?php
	if( file_exists('comments.txt') ) {
	echo '<table id="ctable" cellspacing="5px" cellpadding="5px">';
	echo '<tr><th width="20%">User</th> <th width="30%">Date</th> <th width="50%">Comment </th> </tr>';
	readfile('comments.txt');
	echo '</table>';
	}
	else {
	print '<p class="Nocomments">There are no comments yet.</p>';
	}
	?>
	</div>
</div>
</body>
</html>
