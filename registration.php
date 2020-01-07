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
			
					<div class=" loginnavbar forimg">
						<img class="forimgrespon" src="img/csit.png">
					</div>
  
  
  
		 <div  class="header-regitration">
					<h2>
						Register
					</h2>
            <form action="registration.php" method="post">
                <div class="form-group">
                  
                    <input id="nameconfirm" type="text" name="username" placeholder="username" value="<?= $username?>"><br/>
                    <span class="error"><?=  $username_error ?><p id="forname"</span>
                </div>
                <div class="form-group">
                   
                    <input id="emailconform" type="text" name="email" placeholder="email" value="<?= $email?>"><br/>
                    <span class="error"><?=  $email_error ?><p id="foremail"></p></span>
                </div>
                <div class="form-group">
                   
                    <input id="passwordFirst" type="password" name="password" placeholder="password" value="<?= $password?>"><br/>
                    <span class="error"><?=  $password_error ?><p id="sajid"></p></span>
                </div>
                <div class="form-group">
                   
                    <input id="passwordSecond" type="password" name="confirm" placeholder="confirm-password" value="<?= $confirm?>"><br/>
                    <span class="error"><?=  $confirm_error ?></span>
                    <span class="error"><?=   $donotmatched_error ?></span>
                </div>
                <input type="submit" style="width: 97px;height: 37px;  margin-top: 12px; margin-right: 95px;" name="register" value="Register" class="btn btn-primary" /><br/>
                <div class="success"><?= $success ?></div>
                            
            </form><br>
            <p>Already a member ?<a class="btn btn-primary" href="login.php">Login</a></p>

        </div>  
				<div class="forres">
					<button id="show">Get Start</button>
				</div>
				
			
			
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js">
		
	</script>
  </body>
</html>
