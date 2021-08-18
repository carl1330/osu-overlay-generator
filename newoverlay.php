<head>
  <link rel="stylesheet" type="text/css" href="stylesheets/main.css"></link>
  <link rel="stylesheet" type="text/css" href="stylesheets/content.css"></link>
  <link rel="stylesheet" type="text/css" href="stylesheets/header.css"></link>
</head>
<?php
include 'includes/header.php';
?>
<body>
  <div class="content-nav_container">
    <div class="content-nav_content">
      <div>
        <h1>New overlay</h1>
        <hr>
      </div>
      <div>
        <br/>
        <form action="beatmapdata.php" method="POST">
          Amount of NM maps:
          <select name="NM">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
          </select>
          <br/>
          <br/>
          Amount of HD maps:
          <select name="HD">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
          </select>
          <br/>
          <br/>
          Amount of HR maps:
          <select name="HR">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
          </select>
          <br/>
          <br/>

          Amount of DT maps:
          <select name="DT">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
          </select>
          <br/>
          <br/>

          Amount of SM maps:
          <select name="SM">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
          </select>
          <br/>
          <br/>
          <br/>
          Team 1 name:
            <input value="Player 1" name="Team1"><br/><br/>
          Team 2 name:
            <input value="Player 2" name="Team2">
          <br/>
          <br/>
          <button class="content-nav_button">Submit</button>
        </form>
      </div>
    </div>
  </div>
</body>
