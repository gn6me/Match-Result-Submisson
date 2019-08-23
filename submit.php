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
        //Get the uploaded file information
        $name_of_uploaded_file = basename($_FILES['uploaded_file']['name']);
        //get the file extension of the file
        $type_of_uploaded_file = substr($name_of_uploaded_file, strrpos($name_of_uploaded_file, '.') + 1);
        $size_of_uploaded_file = $_FILES["uploaded_file"]["size"]/1024;//size in KBs

        $email_from = '';
        $email_subject = "";
        $email_body = $msg;

        $to = $recipient;
        $headers = "From: $email_from \r\n";
        $headers .= "Reply-To: $email \r\n";
        mail ($to,$email_subject,$email_body,$headers);

        // Function to validate against any email injection attempts
        header("location: "); 

?>