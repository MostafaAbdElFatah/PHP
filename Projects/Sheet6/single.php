<?php
$id=$_GET['id'];
$video_title="video_title";
$video_sub="Mostafa Abd El_Fatah Mohamed Ali Ismael";
$video_date="Default";
$video_time="Default";
$img_src="images/1.jpg";
$description="Default Description Here";
$connection=mysql_connect("localhost","root","asd987654321")
                    or die("Can not connect to Database<br>");
mysql_select_db("videos")    or die("Can not Select Database ".mysql_error()."<br>") ;    
$query = "SELECT * FROM video WHERE id='".$id."';";
$out=mysql_query($query,$connection) or die(mysql_error()."<br>");
if (mysql_num_rows($out) > 0) {
  	$array=mysql_fetch_assoc($out);
    $video_title = $array['video_name'];
    $video_date  = $array['video_date'];
    $video_time  = $array['time'];
    $description = $array['video_discription'];
    $img_src     = "\"".$array['cover_img']."\"";
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Video Website</title>
  	    <meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="images/pageicon.png" />
		<link href="css/style1.css" rel="stylesheet" type="text/css"  media="all" />
	</head>
	<body>
	<div class="wrap">
		<!----start-Header---->
		<div class="header">
			<!----start-Logo---->
			<div class="logo">
				<a href="index.html"><img src="images/logo.png" title="logo" /></a>
			</div>
			<!----End-Logo---->
			<!----start-top-nav---->
			<div class="top-nav">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="#">Login</a></li>
					<li><a href="#">Register</a></li>
					<li><a href="#">Upload Video</a></li>
					
					<li><a href="#">Log Out</a></li>
					<li><a href="#">SVS Program</a></li>
										
				</ul>
			</div>
			<div class="clear"> </div>
			<!----End-top-nav---->
		</div>
		
		<!----End-Header---->
		<div class="clear"> </div>
		<!----Start Content---->
		<div class="content">
		    <!----Start Left-Content---->
			<div class="left-content">
			    <!----Start Searchable---->
				<div class="searchbar">
					<div class="search-left">
						<p>Latest Video Form VideosTube</p>
					</div>
					<input type="search" >
					<div class="clear"> </div>
				</div>
				<!----End Searchable---->  
		    </div>	 
		    <!----End Left-Content----> 
		    <div class="info">
				<p><?= $video_title; ?></p>
			    <p><b>by:</b><?= $video_sub; ?></p>
			</div>
			<div>
				<video  style="display:block;"  src="video.mp4" controls />
			</div>
			<div class="info">
				<p>Uploaded on: <?= $video_date; ?> at <?= $video_time; ?> <b>by:</b><?= $video_sub; ?> </p>
				<p><?= $description; ?></p>
				<a href="#"><p id="download">Download Video Here</p></a>
				<p>Related Images</p>
			</div>
			<a href="#">
				<div class="images">
					<img  src=<?= $img_src; ?> >
				</div>
			</a>
			<a href="#">
				<div class="images">
					<img  src=<?= $img_src; ?> >
				</div>
			</a>
			<a href="#">
				<div class="images">
					<img  src=<?= $img_src; ?> >
				</div>
			</a>
		</div>
		<!----End Content----> 
	    <!----Start Footer---->      
	    <div class="clear"> </div>
	    <div class="copy-right">
	       <p>&#169 2016 All rights Reserved | Design by &nbsp;<a href="#"> Our Team</a></p>
	    </div>
	    <!----End Footer----> 
	</div>
	<!----End-wrap---->
	</body>
</html>