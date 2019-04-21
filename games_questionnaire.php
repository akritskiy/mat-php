<?php require_once('partials/header.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-10 m-auto">
            <div class="card">
                <h5 class="card-header">Games Questionnaire</h5>
                <div class="card-body">

                    <form action="controllers/games_questionnaire.php" method="POST" id="games_questionnaire">
                        <!-- Question 1 -->
                        <h5>1. Select Game:</h5>
                        <div>
                            <input type="radio" name="games-question-1" id="games-question-1-a" value="Apex Legends"/>
                            <label for="games-question-1-a">a. Apex Legends</label>
                        </div>
                        <div>
                            <input type="radio" name="games-question-1" id="games-question-1-b" value="FortNite"/>
                            <label for="games-question-1-b">b. FortNite</label>
                        </div>
                        <div>
                            <input type="radio" name="games-question-1" id="games-question-1-c" value="OverWatch"/>
                             <label for="games-question-1-c">b. OverWatch</label>
                        </div>
                        <div>
                            <input type="radio" name="games-question-1" id="games-question-1-d" value="League of Legends"/>
                            <label for="games-question-1-c">b. League of Legends</label>
                        </div>
                        <div>
                            <input type="radio" name="games-question-1" id="games-question-1-e" value="FIFA"/>
                            <label for="games-question-1-e">b. FIFA</label>
                        </div>
                        <div>
                            <input type="radio" name="games-question-1" id="games-question-1-f" value="Call of Duty: Black Ops"/>
                            <label for="games-question-1-f">b. Call of Duty: Black Ops</label>
                        </div>

                        <!-- Question 2 -->
                        <h5>2. How would you rate your average skill level for most games? (1 out of 5: 1 is lowest, 5 is highest)</h5>
                        <div>
                            <input type="radio" name="games-question-2" id="games-question-2-a" value="1"/>
                            <label for="games-question-2-a">a. 1</label>
                        </div>
                        <div>
                            <input type="radio" name="games-question-2" id="games-question-2-b" value="2"/>
                            <label for="games-question-2-b">b. 2</label>
                        </div>
                        <div>
                            <input type="radio" name="games-question-2" id="games-question-2-c" value="3"/>
                            <label for="games-question-2-c">b. 3</label>
                        </div>
                        <div>
                            <input type="radio" name="games-question-2" id="games-question-2-d" value="4"/>
                            <label for="games-question-2-d">b. 4</label>
                        </div>
                        <div>
                            <input type="radio" name="games-question-2" id="games-question-2-e" value="5"/>
                            <label for="games-question-2-e">b. 5</label>
                        </div>

                        <!-- Question 3 -->
                        <h5>3. How often do you play video games?</h5>
                        <div>
                            <input type="radio" name="games-question-3" id="games-question-3-a" value="0-4 hours per week"/>
                            <label for="games-question-3-a">a. 0-4 hours per week</label>
                        </div>
                        <div>
                            <input type="radio" name="games-question-3" id="games-question-3-b" value="5-9 hours per week"/>
                            <label for="games-question-3-b">b. 5-9 hours per week</label>
                        </div>
                        <div>
                            <input type="radio" name="games-question-3" id="games-question-3-c" value="10-14 hours per week"/>
                            <label for="games-question-3-c">b. 10-14 hours per week</label>
                        </div>
                        <div>
                            <input type="radio" name="games-question-3" id="games-question-3-d" value="15+ hours per week"/>
                            <label for="games-question-3-d">b. 15+ hours per week</label>
                        </div>

                        <!-- Question 4 -->
                        <h5>4. Would you consider yourself a beginner player?</h5>
                        <div>
                            <input type="radio" name="games-question-4" id="games-question-4-a" value="Yes"/>
                            <label for="games-question-4-a">a. Yes</label>
                        </div>
                        <div>
                            <input type="radio" name="games-question-4" id="games-question-4-b" value="No"/>
                            <label for="games-question-4-b">b. No</label>
                        </div>
                        <input type="submit" value="Submit"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
