<html>
<head>

</head>
<body>

<script type="text/javascript">
var Image= new Array ("./Img1.jpg", "./Img2.jpg", "./Img3.jpg", "./Img4.jpg");
var imgNum = 0;
var imgLen = 4;
function change_image (num)
{
	imgNum = imgNum + 1;
	if (imgNum >= imgLen) {
		imgNum = 0;
	}
	document.slideshow.src = Image[imgNum];
	return false;
}
setInterval ("change_image(1)", 2000);

</script>
<img name="slideshow" src="./Img1.jpg" height="400px" width="600px">

</body>

</html>