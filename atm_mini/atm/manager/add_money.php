<?php 
include('conn.php');
session_start();
if(!$_SESSION['id']){
	header('location: index.php');
}
else{
	include('conn.php');
    $u_id=$_SESSION['id'];
	$t_name = $_SESSION['name'];
?>
<!DOCTYPE html>
<html>		    
	<head>
        <!--
            ==============================================
                Mobile + Desktop + Browser Responsive Tags
            ==============================================
        -->
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bank Atm System</title>
        <meta http-equiv="refresh" content=""/>
        <!--
            ============================
                Bootstrap + Custom + Css
            ============================
        -->
		<link rel="stylesheet" href="../css/bootstrap.min.css"/>
		<link rel="stylesheet" href="../css/custom.css"/>
		<!--
            ============================
                Bootstrap + Custom + Jquery
            ============================
        -->
		<script src="../js/jquery_library.js"></script>
		<script src="../js/bootstrap.min.js"></script>
	</head>
	<body>
		<!--
            ====================
                Navbar Starts
            ====================
        -->
      <nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>                        
					</button>
					<a class="navbar-brand" href="home.php"><i class="glyphicon glyphicon-list-alt"></i> ATM OS </a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li><a href="add_cus.php"><span class='glyphicon glyphicon-copy'></span> Add Customer</a></li>
                        <li><a href="request.php"><span class='glyphicon glyphicon-edit'></span> Register Customer</a></li>
						<li><a href="add_money.php"><span class='glyphicon glyphicon-usd'></span> Add ATM Money</a></li>
                    </ul>
                    <form action="search.php" class="navbar-form navbar-right" role="search" method="get">
                        <div class="form-group input-group">
                            <input type="text" id="search" name="search" class="form-control" placeholder="Search Customer Name..." required=""/>
                            <span class="input-group-btn">
                                <button class="btn btn-default s-btn" type="submit">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </span>        
                        </div>
                    </form>   
                  <ul class="nav navbar-nav navbar-right">
						<li><a href="../logout.php"><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>
					</ul>
				</div>
			</div>
		</nav>
			<!--
            ====================
                User info bar Starts
            ====================
        -->
		<div class="container-fluid" style="background:#eee; margin-top: 50px; border-radius: 0px;">
			<div class="container">
				<h4> Welcome <b> Manager <i class="glyphicon glyphicon-user"></i> <?php echo $t_name?></b><span class="pull-right" style="line-height:auto; margin-top: px;"><a></a><i class="glyphicon glyphicon-time	"></i> Date: <?php echo $date = date('d/M/y h:i a'); ?></span></h4> 
			</div>
		</div>
		<!--
            =======================
                Main Section Starts
            =======================
        -->
		<div class="container-fluid" style="background: #f3f3f3;">
            <div class="row">
                <br>
                <div class="col-sm-4 col-sm-offset-4">
                    <form method="post" action="">
                        <div class="panel" style="border-radius:0px; box-shadow:2px 2px 4px 0px;">
                            <div class="panel-heading" style="font-size:23px; margin-bottom:-20px; text-align:center;">
                                <i class="glyphicon glyphicon-edit"></i> Add Money to ATM 
                            </div>
                            <hr/>
                            <div class="panel-body" style="margin:-20px 0px; ">
								<input type="text" name="branch" class="form-control" placeholder="Enter Branch Name..." required="" title=""/><br />		
								<input type="text" name="two" class="form-control" placeholder="Enter number of 2000 to be added..." required="" title=""/><br />	
								<input type="text" name="five" class="form-control" placeholder="Enter number of 500 to be added..." required="" title=""/><br />
                                <input type="text" name="one" class="form-control" placeholder="Enter number of 100 to be added..." required="" title=""/><br />								
							</div>
							<div class="panel-footer" align="center">
								<button type="submit" name="e" class="btn btn-success btn-custom"><span class="glyphicon glyphicon-check"></span> Add Money</button>
							</div>
						</div>	
						<?php
                            include('conn.php');
                            if(isset($_POST['e'])){//1st starts
                                $branch = $_POST['branch'];
                                $two = $_POST['two'];
                                $five = $_POST['five'];
                                $one = $_POST['one'];
                                mysqli_query($con,"insert into atmdetails (branch,two,five,one) values('$branch','$two','$five','$one')");
                                echo "<script>window.open('add_money.php','_self')</script>";
                            }// isset bracket ends here
                        ?>	
					</form>	
				</div>	
			</div>
        </div>
        <!--
            ======================
                    Footer  Starts 
            ======================
        -->
        <div class="container-fluid" style="background:#555; color:#fff; padding:10px 0px">
            <h4 align="center">System Developed for Mini Project</h4>
        </div>
    </body>
</html>	
<?php } ?>
				
				
		