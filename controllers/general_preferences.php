<?php
    session_start();
    require_once('../config/db.php');
        // Get current player's id and username
        $id = $_SESSION['uid'];
        $username = $_SESSION['username'];

        // Get player's answers from general preferences quiz
        $teammate_pref = mysqli_real_escape_string($conn, $_POST['pref-question-1']);
        $describe_yourself = mysqli_real_escape_string($conn, $_POST['pref-question-2']);
        $mad_while_playing = mysqli_real_escape_string($conn, $_POST['pref-question-3']);
        $foul_language = mysqli_real_escape_string($conn, $_POST['pref-question-4']);
        $age_group = mysqli_real_escape_string($conn, $_POST['pref-question-5']);
        $strongest_trait = mysqli_real_escape_string($conn, $_POST['pref-question-6']);
        $active_on_mic = mysqli_real_escape_string($conn, $_POST['pref-question-7']);
        $game_pref = mysqli_real_escape_string($conn, $_POST['pref-question-8']);
        $player_type = mysqli_real_escape_string($conn, $_POST['pref-question-9']);
        $color = mysqli_real_escape_string($conn, $_POST['pref-question-10']);
        $animal = mysqli_real_escape_string($conn, $_POST['pref-question-11']);
        $book = mysqli_real_escape_string($conn, $_POST['pref-question-12']);
        $drink = mysqli_real_escape_string($conn, $_POST['pref-question-13']);
        $general_pref = mysqli_real_escape_string($conn, $_POST['pref-question-14']);

        // Check if it is the first the player is taking the quiz. If yes, then stores player's answers into the database.
        $user_taken_quiz_query = "SELECT id AND username FROM general_pref WHERE id='" .$id. "'AND username='" .$username. "'";
        $quiz_status = $conn->query($user_taken_quiz_query);
      //  $user_taken_quiz_result = mysqli_query($conn, $user_taken_quiz_query);
    //    $user_taken_quiz = mysqli_fetch_assoc($user_taken_quiz_result);

        if (!$quiz_status)
        {
            $query = "INSERT INTO general_pref (id, username, teammate_pref, describe_yourself, mad_while_playing, foul_language, age_group, strongest_trait, active_on_mic, game_pref, player_type, color, animal, book, drink, general_pref)
                  VALUES('$id' , '$username', '$teammate_pref', '$describe_yourself', '$mad_while_playing', '$foul_language', '$age_group', '$strongest_trait', '$active_on_mic', '$game_pref', '$player_type', '$color', '$animal', '$book', '$drink','$general_pref')";
        } // Updates player's answers into the database
        else
        {
            $query = "UPDATE general_pref SET teammate_pref='" .$teammate_pref.  "'AND describe_yourself='" .$describe_yourself.  "'AND mad_while_playing='" .$mad_while_playing. "'AND foul_language='" .$foul_language. "'AND age_group='" .$age_group.
                "'AND strongest_trait='" .$strongest_trait. "'AND active_on_mic='" .$active_on_mic. "'AND game_pref='" .$game_pref. "'AND player_type='" .$player_type. "'AND color='" .$color. "'AND animal'" .$animal. "'AND book='" .$book.
                "'AND drink='"  .$drink. "'AND general_pref='" .$general_pref. "'WHERE id='" .$id. "'AND username='" .$username. "'";
        }


        //Returns true or false if the query has executed successfully, and notifies the player
        $status = $conn->query($query);
        if (!$status)
        {
            header('location: ../dashboard.php?could_not_update_preferences');
            exit();
        }
            header('location: ../dashboard.php?updated_preferences');

?>