<?php
$connection=mysql_connect("localhost","root","asd987654321")
                    or die("Can not connect to Database<br>");

/*mysql_query("Drop Database videos",$connection)  
                    or die("Can not Drop Database<br>") ;*/
mysql_query("Create Database videos",$connection)  
                    or die("Can not Create Database ".mysql_error());
mysql_select_db("videos")    or die("Can not Select Database ".mysql_error()."<br>") ;
$query="CREATE TABLE video ( id INT NOT NULL AUTO_INCREMENT , 
                             video_name VARCHAR(255) NOT NULL , 
                             video_src VARCHAR(255) NOT NULL ,
                             cover_img TEXT NOT NULL , video_date DATE NOT NULL ,
                             video_discription TEXT NOT NULL , time TIME NOT NULL ,
                             PRIMARY KEY (id));";
mysql_query($query,$connection)  
                    or die("Can not Create Table ".mysql_error()."<br>") ;
$query="CREATE TABLE image ( id INT NOT NULL AUTO_INCREMENT ,
                             image_src VARCHAR(255) NOT NULL ,
                             video_id INT NOT NULL ,
                             PRIMARY KEY (id)) ;";
mysql_query($query,$connection)  
                    or die("Can not Create Table ".mysql_error()."<br>") ;
for ($i=1; $i <=10 ; $i++) { 
    $query="INSERT INTO video (id,video_name,video_src,cover_img,video_date,video_discription,time) 
                       VALUES (NULL,'video_title ".$i."','uploads/".$i.".mp4','uploads/".$i.".jpg','2016-07-".$i."',
                       'Discription Here ".$i."','".$i.":30:00')";
    mysql_query($query,$connection)  
                    or die("Can not Create query ".mysql_error()."<br>") ;
}


?>