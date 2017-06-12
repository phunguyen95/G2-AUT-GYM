
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Bootstrap Admin Theme</title>

  <!-- Bootstrap Core CSS -->
  <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- MetisMenu CSS -->
  <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

  <!-- Timeline CSS -->
  <link href="dist/css/timeline.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="dist/css/sb-admin-2.css" rel="stylesheet">

  <!-- Morris Charts CSS -->
  <link href="bower_components/morrisjs/morris.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

  <!-- Custom Fonts -->
  <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
 <style type="text/css">

    .add{
        height: 50px;
        color: white;
    }

</style>
</head>
<script>
$(document).ready(function() {

        $(".delete_class").click(function(){
            var tr = $(this).closest('tr'),
                del_id = $(this).attr('id');

            $.ajax({
            type:'POST',
                url: "delete_page.php?delete_id="+ del_id,
                success:function(result){
                    tr.fadeOut(1000, function(){
                        $(this).remove();
                    });
                }
            });
        });
      });
</script>
<body>
<?php
    session_start();
    require_once ('conf/setting.php');
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }    
?>
<div id="wrapper">

  <!-- Navigation -->
  <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="admin.jsp">SB Admin v2.0</a>
    </div>
    <!-- /.navbar-header -->
    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
          </a>
          <ul class="dropdown-menu dropdown-messages">
            <li>
              <a href="#"><div><strong>John Smith</strong><span class="pull-right text-muted"><em>Yesterday</em></span></div>
                          <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
              </a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="#"><div><strong>John Smith</strong><span class="pull-right text-muted"><em>Yesterday</em></span></div>
                          <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
              </a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="#"><div><strong>John Smith</strong><span class="pull-right text-muted"><em>Yesterday</em></span></div>
                          <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
              </a>
            </li>
            <li class="divider"></li>
            <li><a class="text-center" href="#"> <strong>Read All Messages</strong> <i class="fa fa-angle-right"></i></a></li> 
          </ul>
          <!-- /.dropdown-messages -->
        </li>
      <!-- /.dropdown -->
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i></a>
          <ul class="dropdown-menu dropdown-tasks">
            <li> <a href="#"><div><p><strong>Register function</strong><span class="pull-right text-muted">100% complete</span></p>
                  <div class="progress progress-striped active">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                      <span class="sr-only">100% Complete (success)</span>
                    </div>
                  </div>
                </div>
              </a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="#">
                <div>
                  <p>
                    <strong>Shopping Cart</strong>
                    <span class="pull-right text-muted">100% Complete</span>
                  </p>
                  <div class="progress progress-striped active">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                      <span class="sr-only">20% Complete</span>
                    </div>
                  </div>
                </div>
              </a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="#">
                <div>
                  <p>
                    <strong>Admin Function </strong>
                    <span class="pull-right text-muted">80% Complete</span>
                  </p>
                  <div class="progress progress-striped active">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">60% Complete (warning)</span>
                    </div>
                  </div>
                </div>
              </a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="#">
                <div>
                  <p>
                    <strong>Task 4</strong>
                    <span class="pull-right text-muted">80% Complete</span>
                  </p>
                  <div class="progress progress-striped active">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete (danger)</span>
                    </div>
                  </div>
                </div>
              </a>
            </li>
            <li class="divider"></li>
            <li>
              <a class="text-center" href="#">
                <strong>See All Tasks</strong>
                <i class="fa fa-angle-right"></i>
              </a>
            </li>
          </ul>
          <!-- /.dropdown-tasks -->
        </li>
      <!-- /.dropdown -->
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
          <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-alerts">
          <li>
            <a href="#">
              <div>
                <i class="fa fa-comment fa-fw"></i> New Comment
                <span class="pull-right text-muted small">4 minutes ago</span>
              </div>
            </a>
          </li>

          <li class="divider"></li>
          <li>
            <a href="#">
              <div>
                <i class="fa fa-twitter fa-fw"></i> New User:
                <span class="pull-right text-muted small"></span>
              </div>
            </a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="#">
              <div>
                <i class="fa fa-envelope fa-fw"></i> Message Sent
                <span class="pull-right text-muted small"></span>
              </div>
            </a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="#">
              <div>
                <i class="fa fa-tasks fa-fw"></i> New Task
                <span class="pull-right text-muted small">4 minutes ago</span>
              </div>
            </a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="#">
              <div>
                <i class="fa fa-upload fa-fw"></i> Server Rebooted
                <span class="pull-right text-muted small">4 minutes ago</span>
              </div>
            </a>
          </li>
          <li class="divider"></li>
          <li>
            <a class="text-center" href="#">
              <strong>See All Alerts</strong>
              <i class="fa fa-angle-right"></i>
            </a>
          </li>
        </ul>
        <!-- /.dropdown-alerts -->
      </li>
      <!-- /.dropdown -->
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
          <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-user">
          <li><a href="profile.jsp"><i class="fa fa-user fa-fw"></i> User Profile</a>
          </li>
          <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
          </li>
          <li class="divider"></li>
          <li><a href="logout.jsp"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
          </li>
        </ul>
        <!-- /.dropdown-user -->
      </li>
      <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

       <div class="navbar-default sidebar" role="navigation">
      <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
          <li class="sidebar-search">
            <div class="input-group custom-search-form">
              <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                  <i class="fa fa-search"></i>
                                </button>
                            </span>
            </div>
            <!-- /input-group -->
          </li>
          <li><a href="admin.php"><i class="fa fa-dashboard fa-fw"></i> Admin Panel</a></li>
          <li><a href="addproduct.php"><i class="fa fa-flag fa-fw"></i> Add Product</a></li>
          <li><a href="addblog.php"><i class="fa fa-flag fa-fw"></i> Add Blog</a></li>
          <li><a href="addmembership.php"><i class="fa fa-flag fa-fw"></i> Add Membership</a></li>
          <li><a href="addtrainer.php"><i class="fa fa-flag fa-fw"></i> Add Trainer</a></li>
          <li>
            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Checkout<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
              <li>
                <a href="listProduct.php">List Receipt</a>
              </li>
              <li>
                <a href="listorder.jsp">List Order</a>
              </li>
            </ul>
            <!-- /.nav-second-level -->
          </li>
            </ul>
            <!-- /.nav-second-level -->
          </li>
        </ul>
      </div>
      <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
  </nav>

  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Dashboard</h1>
      </div>
      <!-- /.col-lg-12 -->
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

                <div class="huge"></div>
                <div>Product!</div>
              </div>
            </div>
          </div>
          <a href="#">
            <div class="panel-footer">
              <span class="pull-left">View Details</span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3">
                <i class="fa fa-shopping-cart fa-5x"></i>
              </div>
              <div class="col-xs-9 text-right">
                <div class="huge"></div>
                <div>List Orders!</div>
              </div>
            </div>
          </div>
          <a href="#">
            <div class="panel-footer">
              <span class="pull-left"><a href="listorder.jsp"> View Details</a></span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3">
                <i class="fa fa-shopping-cart fa-5x"></i>
              </div>
              <div class="col-xs-9 text-right">
                <div class="huge"></div>
                <div>List Receipt <Receipt></Receipt>!</div>
              </div>
            </div>
          </div>
          <a href="#">
            <div class="panel-footer">
              <span class="pull-left"><a href="AdminCart.jsp">View Details</a> </span>
              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </div>
          </a>
        </div>
      </div>

    </div>
    <!-- /.row -->

    <!-- /.panel -->
    <div class="panel panel-default">
      <div class="panel-heading">
        <i class="fa fa-clock-o fa-fw"></i> Responsive Timeline
      </div>
      <!-- /.panel-heading -->

      <div class="col-lg-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <i class="fa fa-bell fa-fw"></i> Notifications Panel
          </div>
          <!-- /.panel-heading -->
          <div class="panel-body">
            <div class="list-group">


              <a href="#" class="list-group-item">
                <i class="fa fa-twitter fa-fw"></i> New User:
                  <?php
                 require_once ('conf/setting.php');
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  $sql="SELECT username FROM membership ORDER BY mem_id DESC LIMIT 1";
                  $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {     
                     echo $row['username'] ;
                    }
                  }
             ?>
                <span class="pull-right text-muted small"></span>
                </span>
              </a>
              <a href="#" class="list-group-item">
                <i class="fa fa-shopping-cart fa-fw"></i> New Order Placed
                  <?php
                 require_once ('conf/setting.php');
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  $sql="SELECT created FROM orders ORDER BY id DESC LIMIT 1";
                  $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {     
                     echo $row['created'] ;
                    }
                  }
             ?>
               <span class="pull-right text-muted small"><em></em>
                                    </span>
              </a>
              <a href="#" class="list-group-item">
                <i class="fa fa-money fa-fw"></i> Payment Received:
                <?php
                 require_once ('conf/setting.php');
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
                  // Check connection
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  $sql="SELECT total_price FROM orders ORDER BY id DESC LIMIT 1";
                  $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {     
                     echo "".$row['total_price'] ."NZD";
                    }
                  }
             ?>
                                    <span class="pull-right text-muted small"><em></em>
                                    </span>
              </a>

            </div>
            <!-- /.list-group -->
            <a href="#" class="btn btn-default btn-block">View All Alerts</a>
          </div>
          <!-- /.panel-body -->
        </div>
        <!-- /.panel-body -->
      </div>
      <!-- /.panel -->

      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <i class="fa fa-bell fa-fw"></i> List of member
          </div>

          <!-- /.panel-heading -->
          <div class="panel-body">
            <div class="list-group">
              <?php
               echo "<table class='table table-hover'>";
                      echo "<thead>";
                      echo "<tr>";
                      echo "<th>Member ID</th>";
                      echo "<th>Username</th>";
                      echo "<th>Password </th>";
                      echo "<th>First name</th>";
                      echo "<th>Last Name</th>";
                      echo "<th>Address</th>";
                      echo "<th>Contact </th>";
                      echo "</tr>";
                      echo "<thead>";
                       echo "<tbody>";
                     echo "</tbody>";

                $sql="select * from membership";
                $result = mysqli_query($conn, $sql);
                   if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {     
                     echo "<tr>";
                     echo "<td>" .$row['mem_id']. "</td>";
                       echo "<td>".$row['username']. "</td>";
                     echo "<td>".$row['password'] ."</td>";
                     echo "<td>".$row['fname']. "</td>";
                     echo "<td>".$row['lname']. "</td>";
                     echo "<td>".$row['address']. "</td>";
                     echo "<td>".$row['contact']. "</td>";  
                        echo "<td><button class='btn btn-sm btn-danger delete_class' id='".$row['mem_id']."' >DELETE</button></td>";

                     echo "</tr>";
                   }

                 }
                                      echo "</table>";

              ?>

            </div>
            <!-- /.list-group -->
          </div>
          <!-- /.panel-body -->
        </div>
        <!-- /.panel-body -->
      </div>
      <!-- /.panel -->
    </div>
    </div>

    <!-- /.col-lg-8 -->
    <!-- /.panel -->
    <!-- /.panel -->

  </div>

  <!-- /.col-lg-4 -->
</div>
<!-- /.row -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="bower_components/raphael/raphael-min.js"></script>
<script src="bower_components/morrisjs/morris.min.js"></script>
<script src="js/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
