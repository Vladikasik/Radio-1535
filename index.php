<meta charset="utf-8">

<html>

	<head>

		<title>Radio 1535</title>

		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="clock.js"></script>

		<script>
		function rock() {
				var frame = document.getElementById("musicplayer");
				frame.innerHTML = "<audio controls><source src='http://89.223.122.217:8003/rock' type='audio/mp3'></audio controls>";
		}

		function trap() {
					var frame = document.getElementById("musicplayer");
					frame.innerHTML = "<audio controls><source src='http://89.223.122.217:8003/trap' type='audio/mp3'></audio controls>";
		}
		</script>


	</head>


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
				<!-- <a href="#" class="round-button"><i class="fa fa-play fa-2x"  onclick='play1()'></i></a> -->

				<button onClick='rock()'>Rock</button>
				<button onClick='trap()'>Trap</button>

				<div id="musicplayer"></div>


		</div>

	<?php
		include("footer.php");
	?>

	</body>


</html>
