<?php        
        
        $player1 = $_POST['player1'];
        $player2 = $_POST['player2'];
        $p1_shield = $_POST['s1'];
        $p2_shield = $_POST['s2'];
        $p1_ban = $_POST['s3'];
        $p2_ban = $_POST['s4'];
        $p1_game1 = $_POST['s5'];
        $p2_game1 = $_POST['s6'];
        $game1_result = $_POST['game1-result'];
        $p1_game2 = $_POST['s7'];
        $p2_game2 = $_POST['s8'];
        $game2_result = $_POST['game2-result'];
        $p1_game3 = $_POST['s9'];
        $p2_game3 = $_POST['s0'];
        $game3_result = $_POST['game3-result'];

        $replay_link = $_POST['replay-links'];
        $screenshots = $_POST['imgur-links'];
        
        $msg = "$player1 VS $player2 \n \n $player1 \n Shield: $p1_shield \n Ban: $p1_ban \n \n $player2 \n Shield: $p2_shield \n Ban: $p2_ban \n \n Game 1 Result: \n $p1_game1 VS $p2_game1 \n $game1_result \n \n Game 2 Result: \n $p1_game2 VS $p2_game2 \n $game2_result \n \n Game 3 Result: \n $p1_game3 VS $p2_game3 \n $game3_result \n \n Replay Links: \n $replay_link \n \n Screenshots: \n $screenshots";

        $email_from = ""; //ADD FROM EMAIL
        $email_subject = "Aspirant Match Resul";
        $email_body = $msg;

        $to = ""; //ADD YOUR EMAIL
        $headers = "From: $email_from \r\n";
        $headers .= "Reply-To: $email \r\n";
        mail ($to,$email_subject,$email_body,$headers);

        echo "Thank you"; //EDIT THANK YOU

?>