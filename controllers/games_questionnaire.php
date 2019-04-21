<?php
    session_start();
    require_once('../config/db.php');

    // Get current player's id and username
    $id = $_SESSION['uid'];
    $username = $_SESSION['username'];

    // Get player's answers from game specific questionnaire
    $game = mysqli_real_escape_string($conn, $_POST['games-question-1']);
    $skill_level = mysqli_real_escape_string($conn, $_POST['games-question-2']);
    $hours_playing_games = mysqli_real_escape_string($conn, $_POST['games-question-3']);
    $beginner_player = mysqli_real_escape_string($conn, $_POST['games-question-4']);


    $questionnaire_query = "SELECT id AND username FROM games_questionnaire WHERE id='" .$id. "'AND username='" .$username. "'";
    $questionnaire_status = $conn->query($questionnaire_query);

    // Check if it is the first time the player is taking the quiz. If yes, then stores player's answers into the database.
    if (mysqli_fetch_row($questionnaire_status) == false)
    {
        $query = "INSERT INTO games_questionnaire (id, username, game, skill_level, hours_playing_games, beginner_player)
                  VALUES('$id', '$username', '$game', '$skill_level', '$hours_playing_games', '$beginner_player')";
    }
    // If the player has already taken the questionnaire, he/she will be asked if he/she wants to retake the quiz.
    else
    {
        $query = "UPDATE games_questionnaire SET game='" .$game. "', skill_level='" .$skill_level.
                 "', hours_playing_games='" .$hours_playing_games. "', beginner_player='" .$beginner_player.
                 "'WHERE id='" .$id. "'AND username='" .$username. "'";
    }

    //Checks if the query has executed successfully, and notifies the player
    $query_executed = mysqli_query($conn, $query);

    if ($query_executed == false)
        {
            header('location: ../dashboard.php?could_not_update_preferences');
            echo
            exit;
        }

            header('location: ../dashboard.php?updated_preferences');
            exit;