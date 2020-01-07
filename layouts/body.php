
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
 
		<?php $show="" ?>

<table width="100%" border=0>
	
    <td  width="17%" valign="top">
	   <div class="forchecking" id="for-table-back">
		<?php include("left-bar.php");?>
	   </div>
	</td>
	<td width="81%"   valign="top" align="left">
		<div style="width:98%;" id='main-Contents'>
			<?php 
				$show=$_GET['show'];
				if($show=="")
				{
				include("contain/main.php");
				}
				if($show=="firstsem")
				{
				include("contain/firstsem.php");
				}
				if($show=="secondsem")
				{
				include("contain/secondsem.php");
				}
				if($show=="thirdsem")
				{
				include("contain/thirdsem.php");
				}
				if($show=="fourthsem")
				{
				include("contain/fourthsem.php");
				}
				if($show=="fifthsem")
				{
				include("contain/fifthsem.php");
				}
				if($show=="sixthsem")
				{
				include("contain/sixthsem.php");
				}
				if($show=="seventhsem")
				{
				include("contain/seventhsem.php");
				}
				if($show=="eightsem")
				{
				include("contain/eightsem.php");
				}
			?>
		</div>
	</td>
	 
</table>
   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
  </body>
</html>
	   
	   
	   
     
      