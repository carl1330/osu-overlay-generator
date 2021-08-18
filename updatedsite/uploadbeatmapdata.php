<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'includes/dbh.php';

$APIKey = $_POST['APIKey'];
$modAmount = array($_POST['AmountNM'],$_POST['AmountHD'],$_POST['AmountHR'],$_POST['AmountDT'],$_POST['AmountSM']);
$mod = array("NM","HD","HR","DT","SM");
$targeturl = "generatedoverlay.php?";
for($i = 0; $i < 5; $i++)
{
  for($j = 0; $j < $modAmount[$i]; $j++)
  {
  $beatmapID = $_POST[$mod[$i] . ($j + 1)];
  $url = "https://osu.ppy.sh/api/get_beatmaps?k=". $APIKey."&b=" . $beatmapID;
  $json = file_get_contents($url);
  $json_data = json_decode($json);
  $beatmapData = $json_data[0];

  $targeturl .= $mod[$i] . ($j + 1) . "=" . $beatmapID . "&";


  $title = filter_var($beatmapData->title, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $artist = filter_var($beatmapData->artist, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $background = "https://assets.ppy.sh/beatmaps/". $beatmapData->beatmapset_id ."/covers/cover.jpg";

  $sql = $conn->prepare("INSERT INTO beatmapData (id,artist,title,background) VALUES (:i,:a,:t,:b)");
  $sql->bindParam(':i', $beatmapID, PDO::PARAM_INT);
  $sql->bindParam(':a', $artist, PDO::PARAM_STR);
  $sql->bindParam(':t', $title, PDO::PARAM_STR);
  $sql->bindParam(':b', $background, PDO::PARAM_STR);

  $check = $conn->prepare("SELECT * FROM beatmapData WHERE id = '$beatmapID'");
  $check->execute();
  if($check->rowCount() > 0)
    {

    }
  else
    {
      $sql->execute();
    }
  }
  $targeturl .= "Amount" . $mod[$i] . "=" . $modAmount[$i] . "&";
}

$targeturl .= "&Player1=" . $_POST['Player1'] . "&Player2=" . $_POST['Player2'];
header("Location: $targeturl");

?>
