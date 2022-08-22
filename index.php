<?php include 'includes/indexfunction.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Index</title>
<!-- links css to page-->
<link rel='stylesheet' href='css/form-style.css' type='text/css' />
<!-- focuses the javascript on ccnum -->
</head><body onload='document.form1.ccnum.focus()'>
<!-- h1 tag for header in white space-->
<h1>Payment Options</h1>
<!-- h2 tag for header in white space-->
<h2>Debit/Credit Card</h2>

<!-- image store inside class for styling-->
 <div class="img" >
 <!-- image path-->
		 <img src="image/card.png"/>
</div>

<!-- grey space starts here -->
<div class="mail">

			
<form name="form1" action="#" method ="post"">

<ul>
<!--first label for card number-->
<label> Card Number</label>
<!--this part is for card number-->
<li> <input type='text' name ='ccnum' id = "ccnum"/></li>
<!-- no break space after input-->
<li>&nbsp;</li>

<!--expiry date stored as month and year-->
 <div class="expdate" id="expdate">
 <label>Expiration Date</label>
 <!-- has seperate name so it can be used in php-->
             <select name = "month">
               <option value = "Month">Month</option>
               <option value = "01">01</option>
			   <option value = "02">02</option>
			   <option value = "03">03</option>
			   <option value = "04">04</option>
			   <option value = "05">05</option>
			   <option value = "06">06</option>
			   <option value = "07">07</option>
			   <option value = "08">08</option>
			   <option value = "09">09</option>
			   <option value = "10">10</option>
			   <option value = "11">11</option>
			   <option value = "12">12</option>
			   </select>
			   <!--seperate sleect for 2 dropdowns-->
			   <!--seperate name for php -->
			    <select name = "year">
                    <option value="Year"> Year</option>
                    <option value="2020"> 2020</option>
                    <option value="2021"> 2021</option>
					<option value="2022"> 2022</option>
					<option value="2023"> 2023</option>
					<option value="2024"> 2024</option>
					<option value="2025"> 2025</option>
					<option value="2026"> 2026</option>
                </select>
				<!-- no break space-->
					<li>&nbsp;</li>
				</div>
<!--security code -->
<div class="Security-Code">	
		<ul>
		<!-- label for sec code-->
		<label for ="scode"> Security Code</label>		
<!--sets it as an input field-->		
		<li><input type='text' name='seccode' id = "scode"
		maxlength="4"/></li>
</div>

<!--text displayed using <p> tag-->
<p>(3-4 digit code normally on the back of your card)</P>

<!-- submit button stored as an input -->
<!-- javascript linked with ccnum here -->
<!-- return used to prevent invalid data being entered into database-->
<li class="submit"> <input type="submit" name="submit" id="rq" value="Continue"
onclick=" return cardnumber(document.form1.ccnum)"/></li>

<!-- no break space-->
<li>&nbsp;</li>

</ul>
</form>
</div>
<!-- links html to script-->
<script  src="js/credit-card-master-validation.js"></script>
</body>
</html>