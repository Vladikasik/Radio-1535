<meta charset="utf-8">

<html>

	<head>

		<title>Radio 1535</title>

		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="clock.js"></script>

	</head>

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
				<!-- <a href="#" class="round-button"><i class="fa fa-play fa-2x"  onclick='play1()'></i></a> -->

				<audio controls>
    			<source src="http://89.223.122.217:8000/stream" type="audio/mp3">
				</audio controls>

		</div>

	<?php
		include("footer.php");
	?>

	</body>


</html>
