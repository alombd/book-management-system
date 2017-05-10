<!-- /**
 *  @ Developed By IECL,
 *  @ Author By Md.Alamgir Hossen ,
 *  @ Start  Date : 14-Fer-2016,
 *  @ Copyright : IECL,
 *  @ Web Url : http:imed.gov.bd
 */ -->

<head>

    <link rel="stylesheet" type="text/css" href="css/style_registration.css" media="all" />
</head>
<body>
<div class="container">
			
            <div class="freshdesignweb-top">

                <div class="clr"></div>
            </div>
			<header>
				<h1><span>Registration Form </h1></span>
            </header>       
      <div  class="form">
    		<form id="contactform"> 
    			<p class="contact"><label for="name">Name</label></p><br> 
    			<input id="name" name="name" placeholder="name" required="" tabindex="1" type="text"> 
    			 
    			<p class="contact"><label for="email">Email</label></p><br> 
    			<input id="email" name="email" placeholder="Enter your mail" required="" type="email">

                <p class="contact"><label for="password">Password</label></p><br> 
    			<input type="password" id="password" name="password" required=""> 

                <p class="contact"><label for="address">Address</label></p><br> 
    			<textarea rows="4" cols="59.5" name="add" placeholder="Enter Your address" style=""></textarea>
    			 
                <p class="contact"><label for="phone">Mobile phone</label></p><br> 
            	<input id="phone" name="phone" placeholder="phone number" required="" type="text"> <br>

	  			 <p class="contact"><label for="address">Gander</label></p>
	            <select class="select-style gender" name="gender">
	            <option value="select">select One</option>
	            <option value="m">Male</option>
	            <option value="f">Female</option>
	            <option value="others">Other</option>
	            </select><br><br>

	            <p class="contact"><label for="address">Hobbies</label></p>
				cricket<input type="checkbox"  name="hobb[]" value="cricke"/>
				singing<input type="checkbox" name="hobb[]" value="singing"/>
				dancing<input type="checkbox" name="hobb[]" value="dancing"/><br><br>

				<p class="contact"><label for="address">select your country</label></p>
				<select class="select-style gender" name="c">
					<option value="select">select One</option>
					<option>Bangladeah</option>
					<option>india</option>
					<option>pakistan</option>
					<option>china</option>
				</select><br><br>

				<p class="contact"><label for="address">select Year</label></p>
				<select  name="yy" required>
				<option value="select">Year</option>
				<?php 
				for($i=1900;$i<=2016;$i++)
				{
				echo "<option value='$i'>".$i."</option>";
				}
				?>	
				</select>	
				<select  name="mm" required>
					<option value="select">Month</option>
					
				<?php 
				for($i=1;$i<=12;$i++)
				{
				echo "<option value='$i'>".$i."</option>";
				}
				?>	
				</select>
				<select  name="dd" required>
					<option value="select">Data</option>
				<?php 
				for($i=1;$i<=31;$i++)
				{
				echo "<option value='$i'>".$i."</option>";
				}
				?>	
				</select>
				<br><br>
				<p class="contact"><label for="address">Image</label></p><br>
				<input type="file" name="img" required>
				<br><br>
				<input class="buttom" name="submit" id="submit" tabindex="5" value="submit!" type="submit">
   </form> 
</div>      
</div>

</body>
</html>


