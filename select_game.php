<?php
// Alex Kritskiy and Pui Tam, 2019
require_once('partials/header.php');

$games = [
  "Apex Legends",
  "Fortnite",
  "League of Legends",
  "FIFA",
  "Call of Duty: Black Ops",
  "Rocket League",
  "Dead by Daylight"
  // "Overwatch",
  // "DOTA 2",
  // "Counter-Strike: Global Offensive",
  // "Garry's Mod",
  // "Factorio"
];
sort($games);

$skillLevels = ["Beginner", "Intermediate", "Advanced", "Elite"];
function renderSkillLevelBtnsToDOM($skillLevels)
{
  $html = "
    <div class='form-check form-check-inline'>
      <input class='form-check-input' type='radio' name='skillLevel' id='$skillLevels[0]' value='$skillLevels[0]' checked>
      <label class='form-check-label' for='$skillLevels[0]'>$skillLevels[0]</label>
    </div>
  ";
  for ($i = 1; $i < count($skillLevels); $i++) {
    $radioBtn = "
      <div class='form-check form-check-inline'>
        <input class='form-check-input' type='radio' name='skillLevel' id='$skillLevels[$i]' value='$skillLevels[$i]'>
        <label class='form-check-label' for='$skillLevels[$i]'>$skillLevels[$i]</label>
      </div>
    ";
    $html = $html . $radioBtn;
  }
  echo $html;
}

$times = [
  "12:00am", "1:00am", "2:00am", "3:00am",
  "4:00am", "5:00am", "6:00am", "7:00am",
  "8:00am", "9:00am", "10:00am", "11:00am",
  "12:00pm", "1:00pm", "2:00pm", "3:00pm",
  "4:00pm", "5:00pm", "6:00pm", "7:00pm",
  "8:00pm", "9:00pm", "10:00pm", "11:00pm"
];
$timeZones = ["PST", "CST", "EST"];

$systems = ["PC", "PS4", "Xbox One", "Nintendo Switch"];
?>

<div class="row">
  <div class="col-xl-6 col-lg-8 col-md-8 col-sm-12 col-xs-12 mx-auto">
    <div class="card lightCard">
      <div class="card-header text-center">Select Game and Match Criteria</div>
      <div class="card-body selectGameCardBody">
        <form action="controllers/get_matches.php" method="POST">
          <p>Choose a game:</p>
          <div class="form-group selectGame">
            <select class="form-control" name="chooseGame">
              <?php foreach ($games as $g) echo "<option>$g</option>"; ?>
            </select>
          </div>
          <!-- Skill Level -->
          <p>How good are you at this game?</p>
          <?php renderSkillLevelBtnsToDOM($skillLevels); ?>
          <!-- Availability -->
          <p>When are you available to play?</p>
          <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
              <div class="form-group">
                <label for="startTime">Start time</label>
                <select class="form-control" id="startTime" name="startTime">
                  <?php foreach ($times as $t) echo "<option>$t</option>"; ?>
                </select>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
              <div class="form-group">
                <label for="endTime">End time</label>
                <select class="form-control" id="endTime" name="endTime">
                  <?php foreach ($times as $t) echo "<option>$t</option>"; ?>
                </select>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
              <div class="form-group">
                <label for="timeZone">Time zone</label>
                <select class="form-control" id="timeZone" name="timeZone">
                  <?php foreach ($timeZones as $tz) echo "<option>$tz</option>"; ?>
                </select>
              </div>
            </div>
          </div>
          <!-- System -->
          <p>Your system:</p>
          <div class="form-group">
            <select class="form-control system" name="system">
              <?php foreach ($systems as $s) echo "<option>$s</option>"; ?>
            </select>
          </div>
          <!-- Submit -->
          <div class="text-center">
            <button type="submit" class="btn darkBtn" name="submit_select_game">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php require_once('partials/footer.php'); ?>