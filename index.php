<!DOCTYPE>
<?php

include("functions/functions.php");

?>

<html>
<head>
	<title>Electrical Shop</title>


	<link rel="stylesheet" href="styles/main.css" media="all"/>
</head>
<body> 
    <!--main container starts here-->
	<div class="main_wrapper">

           <!--header starts here-->  
			<div class="header_wrapper">

				<img id="logo" src="images/home.png"  border="1"/>
				<img id="banner" src="images/connect.jpg"  border="1"/>

				

			</div>
			<!--header ends here-->

			<!--NavigationBar starts here-->
			<div class="menubar">
					

					<ul id="menu">
						<li><a href="#">Home</a></li>
						<li><a href="#">All Products</a></li>
						<li><a href="#">My Account</a></li>
						<li><a href="#">Sign up</a></li>
						<li><a href="#">Shopping Cart</a></li>
						<li><a href="#">Contact Us</a></li>
						<li>
							<div id="form">
                    	<form method="get" action="results.php" enctype="multipart/form-data"/>
                    		<input type="text" name="user_query" placeholder="search what you want" />
                    		<input type="submit" name="search" value="Search"/>
                    	</form>
                    </div>
                </li>
					</ul>

					




			</div>
				<!--NavigationBar ends here-->
			
			<!--conetnt wrapper start-->
			<div class="content_wrapper">
			<div id="sidebar">
				
                  

                  <div id="sidebar_title">Categories</div>
                  
                  <ul id="Cats">
                  	
                   <?php  getCats(); ?>
                  	
                    </ul>

                    <div id="sidebar_title">Brands</div>
                    <ul id="Cats">

                  	<li><a href="#">Dell</a></li>
                  	<li><a href="#">HP</a></li>
                  	<li><a href="#">Samsung</a></li>
                  	<li><a href="#">Apple</a></li>
                  	<li><a href="#">Rasperberry/banana</a></li>
                  	<li><a href="#">Nikkon</a></li>
                  	<li><a href="#">Kingston</a></li>



                  </ul>

			</div>

			
                  
                  

			
			<div id="content_area">this is content area</div>

		</div>
		    <!--content wrapper ends here-->

		<div id="footer">
			
			<h2 style="text-align: center; padding-top: 30px;">&copy; 2018 by chamod kanishka</h2>
		</div>




	</div>
	<!--main container starts here-->

</body>
</html> 