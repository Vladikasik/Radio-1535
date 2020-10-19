<meta charset="utf-8">

<html>

	<head>

		<title>Radio 1535</title>

		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="clock.js"></script>

	</head>


		<script>
	function playyoutube() {
	    var frame = document.getElementById("youtube-frame");
			frame.innerHTML += "<iframe width='1000' height='500' src='https://www.youtube.com/embed/5qap5aO4i9A?controls=0'frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
	  }
	</script>

	<body onload="startTime()">

		<div class="topnav">
			<div id='menu-clock'><div id="txt"></div></div>
  			<a class="active" href="index.php">Слушать</a>
  			<a href="podcast.php">Подкасты</a>
  			<a href="schedule.php">Расписание</a>
  			<a href="memes.php">Мемы</a>
  			<a href="vote.php">Голосовалка</a>
		</div>

		<div id="main-container">

				<h1>Play music</h1>

				<button class="w3-center center transparent_btn" onclick="playyoutube()">go</button>

				<!-- <a href="#" class="round-button"><i class="fa fa-play fa-2x"  onclick='play1()'></i></a> -->

				<div id="youtube-frame"></div>

		</div>

	<?php
		include("footer.php");
	?>

	</body>


</html>
