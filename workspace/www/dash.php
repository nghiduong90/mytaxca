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
    
    $task_array = array();
    $task_array[101] = array(
        "task_name" => "a",
        "customer_name" => "jiashen",
        "assign_to" => "tina",
        "deadline" => "1/1/2011",
        "memo" => "bla bla and bla",
        "status" => "2"
        );
    $task_array[102] = array(
        "task_name" => "b",
        "customer_name" => "jiashen",
        "assign_to" => "tina",
        "deadline" => "1/1/2011",
        "memo" => "bla bla and bla",
        "status" => "2"
        );
    $task_array[103] = array(
        "task_name" => "c",
        "customer_name" => "jiashen",
        "assign_to" => "tina",
        "deadline" => "1/1/2011",
        "memo" => "bla bla and bla",
        "status" => "2"
        );
    $task_array[104] = array(
        "task_name" => "d",
        "customer_name" => "jiashen",
        "assign_to" => "tina",
        "deadline" => "1/1/2011",
        "memo" => "bla bla and bla",
        "status" => "2"
        );  
    $task_array[105] = array(
        "task_name" => "a",
        "customer_name" => "jiashen",
        "assign_to" => "tina",
        "deadline" => "1/1/2011",
        "memo" => "bla bla and bla",
        "status" => "2"
        );
    $task_array[106] = array(
        "task_name" => "b",
        "customer_name" => "jiashen",
        "assign_to" => "tina",
        "deadline" => "1/1/2011",
        "memo" => "bla bla and bla",
        "status" => "2"
        );
    $task_array[107] = array(
        "task_name" => "c",
        "customer_name" => "jiashen",
        "assign_to" => "tina",
        "deadline" => "1/1/2011",
        "memo" => "bla bla and bla",
        "status" => "2"
        );
    $task_array[108] = array(
        "task_name" => "d",
        "customer_name" => "jiashen",
        "assign_to" => "tina",
        "deadline" => "1/1/2011",
        "memo" => "bla bla and bla",
        "status" => "2"
        );   

       
    $task_array[109] = array(
        "task_name" => "b",
        "customer_name" => "jiashen",
        "assign_to" => "tina",
        "deadline" => "1/1/2011",
        "memo" => "bla bla and bla",
        "status" => "2"
        );
    $task_array[110] = array(
        "task_name" => "c",
        "customer_name" => "jiashen",
        "assign_to" => "tina",
        "deadline" => "1/1/2011",
        "memo" => "bla bla and bla",
        "status" => "2"
        );
    $task_array[111] = array(
        "task_name" => "d",
        "customer_name" => "jiashen",
        "assign_to" => "tina",
        "deadline" => "1/1/2011",
        "memo" => "bla bla and bla",
        "status" => "1"
        );  
    $task_array[112] = array(
        "task_name" => "a",
        "customer_name" => "jiashen",
        "assign_to" => "tina",
        "deadline" => "1/1/2011",
        "memo" => "bla bla and bla",
        "status" => "1"
        );
    $task_array[113] = array(
        "task_name" => "b",
        "customer_name" => "jiashen",
        "assign_to" => "tina",
        "deadline" => "1/1/2011",
        "memo" => "bla bla and bla",
        "status" => "3"
        );
    $task_array[114] = array(
        "task_name" => "c",
        "customer_name" => "jiashen",
        "assign_to" => "tina",
        "deadline" => "1/1/2011",
        "memo" => "bla bla and bla",
        "status" => "2"
        );
    $task_array[115] = array(
        "task_name" => "d",
        "customer_name" => "jiashen",
        "assign_to" => "tina",
        "deadline" => "1/1/2011",
        "memo" => "bla bla and bla",
        "status" => "3"
        );           

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My TaxCA</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <b class="caret"></b>Add</a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="tables.php">Create New Task </a>
                        </li>
                      <?php if($level==3) {?>
                        <li>
                            <a href="new_user.php"> Add New Employee</a>
                        </li>                          
                        <?php } ?>                      
                    </ul>
                </li>
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
                    <li class="active">
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
                            Dashboard <small> Overview</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>

                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">25</div>
                                        <div>Total Tasks this week!</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">12</div>
                                        <div>Tasks Done!</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">124</div>
                                        <div>Tasks in Process!</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">13</div>
                                        <div>Tasks Not Start!</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <!-- /.row -->

                    <div class="col-lg-12">
                        <h2>Task Table</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Task Name</th>
                                        <th>Customer Name</th>
                                        <th>Assign to</th>
                                        <th>Deadline</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                            <?php
                            foreach ($task_array as $task) { ?>
                            <tr class = tr1>
                            <td class="td1"><a href="#"><img class=icons src="/assets/images/file.png"></a><?php echo $task["task_name"]; ?></td>
                            <td class="td2"><?php echo $task["customer_name"]; ?></td>
                            <td class="td3"><?php echo $task["assign_to"]; ?></td>
                            <td class="td4"><?php echo $task["deadline"]; ?></td>
                            <td class="td5"><?php 
                            if($task["status"]==1){ ?>
                                <img class=icons src="/assets/images/check.png" width="16" height="16">
                            <?php
                                echo "Done";
                            }
                            elseif($task["status"]==2)
                            { ?>
                                <img class=icons src="/assets/images/yellowball.png">
                            <?php
                                echo "In Process";
                            }
                            else
                            { ?>
                                <img class=icons src="/assets/images/redball.png">
                            <?php
                                echo "Not Start";
                            }
                            ?></td>

                        </tr>
                    <?php }  ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

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

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
