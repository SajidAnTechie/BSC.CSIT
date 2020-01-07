<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>
		    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <?php include('server.php');
      if(empty($_SESSION['username'])){
		
        header('location: login.php');
		
       
    }
   ?>
		
		<div class="navbar-background">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div id="image-id" >
							<img class="forimgindex" src="img/csit.png">
						</div>
					</div>
					<div class="col-sm-10">
						<nav>
							<ul>
								<li><a href="#">Home</a></li>
								<li><a href="#">Notes</a></li>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</nav>
							<div id="for-button">
								<span><button id="for-profile"  class="btn btn-primary">Profile</button></span>
								<button id="forlogoutoption" class="btn btn-primary">Logout</button>
							</div>
					</div>
				</div>
			</div>
		</div>
		
		<div id="forlogout-session" class="forlogout-session">
				
					<img class="logout-icon" src="img/logout.png">
				<div id="myDIV"> 
					<p>
					<font color="#d3cbcb">Are you sure want to logout ?</font>
					</p>
					<a href="index.php?logout='1'"><button class="btn">Yes</button></a>  
					   <span>
						  <button id="cancle" class="btn active">Cancle</button>
					   
					   </span>
              </div>
		</div>
		
		
		
		<div id="user-profile" class="forlogout-session">
				
					<img class="logout-icon" src="img/profile-pic.png">
				<div id="myDIV"> 
					<p>
					<font color="#d3cbcb">Welcom, <?php echo $_SESSION['username']; ?></p></font>
					<?= $emailwr ?>
					</p>
						<button id="cancle-profile" class="btn active">Close</button>
              </div>
		</div>
		<br/>
       
	   
	   
	   
     
      