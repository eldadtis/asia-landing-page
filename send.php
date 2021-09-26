<?php
    if(isset($_POST['phone']) && !empty($_POST['phone']) && isset($_POST['email']) && !empty($_POST['email'])){
        // insert form data to parameters
        $phone   = $_POST['phone'];
        $email  = $_POST['email'];
    
        // build email text
    
        $subject = 'דף נחיתה נויה';
        $msg = 'היי, קיבלתם ליד חדש מהדף נחיתה' . '<br>';
          $msg .= $phone."<br>".$email;
    
        //prepare important stuff that need to be in email
          $headers = "MIME-Version: 1.0" . "\r\n";
          $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
        //send email
          mail("info@asia-cyrus.co.il",$subject, $msg, $headers);

          header("HTTP/1.1 200 OK");
          echo 'ok';
    } else {
        header("HTTP/1.1 400 Bad Request");
    }
?>