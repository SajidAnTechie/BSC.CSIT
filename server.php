<?php
    
    session_start();
    
//define variables and set to empty values
    $username_error = $email_error = $password_error= $confirm_error  = $donotmatched_error = $login_error = $notlogedin_error ="";
    $username = $email = $password = $confirm = $success = $emailwr= ""; 

    $db = mysqli_connect('localhost', 'root', '', 'registration');

    //Form is submitted with Post method
    if(isset($_POST['register'])){

        if(empty($_POST["username"])){
            $username_error = "Name is required";
        } else{
            $username = test_input($_POST["username"]);
            //check if name only containe letters 
            if(!preg_match("/^[a-zA-Z ]*$/",$username)){
                $username_error = "Only letters and white space allowed";
            }
        }

        if(empty($_POST["email"])){
            $email_error = "Email is required";
        } else{
            $email = test_input($_POST["email"]);
            //check if email is valid or not 
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $email_error = "Invalid Email format";
            }
        }

        if(empty($_POST["password"])){
            $password_error ="Password is required";
        } else{
            $password = test_input($_POST["password"]);
           
        
        }

        if(empty($_POST["confirm"])){
            $confirm_error ="This   is required";
        } else{
            $confirm = test_input($_POST["confirm"]);
           
               
            }
           
            
                  
            if($username_error == '' and $email_error == '' and $password_error == '' and $confirm_error== ''){

                if( $password == $confirm){
                   
                    $sql = "INSERT INTO users (id, username, email, password , confirm)
                    VALUES ('','$username', '$email', '$password','$confirm')";
                        mysqli_query($db, $sql);         
                        $success = "You Are Register";
                        $_SESSION['username'] = $username;
						 $emailwr=$row['email'];
                        $_SESSION['success'] = "You are logged in";
                        header('location: index.php');

                }else{
                    $donotmatched_error= "Password don't mathched";
                }

              
            }
           



}
        if(isset($_POST['login'])){
            if(empty($_POST["username"])){
                $username_error = "Name is required";
            } else{
                $username = test_input($_POST["username"]);
                //check if name only containe letters 
                if(!preg_match("/^[a-zA-Z ]*$/",$username)){
                    $username_error = "Only letters and white space allowed";
                }
            }

            if(empty($_POST["password"])){
                $password_error ="Password is required";
            } else{
                $password = test_input($_POST["password"]);
               
            
            }

            if($username_error == '' and $password_error == ''){
                
                $query = "SELECT * FROM users WHERE username= '$username' AND password='$password'";
                $result = mysqli_query($db, $query);
                if (mysqli_num_rows($result) == 1){
                    $_SESSION['username'] = $username;
					$emailwr=$row['email'];
                    $_SESSION['success'] = "You are logged in";
                    header('location: index.php');
                }
                else{
                    $login_error = "Wrong username / password";
            }

            }


        }



        if(isset($_GET['logout'])){
            session_destroy();
            unset($_SESSION['username']);
            header('location: login.php');
        }


function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }

?>