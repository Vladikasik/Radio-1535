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
  			<a href="index.php">Слушать</a>
  			<a href="podcast.php">Подкасты</a>
  			<a class="active" href="schedule.php">Расписание</a>
  			<a href="memes.php">Мемы</a>
  			<a href="vote.php">Голосовалка</a>
		</div>

		<div class="shedule-table">

			<iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRRc1AbIjvkAYftK4JbXQi0zkrUg0bHxZwbmvWpdl5SsLw7FBzEJr-dM4-GC4t33dmoqLOOPCsVvvLS/pubhtml?gid=0&amp;single=true&amp;widget=true&amp;headers=false"></iframe>

		</div>
		<?php
			include("footer.php");
		?>

	</body>

</html>
