<?php
phpinfo();
<?php
if( file_exists('comments.txt') ) {
readfile('comments.txt');
}
else {
print '<p>There are no comments yet.</p>';
}
?>
<h2>Add a comment</h2>
<form action="save-comment.php" method="post">
<p>
<textarea rows="3" cols="30" name="comment"></textarea>
</p>
<p>
<button type="submit">Save</button>
</p>
</form>