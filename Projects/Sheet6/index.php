<?php
$video_info;
$video_sub="Mostafa Abd El_Fatah Mohamed";
$connection=mysql_connect("localhost","root","asd987654321")
                    or die("Can not connect to Database<br>");
mysql_select_db("videos")    or die("Can not Select Database ".mysql_error()."<br>") ;
for ($i=0; $i <10 ; $i++) {     
	$query = "SELECT * FROM video WHERE id='".($i+1)."';";
	$out=mysql_query($query,$connection) or die(mysql_error()."<br>");
	if (mysql_num_rows($out) > 0) {
	  	$array=mysql_fetch_assoc($out);
	    $video_info[$i][0] = $array['video_name'];
	    $video_info[$i][1] = $array['time'];
	    $video_info[$i][2]= "\"".$array['cover_img']."\"";
	}
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
		<div class="content">
			<div class="left-content">
				<div class="searchbar">
					<div class="search-left">
						<p>Latest Video Form VideosTube</p>
					</div>
					
					<div class="clear"> </div>
				</div>
				<div class="box">
				<!-- Start Block of grid 0 -->
				<div class="grid">
					<h3><?= $video_info[0][0] ; ?></h3>
					<a href="single.php?id=1">
					    <img style="width:100%;height:180px" 
					    src=<?= $video_info[0][2] ; ?> title="video-name" />
					</a>
					<div class="time"><span><?= $video_info[0][1] ; ?></span></div>
					<div class="grid-info">		
						<div class="video-watch">
							<a href="single.php?id=1">Watch Now</a>
						</div>
						<div class="clear"></div>
						<div class="lables">
							<p>
							    Labels:<a href="#">by: <?= $video_sub; ?></a>
							</p>
						</div>
					</div>
				</div>
				<!-- Start Block of grid 0 -->
				<!-- Start Block of grid 1 -->
				<div class="grid">
					<h3><?= $video_info[1][0] ; ?></h3>
					<a href="single.php?id=2">
					    <img style="width:100%;height:180px" 
					    src=<?= $video_info[1][2] ; ?> title="video-name" />
					</a>
					<div class="time"><span><?= $video_info[1][1] ; ?></span></div>
					<div class="grid-info">		
						<div class="video-watch">
							<a href="single.php?id=2">Watch Now</a>
						</div>
						<div class="clear"></div>
						<div class="lables">
							<p>
							    Labels:<a href="#">by: <?= $video_sub; ?></a>
							</p>
						</div>
					</div>
				</div>
				<!-- Start Block of grid 1 -->
				<!-- Start Block of grid 2 -->
				<div class="grid">
					<h3><?= $video_info[2][0] ; ?></h3>
					<a href="single.php?id=3">
					    <img style="width:100%;height:180px" 
					    src=<?= $video_info[2][2] ; ?> title="video-name" />
					</a>
					<div class="time"><span><?= $video_info[2][1] ; ?></span></div>
					<div class="grid-info">		
						<div class="video-watch">
							<a href="single.php?id=3">Watch Now</a>
						</div>
						<div class="clear"></div>
						<div class="lables">
							<p>
							    Labels:<a href="#">by: <?= $video_sub; ?></a>
							</p>
						</div>
					</div>
				</div>
				<!-- Start Block of grid 2 -->
				<!-- Start Block of grid 3 -->
				<div class="grid">
					<h3><?= $video_info[3][0] ; ?></h3>
					<a href="single.php?id=4">
					    <img style="width:100%;height:180px" 
					    src=<?= $video_info[3][2] ; ?> title="video-name" />
					</a>
					<div class="time"><span><?= $video_info[3][1] ; ?></span></div>
					<div class="grid-info">		
						<div class="video-watch">
							<a href="single.php?id=4">Watch Now</a>
						</div>
						<div class="clear"></div>
						<div class="lables">
							<p>
							    Labels:<a href="#">by: <?= $video_sub; ?></a>
							</p>
						</div>
					</div>
				</div>
				<!-- Start Block of grid 3 -->
				<!-- Start Block of grid 4 -->
				<div class="grid">
					<h3><?= $video_info[4][0] ; ?></h3>
					<a href="single.php?id=5">
					    <img style="width:100%;height:180px" 
					    src=<?= $video_info[4][2] ; ?> title="video-name" />
					</a>
					<div class="time"><span><?= $video_info[4][1] ; ?></span></div>
					<div class="grid-info">		
						<div class="video-watch">
							<a href="single.php?id=5">Watch Now</a>
						</div>
						<div class="clear"></div>
						<div class="lables">
							<p>
							    Labels:<a href="#">by: <?= $video_sub; ?></a>
							</p>
						</div>
					</div>
				</div>
				<!-- Start Block of grid 4 -->
				<!-- Start Block of grid 5 -->
				<div class="grid">
					<h3><?= $video_info[5][0] ; ?></h3>
					<a href="single.php?id=6">
					    <img style="width:100%;height:180px" 
					    src=<?= $video_info[5][2] ; ?> title="video-name" />
					</a>
					<div class="time"><span><?= $video_info[5][1] ; ?></span></div>
					<div class="grid-info">		
						<div class="video-watch">
							<a href="single.php?id=6">Watch Now</a>
						</div>
						<div class="clear"></div>
						<div class="lables">
							<p>
							    Labels:<a href="#">by: <?= $video_sub; ?></a>
							</p>
						</div>
					</div>
				</div>
				<!-- Start Block of grid 5 -->
				<!-- Start Block of grid 6 -->
				<div class="grid">
					<h3><?= $video_info[6][0] ; ?></h3>
					<a href="single.php?id=7">
					    <img style="width:100%;height:180px" 
					    src=<?= $video_info[6][2] ; ?> title="video-name" />
					</a>
					<div class="time"><span><?= $video_info[6][1] ; ?></span></div>
					<div class="grid-info">		
						<div class="video-watch">
							<a href="single.php?id=7">Watch Now</a>
						</div>
						<div class="clear"></div>
						<div class="lables">
							<p>
							    Labels:<a href="#">by: <?= $video_sub; ?></a>
							</p>
						</div>
					</div>
				</div>
				<!-- Start Block of grid 6 -->
				<!-- Start Block of grid 7 -->
				<div class="grid">
					<h3><?= $video_info[7][0] ; ?></h3>
					<a href="single.php?id=8">
					    <img style="width:100%;height:180px" 
					    src=<?= $video_info[7][2] ; ?> title="video-name" />
					</a>
					<div class="time"><span><?= $video_info[7][1] ; ?></span></div>
					<div class="grid-info">		
						<div class="video-watch">
							<a href="single.php?id=8">Watch Now</a>
						</div>
						<div class="clear"></div>
						<div class="lables">
							<p>
							    Labels:<a href="#">by: <?= $video_sub; ?></a>
							</p>
						</div>
					</div>
				</div>
				<!-- Start Block of grid 7 -->
				<!-- Start Block of grid 8 -->
				<div class="grid">
					<h3><?= $video_info[8][0] ; ?></h3>
					<a href="single.php?id=9">
					    <img style="width:100%;height:180px" 
					    src=<?= $video_info[8][2] ; ?> title="video-name" />
					</a>
					<div class="time"><span><?= $video_info[8][1] ; ?></span></div>
					<div class="grid-info">		
						<div class="video-watch">
							<a href="single.php?id=9">Watch Now</a>
						</div>
						<div class="clear"></div>
						<div class="lables">
							<p>
							    Labels:<a href="#">by: <?= $video_sub; ?></a>
							</p>
						</div>
					</div>
				</div>
				<!-- Start Block of grid 8 -->
								
				
			</div>
			<div class="clear"> </div>

		</div>
		</div>
		</div>
		
		
			<div class="clear"> </div>
			<div class="copy-right">
			<p>&#169 2016 All rights Reserved | Design by &nbsp;<a href="#"> Our Team</a></p>
		</div>
	</div>
	<!----End-wrap---->
	</body>
</html>

