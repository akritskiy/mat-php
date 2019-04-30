<?php
// Alex Kritskiy and Pui Tam, 2019
require_once('partials/header.php');
require_once('resources/QuestionClass.php');
require_once('resources/questions.php');
?>

<div class="row">
  <div class="col-xl-6 col-lg-8 col-md-8 col-sm-12 col-xs-12 mx-auto">
    <div class="card lightCard">
      <div class="card-header text-center">General Gaming Preferences Quiz</div>
      <div class="card-body genPrefCardBody">
        <form action="controllers/gp_quiz.php" method="POST">
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