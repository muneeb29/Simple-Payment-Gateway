<?php include 'includes/secondfunction.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Secondpage</title>
<!--Links css to page-->
<link rel='stylesheet' href='css/form-style.css' type='text/css' />
</head><body onload='document.form1.text1.focus()'>
<!-- h1 tag to display header above grey space-->
<h1>You have successfully entered your credit card details</h1>
<!-- h2 tag to display text above grey space as well-->
<h2>Debit/Credit Card</h2>

<!-- mastercard image  -->
 <div class="img" >
		<!-- image path-->
		 <img src="image/card.png"/>
</div>

<!--h3 tag used to output text before card number -->
<h3>Your credit card number ends in</h3>

<!--class to store card number 
so that it can be formatted later-->
<div class = "echo">
<!--Store it in h3 tag-->
<h3> <?php echo $x; ?>  </h3>
</div>

<!-- Inside grey space -->
<div class="maila">

			

<li>&nbsp;</li>
</ul>
</form>
</div>
</body>
</html>