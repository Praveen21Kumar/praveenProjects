	    <br/>
		<div class="row">					
			<div class="col-md-12">
                <div class="panel">
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li><a href="add_money.php"><span class='glyphicon glyphicon-usd'></span> Add Money</a></li>
                    </ul>
										<ul class="nav navbar-nav">
						<li><a href="add_atm.php"><span class='glyphicon glyphicon-credit-card'></span> Add New ATM</a></li>
                    </ul>
                    <div class="panel-body" style="padding-bottom:0px;border-radius:0px; box-shadow:2px 2px 4px 0px;">
                        <table class="table table-responsive table-bordered table-hover">
                            <tr>
                                <td align="center" colspan="8" style="background:#444; color:#fff; font-size:22px; border-color:#444;">Atm Details</td>
                            </tr>
                          <tr>
						<td align="center" ><b>ATM Branch</b></td>
						<td align="center" ><b>Bank Balance</b></td>
						<td align="center" ><b>Bal Limit</b></td>
					</tr>
					<?php
						$class2 = mysqli_query($con,"select * from atmdetails");
						while($u = mysqli_fetch_array($class2))
						{
					?>
					<tr>
						<td align="center"><?php echo $u[1]; ?></td>
						<td align="center"><?php echo $u[2]?></td>							
						<td align="center"><?php echo $u[3]?></td>							
						<td align="center"><?php echo $u[5]?></td>		
						<td align="center"><?php echo $u[6]?></td>		
					</tr>
					<?php } ?> </table>   
                    </div>
                </div>    
            </div>
    </div>
