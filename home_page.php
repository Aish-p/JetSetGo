<?php
	session_start();
?>
<html>
	<head>
		<title>
			Welcome to AQB Airlines
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
			<meta charset="UTF-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1.0" />
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
			<link rel="stylesheet" type="text/css" href="../library/css/bootstrap.min.css"/>
			<script type="text/javascript" src="../library/js/jquery-3.2.1.min.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
			<script src="https://kit.fontawesome.com/a076d05399.js"></script>
		</head>
	<body>
		
		<img class="logo" src="images/ASR6.jpg"/> 
		<h1 id="title">
			AQB Airlines
		</h1>
		<div>
			<ul>
				<li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"book_tickets.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_ticket_message.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
						else
						{
							echo "<a href=\"login_page.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
					?>
				</li>
				<li><a href="about_page.php"> About Us</a></li>
				<li><a href="contact_page.php"> Contact Us</a></li>
				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"customer_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
						else
						{
							echo "<a href=\"login_page.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
					?>
				</li>
			</ul>
		</div>
		<!--<div class="welcome_text">Welcome to AQB Airlines!</div>-->
		<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/ASR1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/ASR2.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/ASR3.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

	</body>
</html>