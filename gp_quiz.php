<?php
// Alex Kritskiy and Pui Tam, 2019
require_once('partials/header.php');

class Question
{
  public $num;
  public $text;
  public $options;

  public function __construct($num, $text, $options)
  {
    $this->num = $num;
    $this->text = $text;
    $this->options = $options;
  }

  function renderQuestionToDOM() // Renders question to DOM as a radio btn group
  {
    $num = $this->num;
    $text = $this->text;
    $options = $this->options;

    $html = "<h5>$num. $text</h5>";
    foreach ($options as $option) {
      $radioBtn = "
        <div class='form-check'>
          <input class='form-check-input' type='radio' name='Q$num' id='Q$num $option' value='$option'>
          <label class='form-check-label' for='Q$num $option'>$option</label>
        </div>
      ";
      $html = $html . $radioBtn;
    }
    return $html;
  }
}

$questions = [
  new Question(1, 'You prefer...', ["Loud teammates", "Quiet teammates"]),
  new Question(2, 'You are...', ["A loud teammate", "A quiet teammate"]),
  new Question(3, 'You get mad while playing games with other players.', ["Agree", "Disagree"]),
  new Question(4, 'You use foul language often.', ["Agree", "Disagree"]),
  new Question(5, 'You are in this age group...', ["12 - 16 years old" . "17 - 25 years old", "26 - 35 years old", "36+ years old"]),
  new Question(6, 'Your strongest trait is...', ["Communication", "Strategy", "Support", "Top Fragger"]), // Don't understand these answer choices... - AK
  new Question(7, 'You are active on mic.', ["Agree", "Disagree"]),
  new Question(8, 'Your main goal while gaming is...', ["Being competitive and winning", "Just hanging out and having fun"]),
  new Question(9, "You are...", ["A serious gamer", "A casual gamer"]),
  new Question(10, 'Choose a color:', ["Red", "Blue", "Green", "Orange", "Purple", "Yellow"]),
  new Question(11, 'Choose an animal:', ["Dog", "Cat", "Tiger", "Turtle", "Rabbit"]),
  new Question(12, 'Choose a book type:', ["Fiction", "Non-fiction"]),
  new Question(13, 'Choose a drink:', ["Tea", "Coffee", "Soda", "Water"]),
  new Question(14, 'Choose a game genre:', ["Reality", "Fantasy", "Abstract"]) // Don't really understand these answer choices... - AK
];
?>

<div class="row">
  <div class="col-xl-6 col-lg-8 col-md-8 col-sm-12 col-xs-12 mx-auto">
    <div class="card lightCard">
      <div class="card-header text-center">General Gaming Preferences Quiz</div>
      <div class="card-body genPrefCardBody">
        <form action="controllers/general_preferences.php" method="POST">
          <?php foreach ($questions as $q) {
            echo $q->renderQuestionToDOM();
          } ?>
          <div class="text-center">
            <button type="submit" class="btn darkBtn" name="submit_gp_quiz">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php require_once('partials/footer.php'); ?>