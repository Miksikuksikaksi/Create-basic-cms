<?php
// Lav en mysqlforbindelse
$dbconnection = mysql_connect("localhost", "***", "***");
if(!$dbconnection) {
	die("Databaseforbindelse fejlede: " . mysql_error());
}
// Vælg en database-tabel til brug
$db_select = mysql_select_db("***",$dbconnection);
if (!$db_select) {
	die("database-tabel fejlede: " . mysql_error());
}
?><!DOCTYPE html>
<html>
<head>
	<title>Übercoooooolio</title>
	<meta charset="utf-8">
	<link href='http://fonts.googleapis.com/css?family=Crimson+Text' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
<div class="wrap">
	<div id="wrapper">
			
			<header>
			    <div class="mh-top-menu">
			    	<div class="menu-mh-header-nav-container"><ul id="menu-mh-header-nav" class="menu"><li class="menu-item"><a href="index.php">Blogbelogboggen</a></li>
</ul></div>			    </div>
			    <h3 class="mh-top-quote">'The enemy of art is the <br> absence of limitations.'</h3>
			</header>
	
	<section>
	<?php 
		 // Forbind til tabel
		 $data = mysql_query("SELECT * FROM posts") 
		 or die(mysql_error()); 
		 
		 // hent posts så længe der er nogen
		 while($info = mysql_fetch_array( $data )) 
		 { 
		 Print "<div class='mh-post'>"; 
		 Print "<h3 class='mh-entry-title'><a href='single.php?id=" . $info['id']. "'>".$info['titel'] . "</a></h3>";
		 Print "<span class='mh-entry-author'><a href='#' title='Posts by michael' rel='author'>".$info['forfatter'] . "</a></span> "; 
		 Print "<span class='mh-entry-date'>".$info['dato'] . " </span>"; 
		 Print "<div class='mh-entry-content'><p>".$info['txt'] . "<p></div>"; 
		 Print "</div>";
		 }
	?> 
	</section>

	</div><!-- ends wrapper -->
	<div class="push"></div><!-- keeps footer at bottom -->
</div><!-- ends wrap -->
	
	<div class="footer">
		<div id="footer-wrap">
			<span class="mh-footer-copyright">Übercool wp-tema &copy; Michael Hanson 2013</span>
		</div><!-- ends footer-wrap -->
	</div><!-- ends footer -->

</body>
</html>