<body>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
<div class="w3-display-middle">
<h1 class="w3-jumbo w3-animate-top">TAKE YOUR MARK</h1>
<hr class="w3-border-grey" style="margin:auto;width:40%">
  <p><button class="w3-center center transparent_btn"
onclick="play1()">go</button></p>
  <div id="youtube-frame"></div>
  </div>
</div>
</body>

<script>
function play1() {
    var frame = document.getElementById("youtube-frame");
    frame.innerHTML += "<iframe width='560' height='315' src='https://www.youtube.com/embed/AkFs3YzxN_E' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
  }
</script>
