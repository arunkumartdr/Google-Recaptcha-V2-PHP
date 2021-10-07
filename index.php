<!DOCTYPE html>
<html>
<head>
    <title>reCAPTCHA demo by ArunKumar</title>
	
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>
  </head>
<body>

<h2>reCAPTCHA verification by PHP - demo by ArunKumar [Webdeveloper] </h2>
<p>
1.Create account here : https://www.google.com/recaptcha/admin <br>
2.Choose v2 with Iam Not a robot checkbok and click Create<br>
3.copy and save your sitekey and secret key<br>
4.Change both the keys in the script<br>
5.run the php script and check<br>

</p>

<form action="check.php" method="POST">


  <label for="phone">Enter your phone number:</label>

<input type="tel" id="phone" name="phone" maxlength="10"
       required>
       <br><br><br>
	   
	   
       <div class="g-recaptcha" data-sitekey="you sitekey here"></div>
       
	   <br>
  <input type="submit" value="Submit">
</form> 


</body>
</html>
