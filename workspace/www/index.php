<?php
session_start();
 
  $wrong_password=null;
if (isset($_POST['email'])) {
  
	// Set the posted data from the form into local variables
	$entered_email = strip_tags($_POST['email']);
	$entered_password = strip_tags($_POST['password']);  
  
  //=============   connecting to DB ====================
  try{
    $db = new PDO('mysql:host=localhost;dbname=mytaxca;charset=utf8','root', '123456');
    $db->exec("SET NAMES 'utf8'");
  } catch (Exception $e){
    echo "fail to connect to server.";
      exit;
  }
  //=============  End connecting to DB =================
  
  //+++++++++++++  getting data +++++++++++++++++++
  
  try{
    $result = $db->query("SELECT * FROM users WHERE email='$entered_email' AND password ='$entered_password'");
    $row = $result->fetchAll();
    //var_dump($row);  
  } catch (Exception $e){
    echo "cannot get data from server!";
    exit;
  }
  
  //+++++++++++++  End getting data +++++++++++++++
	
	// Check if the username and the password they entered was correct
	if (!empty ($row)) {
    
		// Set session 
		$_SESSION['email'] = $row[0][0];
		$_SESSION['name'] = $row[0][1];
    $_SESSION['password'] = $row[0][2];
    $_SESSION['level'] = $row[0][3];
    $wrong_password=false;
		// Now direct to users feed
		header("Location: dash.php");
	} else { 
		$wrong_password=true;
	}
	
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>My TextCA</title>
        <link rel="stylesheet" type="text/css" href="assets/css/styles_main.css"/>
        <link rel="icon" type="image/png" href="assets/images/icon.png" />
          
    </head>

<body class="login_container">
        <noscript><p>Your browser does not support JavaScript!</p></noscript>

        <h1 id="title"> 
        	My TextCA 
        <h1/>

        <div class="login_box_center">
            <div class="login_form_box">
                
                <div id="login_tab" class="form-action show">
                    <h1 class="login_header">Login</h1>
            
                    <form class="login_form" name="login_form" method="post" action="index.php">
                            <input type="text" placeholder="Email" name='email' required/>
                            <input type="password" placeholder="Password" name='password' required/>
                            <input type="submit" value="Login" class="login_button" />
                    </form>
                  
                  <?php
                    if($wrong_password==true){
                      ?>
                      <h6>sorry, wrong email or password!</h6>
                   <?php } ?>

                </div>
           
            </div>
            </div>
    </body>
</html>