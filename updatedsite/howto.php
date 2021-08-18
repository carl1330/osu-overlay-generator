<html>

<head>
  <title>osu!Overlay</title>
  <link rel="stylesheet" type="text/css" href="stylesheets/main.css"></link>
  <link rel="stylesheet" type="text/css" href="stylesheets/content.css"></link>
  <link rel="stylesheet" type="text/css" href="stylesheets/header.css"></link>
  <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
</head>

<body>
  <?php
  include 'includes/header.php';
  ?>
  <div class="content-nav_container">
    <div class="content-nav_content">
      <div>
        <h1>How to use osu!Overlay</h1>
        <hr>
        <h2 class="h2Text"><a target="_blank" href="http://osuoverlay.tk/newoverlay.php">New overlay page <img class="newpage" src="images/howto/newpage.png" alt="newpage icon"></a></h2>
        <p class="pText">1. Select the amount of maps you want per mod.</p>
        <p class="pText">2. Enter player names.</p>
        <p class="pText">3. Press submit. </p>
        <h2  class="h2Text">Beatmap selection page</h2>

        <p class="pText">1. Enter your API key. <a target="_blank" href="https://osu.ppy.sh/p/api">Find it here <img class="newpage" src="images/howto/newpage.png" alt="newpage icon"></a> <br></p>

        <p class="pText">2. Enter all the beatmap IDs for your selected maps.<br>The ID can be found in this part of the beatmap link
        </p>
        <p class="pText" style="font-size: 17px; margin-bottom: -0px;">Old website</p>
        <img class="example" src="images/howto/linkscreenshotold.png" alt="example">
        <br>
        <br>
        <p class="pText" style="font-size: 17px; margin-bottom: -0px;">New website</p>
        <img class="example" src="images/howto/linkscreenshotnew.png" alt="example">
        <br>
        <h2  class="h2Text" style="padding-top:20px;">Generated overlay page</h2>
        <p class="pText"><b>
            </b></p>
        <p class="pText">I recommend saving this link for later use.</p>
        <p class="pText">The controls are simple. You will see buttons for each map below.</p>
        <img style="height: 280px;" class="example" src="images/howto/overlayexample.png" alt="overlay example">
        <p class="pText">This should be self explanatory. Once a map is banned or played, you press the respective button according to the result.</p>
        <br>
        <h2  class="h2Text">Setting up OBS</h2>
        <p class="pText">Transparency will allow you to add your own background image. That's why you will need to use BrowserSource in OBS to live stream the website. <br>It can be found here:</p>
        <img style="height:300px;" class="example" src="images/howto/browsersourceexample.png" alt="BrowserSource Example">
        <br>
        <br><br>
        <p class="pText">Remember the URL I mentioned earlier? This is where it comes in to play.<br>Simply paste it in the URL section.<br> Enter width: 1920<br>Enter height: 2000<br>Don't touch the rest :)</p>
        <img class="example" src="images/howto/browsersourceurlexample.png">
        <p class="pText">Once you press "OK", the map pool will be shown on stream. It may take a few seconds for the website to load.<br><br>At this point, the entire website will be shown on stream, even the control buttons. To hide them, you simply need to hold down the alt key, and then drag the bounding box in where you'd like to crop. Also, resize it to your liking.</p>
        <br>
        <h2  class="h2Text">Changing player name</h2>
        <p class="pText">To change the player name, you simply change the part of the link highlighted below.</p>
        <p class="exampleLink" style="font-family: 'Inconsolata', monospace;
">http://osuoverlay.tk/generatedoverlay.php?NM1=75&AmountNM=1&HD1=75&AmountHD=1&HR1=75&AmountHR=1&DT1=75&AmountDT=1&SM1=75&AmountSM=1&&Player1=<span class="highlightedLink">Player%201</span>&Player2=<span class="highlightedLink">Player%202</span></p>

        <h2  class="h2Text">Controls</h2>
        <p class="pText">Right click the browser source and select "interact". A window will popup where you will be able to interact with the control buttons in the same way you were able to in your browser. This window is resizable. You may want to resize it to your liking.<br><br>TADA ur DONE!</p>
        <br><br>
        <p class="pText">In case you need to contact me: <b>contact@osuoverlay.tk</b></p>
      </div>
    </div>
  </div>
</body>

</html>
