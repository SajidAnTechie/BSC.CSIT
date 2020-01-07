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
  <?php include('server.php'); ?>
			 <div class="loginnavbar">
				  <div class="container">
			
						<img class="forimglogin" src="img/csit.png">
						<div id="forbuttonjs">
							<span><button  class="btn btn-primary" id="abt">About page</button></span>
							<button class="btn btn-primary" id="mem">Our member</button>
						</div>
				  
				 
				  
				  </div>			  
			</div>  
			
			
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="header-login">
										<h2>
											Login
										</h2>
							<form action="login.php" method="post">
									<div class="login-group">
										<label style="font-weight:0px;" >username</label>
										<input type="text" name="username"  value="<?= $username?>"><br/>
										
										<span class="error"><?=  $username_error ?></span>
									</div>
									
									<div class="login-group">
										<label style="font-weight:0px;" >password</label>
										<input type="password" name="password"  value="<?= $password?>"><br/>
										<span class="error"><?=  $password_error ?></span>
									</div>
									
									<input type="submit" style="   width: 97px;height: 37px;margin-top: 35px; margin-right: 95px;" name="login" value="Login" class="btn btn-primary" /><br/>
										 <span id="abs" class="error"> <?= $login_error ?> </span>
							</form><br>
								<p>Not  a member ?<a class="btn btn-primary" href="registration.php">Register</a></p>
						</div> 
					</div>
						
						
							<div class="col-sm-6">
								<div id="jque" class="forjquerry">
										<div class="row">
											<div class="col-sm-6">
												<div id="forcenter">
														<img class="system" src="img/system.png">
														<h4>System</h4>
													<p>
														Education system is the key to succes.
													</p>
												</div>
											</div>
											<div class="col-sm-6">
												<div id="forcenter">
														<img class="system" src="img/education.png">
														<h4>Education</h4>
													<p>
														Education makes person brighter and lighter.
													</p>
												</div>
											</div>
										</div>
										
										
										
										
										<div class="row">
											<div class="col-sm-6">
													<div id="forcenter">
														<img class="system" src="img/note.png">
														<h4>Notes</h4>
													<p>
														Notes are helful for scoring good marks.
													</p>
												</div>
											</div>
											<div class="col-sm-6">
														<div id="forcenter">
														<img class="system" src="img/cordination.png">
														<h4>Coordination</h4>
													<p>
														Cordination hepls to build good relation among frids and teacher.
													</p>
												</div>
											</div>
										</div>
								</div>
								
								
								<div id="coders" class="formemebers">
										<h3><font color="#2316b2">Our</font> Team</h3>
										<div class="row">
											<div class="col-sm-6">
												<div id="formembermar">													
													<img src="img/sajidps.png" class="sajidps">
														<h4>Sajid Ansari</h4>
													<p>FrontEnd & BackEnd Desighner</p>
												</div>
											</div>
											<div class="col-sm-6">	
													<div id="formembermar">														
														<img src="img/pappups.jpg" class="sajidps">
														<h4>Pappu Mishra</h4>
														<p>FrontEnd & BackEnd Desighner</p>
													</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-6">												
												<div id="formembermar">
													<img src="img/saminps.jpg" class="sajidps">
													<h4>Samin Thapa</h4>
													<p>FrontEnd & BackEnd Desighner</p>
												</div>
												
											</div>
											<div class="col-sm-6">													
												<div id="formembermar">
													<img src="img/nibisaps.jpg" class="nibi">
													<h4>Nibisha Nepal</h4>
													<p> Graphics Desighner</p>
												</div>
													
											</div>
										</div>
								</div>
							</div>
					
						
						</div>
				</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
  </body>
</html>
