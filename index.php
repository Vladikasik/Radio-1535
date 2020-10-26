<meta charset="utf-8">

<html>

	<head>

		<title>Radio 1535</title>

		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="clock.js"></script>

		<link rel="stylesheet" type="text/css" href="style-footer.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


		<script>
		function rock() {
				var frame = document.getElementById("musicplayer");
				frame.innerHTML = '<audio src="http://89.223.122.217:8003/rock" autoplay="false" muted="false" controls="true" volume="1.0"></audio>';
		}

		function trap() {
					var frame = document.getElementById("musicplayer");
					frame.innerHTML = '<audio src="http://89.223.122.217:8003/trap" autoplay="false" muted="false" controls="true" volume="1.0"></audio>';
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

				<h1>Слушать музыку</h1>
				<!-- <a href="#" class="round-button"><i class="fa fa-play fa-2x"  onclick='play1()'></i></a> -->

				<button onClick='rock()'>Rock</button>
				<button onClick='trap()'>Trap</button>

				<div id="musicplayer"></div>


		</div>

		<footer class="site-footer">
	    <div class="container">
	      <div class="row">
	        <div class="col-sm-12 col-md-6">
	          <h6>О нас</h6>
	          <p class="text-justify">This is a project of four students from the 8th V we’re always open for suggestions!</p>
	          </p>
	        </div>

	        <div class="col-xs-6 col-md-3">
	          <h6>Ссылки</h6>
	          <ul class="footer-links">
	             <li><a href="http://scanfcode.com/category/front-end-development/">Слушать!</a></li>
	            <li><a href="http://scanfcode.com/category/back-end-development/">Подкасты</a></li>
	            <li><a href="http://scanfcode.com/category/java-programming-language/">Расписание</a></li>
	            <li><a href="http://scanfcode.com/category/android/">Мемы</a></li>
	            <li><a href="http://scanfcode.com/category/templates/">Голосовалка</a></li>
	          </ul>
	        </div>

	        <div class="col-xs-6 col-md-3">
	          <h6>Дополнительно</h6>
	          <ul class="footer-links">
	            <li><a href="http://89.223.122.217:8003/">Радио сервер</a></li>
	            <li><a href="mailto:vvwofw@gmail.com">Сообщить об ошибке</a></li>
	            <li><a href="mailto:vvwofw@gmail.com">Предложения</a></li>
	          </ul>
	        </div>
	      </div>
	      <hr>
	    </div>
	    <div class="container">
	      <div class="row">
	        <div class="col-md-8 col-sm-6 col-xs-12">
	          <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by Radio1535.ru
	       <a href="#">Scanfcode</a>.
	          </p>
	        </div>

	        <!-- <div class="col-md-4 col-sm-6 col-xs-12">
	          <ul class="social-icons">
	            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
	            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
	            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
	            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
	          </ul>
	        </div> -->
	      </div>
	    </div>
	</footer>

	</body>


</html>
