<?php

session_start();
 
if (isset($_SESSION['email'])) {
	// Put stored session variables into local PHP variable
	$email = $_SESSION['email'];
	$name = $_SESSION['name'];
  $level = $_SESSION['level'];
} else {
	header("Location: index.php");
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
        $task_name = $_POST["task_name"];
        $customer_name = $_POST["customer_name"];
        $assign_to = $_POST["assign_to"];
        $deadline = $_POST["deadline"];
        $memo = $_POST["memo"];


        header("Location: thanks.php");
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

    <title>My TaxCA - New Task</title>

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

        <script>

            function validateForm() {
                var x = document.getElementById("customer_name").value;
                var y = document.getElementById("deadline").value;

                x = x.replace(/\s/g, '');
                y = y.replace(/\s/g, '');



                if (x.length==0 || y.length==0) {
                    alert("Not valid customer name or deadline");
                    return false;
                }
                else
                {
                    return true;
                }
            }

        </script>

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
                    <li class="active">
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
                            Create a New Task
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="dash.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> New Task
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <form role="form" method="post" action="tables.php" onsubmit="return validateForm();">
                  <div class="form-group">
                    <label for="task_name">Task Name</label>
                    <input name="task_name" type="text" class="form-control" id="task_name" placeholder="Enter Task Name">
                  </div>
                  <div class="form-group">
                    <label for="customer_name">Customer Name</label>
                    <input name="customer_name" type="text" class="form-control" id="customer_name" placeholder="Enter Customer's Name (First Last)">
                </div>
                  
                  <div class="form-group">
                    <label for="assign_to">Assign to</label>
                    <input name="assign_to" type="text" class="form-control" id="assign_to" placeholder="person who will be responsible for the task">
                </div>

                <div class="form-group">
                    <label for="deadline">Deadline</label>
                    <input name="deadline" type="date" class="form-control" id="deadline" >
                </div>

                <div class="form-group">
                    <label for="memo">Memo</label>
                    <input name="memo" type="message" class="form-control" id="memo" placeholder="Extra information about this task">
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
