<head>
<script type="text/javascript" src="scripts/script.js"></script>
<link rel="stylesheet" type="text/css" href="stylesheets/overlay.css">
</head>
<body>
  <div class="container">
    <div class="container-split">
      <div id="NM">
        Nomod:
      </div>
    </div>
    <div class="container-split">
      <div id="HD">
        Hidden:
      </div>
      <div id="HR" style="margin-top: 10px">
        Hard Rock:
      </div>
    </div>
    <div class="container-split">
      <div id="DT">
        Double Time:
      </div>
      <div id="SM" style="margin-top: 10px">
        Forced Mods:
      </div>
    </div>
  </div>

  <div class="container-controls">
      <div>
          <div class="bluebg">
          P1: <?php echo $_GET['Player1'] ?>
          P2: <?php echo $_GET['Player2'] ?>
          <br/>
          Map Controls:
          </div>
        <br/>
          <div class="container-split">
            <div id="NMControls" class="bluebg">
            </div>
            <br/>
          </div>
          <div class="container-split">
            <div id="HDControls" class="bluebg">
            </div>
            <br/>
            <div id="HRControls" class="bluebg" style="margin-top: 5px;">
            </div>
            <br/>
          </div>
          <div class="container-split">
            <div id="DTControls" class="bluebg">
            </div>
            <br/>
            <div id="SMControls" class="bluebg" style="margin-top: 5px;">
            </div>
          </div>
      </div>
  </div>
</body>
<?php
include 'includes/dbh.php';

$modAmount = array($_GET['AmountNM'],$_GET['AmountHD'],$_GET['AmountHR'],$_GET['AmountDT'],$_GET['AmountSM']);
$mod = array("NM","HD","HR","DT","SM");

for($i = 0; $i < 5; $i++)
{
  for($j = 0; $j < $modAmount[$i]; $j++)
  {
    $sql = $conn->prepare("SELECT * FROM beatmapData WHERE id =" . $_GET[$mod[$i] . ($j + 1)]."");
    $sql->execute();
    foreach($sql as $row)
    {
      ?>
      <script>
        createBeatmapBoxOverlay('<?php echo $row['title']?>', '<?php echo $row['artist'] ?>', '<?php echo $row['background'] ?>', '<?php echo $mod[$i] ?>', <?php echo $j?>);
      </script>
      <?php
    }
  }
}
?>
<script>
    savePlayerNames("<?php echo $_GET['Player1'] ?>", "<?php echo $_GET['Player2'] ?>");
    createMapControls(<?php echo $_GET["AmountNM"];?>, "NM");
    createMapControls(<?php echo $_GET["AmountHD"];?>, "HD");
    createMapControls(<?php echo $_GET["AmountHR"];?>, "HR");
    createMapControls(<?php echo $_GET["AmountDT"];?>, "DT");
    createMapControls(<?php echo $_GET["AmountSM"];?>, "SM");
</script>
