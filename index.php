<!----------------------IT20639976 Hansika A G D R------------------------->
<?php
	setcookie ("OnlineMarketStore","IWTAssignment",time()+(86400*30),"/");
?>
<!DOCTYPE html>
<html>
<head>
	<title>EXPRESS MARKETING - fashion, health & beauty, sprts & more</title>
	<link rel="stylesheet" href="styleAndJs/styles.css">
	<script src="styleAndJs/javaS.js"></script>
</head>s
<body>
<div class="topnbottom">
	<table width="100%">
		<tr>
			<td rowspan="2"><img class="image1" width="150px" height="100px" src="images/logo.png"></td>
			<td rowspan="2"><h1 class="heading"><b>EXPRESS MARKETING</b></h1></td>
			<td colspan="2"><center><a class="avatar" a href="userAccount.html" ><img src="images/avatar2.png" width="80px"></center>
			</td>
		</tr>
		<tr>
			<td>
				<center><button class="btn1" type="button" align="right"><a href="login.php">Login</a></button></center>
			</td>
			<td>
				<center><button class="btn1" type="button"><a href="RegistrationForm.html">Register</a></button></center>
			</td>
		</tr>
	</table>

	<table width="100%" border="0">
	<tr>
		<td>
			<ul class="menu">
				<li class="menu"><a href="index.html">Home</a></li>
				<li class="menu"><a href="categoryDisplay.html">Categories</a></li>
				<li class="menu"><a href="service.html">Service</a></li>
				<li class="menu"><a href="contactUs.html">Contact US</a></li>
				<input type="text" placeholder="Search..." id="search">
			</ul>
		</td>
		<td>
	<!--cartImg-->
		<center>
			<a class="userAccount" href="userAccount.html"><img src="images/cart.png" width="70px" height="70px" ></a>
		</center>
		</td>
	</tr>
	</table>
	<hr>
	</div>
	
	
	<!--slideShow-->

	<div class="slide">
		<div id="slider"> 
			<figure>
			<center>
				<img src="images/image15.jpg">
				<img src="images/image18.jpg"> 
				<img src="images/image17.jpg">
				<img src="images/image19.png">
				<img src="images/image16.jpg">
				</center>
			</figure>
		</div>
	</div>
	
	
	<div id="paraR">
	<!--category images--->
	<center>
	<table class="catTable">
		<tr>
			<td width="25%">
				<center><img class ="img" src="images/image8.jpeg" width="75%"></center>
				<center><button class="bttn" type="button" id="babybtn"><a href = "baby.html">Baby Items</a></button></center>
			</td>
			
			<td width="25%">
				<center><img class = "img" src="images/image10.jpeg" width="75%"></center>
				<center><button class="bttn" type="button" id="btn2"><a href = "musicalInstuments.html">Musical Instruments</button></center>
			</td>
			
			<td width="25%">
				<center><img class = "img" src="images/image12.jpeg" width="75%"></center>
				<center><button class="bttn" type="button" id="homebtn"><a href = "home.html">Home</button></center>
			</td>
			
			<td width="25%">
				<center><img class = "img" src="images/image5.jpg" width="75%"></center>
				<center><button class="bttn" type="button" id="healthbtn"><a href = "healthAndBeauty.html">Health</button></center>
			</td>
		</tr>
		<tr>
			<td width="25%">
				<center><img class = "img" src="images/image14.jpeg" width="75%"></center>
				<center><button class="bttn" type="button" id="beautybtn"><a href = "healthAndBeauty.html">Beauty</button></center>
			</td>
			
			<td width="25%">
				<center><img class = "img" src="images/fashion.png" width="80%"></center>
				<center><button class="bttn" type="button" id="fashionbtn" ><a href="category.html">Jewellery</button></center>
			</td>
			
			<td width="25%">
				<center><img class = "img" src="images/image20.jpg" width="75%"></center>
				<center><button class="bttn" type="button" id="gardenbtn"><a href = "Garden.html">Garden</button></center>
			</td>
			
			<td width="25%">
				<center><img class = "img" src="images/image21.jpg" width="75%"></center>
				<center><button class="bttn" type="button" id="elecbtn"><a href = "electronics.html">Electronics</button></center>
			</td>
		</tr>
	</table>
	</center>
 </div>
	

	
	<!----------------------------------footer----------------------------------------------------->
<div>
	<footer class="footer">
	<hr>
		<table width="100%">
			<tr>
				<td><a id ="fPara"width="60%" class ="footer" width="50%"><h4><i>Online market store is making quick progress as an acknowledge and utilzed business worldview. Increasingly more business houses are carrying out sites giving usefulness to performing business exchanges over the web. It is sensible to say that the way toward shopping on the web is getting typical.</i></h4></td>
				<td><a class="fimg" href="https://usa.visa.com/" width="10%" target="_blank"><img src="images/visa.jpg" width="50px"></a>
				<td><a class="fimg" href="https://www.creditcards.com/mastercard/" width="10%" target="_blank"><img width="50px" src="images/master.jpg"></a>
				<td><a class="fimg" href="https://www.dinersclub.com/" width="10%" target="_blank"><img width="50px" src="images/diners.jpg"></a>
				<td><a class="fimg" href="https://www.americanexpress.com/" width="10%" target="_blank"><img width="50px" src="images/american.jpg"></a>
			</tr>
		</table>
	</footer>
</div>
</body>
</html>