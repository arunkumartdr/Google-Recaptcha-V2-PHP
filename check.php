<?php
		
		//var_dump($_POST);
		
		$captcha;

        if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
          echo 'Please check the the captcha form.';
          exit;
        }
		
        $secretKey = "your secret Key";
        $ip = $_SERVER['REMOTE_ADDR'];
        // post request to server
        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
        $response = file_get_contents($url);
        $responseKeys = json_decode($response,true);
        // should return JSON with success as true
        if($responseKeys["success"]) {
                echo 'Thanks for posting comment';
        } else {
                echo 'You are spammer ! Get the @$%K out';
        }
?>