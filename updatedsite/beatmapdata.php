<head>
  <link rel="stylesheet" type="text/css" href="stylesheets/main.css"></link>
  <link rel="stylesheet" type="text/css" href="stylesheets/content.css"></link>
  <link rel="stylesheet" type="text/css" href="stylesheets/beatmap.css"></link>
  <link rel="stylesheet" type="text/css" href="stylesheets/header.css"></link>
  <script type="text/javascript" src="scripts/script.js"></script>
</head>
<?php
include 'includes/header.php';
?>
<body>
  <div class="content-nav_container">
    <div class="content-nav_content">
      <form method="POST" action="uploadbeatmapdata.php">
        <div>
          <h1>Insert Beatmap data</h1>
          <hr>
          <br/>

          <b>osu! API key:</b> <input name="APIKey">
          <br>

          <div id="NMMaps">
            <h4>Nomod maps:</h4>
          </div>
          <br>
          <div id="HDMaps">
            <h4>Hidden maps:</h4>
          </div>
          <br>
          <div id="HRMaps">
            <h4>Hard rock maps:</h4>
          </div>
          <br>
          <div id="DTMaps">
            <h4>Double time maps:</h4>
          </div>
          <br>
          <div id="SMMaps">
            <h4>Shared mod maps:</h4>
          </div>
          <br>
          <button class="content-nav_button">Submit</button>
          <input style="opacity: 0; visibility: none; pointer-events: none; cursor: cursor;" tabindex="-1" value="<?php echo $_POST['Team1'] ?>" name="Player1"></input>
          <input style="opacity: 0; visibility: none; pointer-events: none; cursor: cursor;" tabindex="-1" value="<?php echo $_POST['Team2'] ?>" name="Player2"></input>
        </div>
      </form>
    </div>
  </div>
</body>

<script>
  <?php
  for($i = 0; $i < 5; $i++)
  {
    $mod = array("NM","HD","HR","DT","SM");
    $modamount = array($_POST['NM'],$_POST['HD'],$_POST['HR'],$_POST['DT'],$_POST['SM']);
    for($j = 0; $j < $modamount[$i]; $j++)
    {
      ?>
      createBeatmapBox("<?php echo $mod[$i] ?>", <?php echo $modamount[$i] ?>, <?php echo $j ?>);
      <?php
    }
  }

  ?>
</script>
