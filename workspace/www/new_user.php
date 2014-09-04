<?php

session_start();
 
$repeat = false;

if (isset($_SESSION['email'])) {
	// Put stored session variables into local PHP variable
	$email = $_SESSION['email'];
	$name = $_SESSION['name'];
  $level = $_SESSION['level'];
  
  try{
    $db = new PDO('mysql:host=localhost;dbname=mytaxca;charset=utf8','root', '123456');
    $db->exec("SET NAMES 'utf8'");
  } catch (Exception $e){
    echo "fail to connect to server.";
      exit;
  }  
  
if($_SERVER["REQUEST_METHOD"] == "POST" ){
    $entered_email = strip_tags($_POST['new_email']);
    $entered_name = strip_tags($_POST['new_name']);
    $entered_password = strip_tags($_POST['initial_pass']);  
    $entered_level = strip_tags($_POST['new_level']);

//============= Checking if account exists =======================

  try{
    $q = $db->query("SELECT * FROM users WHERE email='$entered_email' OR name ='$entered_name'");
    $row = $q->fetchAll(); 
  } catch (Exception $e){
    echo "cannot get data from server!";
    exit;
  }
	if (!empty ($row)) {
		$repeat = true;
	} else { 
    $repeat = false;
	}  
  
//============= End Checking if account exists ===================  
  if($repeat==false){
      try{
      $result = $db->prepare("INSERT INTO users (email,name, password, level) VALUES('$entered_email','$entered_name', '$entered_password', '$entered_level');");
      $result->execute();
      
        // this sesson tells thanks page what to show
      $_SESSION['action'] = 'add_user';
        
      header("Location: thanks.php");
    } catch (Exception $e){
      echo "cannot insert data to server!";
      exit;
    }
  } 
}
}else {
    header("Location: index.php");
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My TaxCA - New Employee</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
f
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dash.php">My TaxCA</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $name ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"> Edit Account</a>
                        </li>                      
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="dash.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="charts.php"><i class="fa fa-fw fa-bar-chart-o"></i> Search</a>
                    </li>
                    <li>
                        <a href="tables.php"><i class="fa fa-fw fa-table"></i> New Task</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Create a New Employee's Account
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="dash.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> New User Account
                            </li>
                        </ol>
                    </div>
                </div>
               <?php if($repeat == true) { ?>
                <h5 style="background-color:red;">Email or name has already been used</h5>
               <?php } ?>
                <!-- /.row -->
                <form role="form" method="post" action="new_user.php">
                  <div class="form-group">
                    <label for="new_email">New User's Email</label>
                    <input required name="new_email" type="email" class="form-control" id="new_email" placeholder="Enter Employee's Email">
                  </div>
                  <div class="form-group">
                    <label for="new_name">New User's Name</label>
                    <input required name="new_name" type="text" class="form-control" id="new_name" placeholder="Enter Employee's Name (First Last)">
                </div>
                  
                  <div class="form-group">
                    <label for="initial_pass">New User's Initial Password</label>
                    <input required name="initial_pass" type="password" class="form-control" id="initial_pass">
                </div>

                <div class="form-group">
                    <label for="new_level">New User's authority level</label>
                    <select required name="new_level" id="new_level">
                      <option value="3">3 (Heigh)</option>
                      <option value="2">2 (Medium)</option>
                      <option value="1">1 (Low)</option>
                    </select>
                </div>


                  <button type="submit" class="btn btn-default">Submit</button>
                </form>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>