<?php 
	include '../dbconfig.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>IPL_2020_INFO</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<style type="text/css">
		.modal-dialog{
			width: 800px;
		}
		a:link {
		  color: red;
		}

		/* visited link */
		a:visited {
		  color: green;
		}

		/* mouse over link */
		a:hover {
		  color: hotpink;
		}

		/* selected link */
		a:active {
		  color: blue;
		}
		.pointer
		{
			cursor: pointer;
		}
	</style>

</head>
<body>
	<!-- nav bar -->
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link"  href="../Home/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../points_table/">Points_Table</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../Schedule/">Schedule</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#">ipl_2020_info</a>
      </li>
        <li class="nav-item">
          <a class="nav-link" href="../ipl_1_to_12_info/">ipl_1_to_12_info</a>
        </li>
        
    </ul>
  </div>
</nav>

<br>
<div class="text-center">
	<img src="https://igimages.gumlet.io/tamil/home/ipl-action22012022m2.jpg?w=376&dpr=2.6" width="500" style="padding-bottom: 20px;">

<br>

<!-- Trigger the modal with a button -->

<a type="button" class="pointer btn btn-primary" data-toggle="modal" data-target="#modal4">Get data sorted by no of fours by team</a>
<br>

<!-- Modal -->
<div id="modal4" class="modal fade" role="dialog">
	  <div class="modal-dialog">
	  	<div class="modal-content">
	     	<div class="modal-body">
		       	<div class="container">
					<table class="table table-bordered">
						<tr>
							<th>S.No</th>
							<th>Team</th>
							<th>No of fours</th>
							<th>No of sixes</th>
							<th>No of  wickets</th>
							<th>Best Score</th>
							
						</tr>

						<?php 
							$s=1;
							$query = "select * from ipl_13 order by no_fours desc";
							$result1 = mysqli_query($conn,$query);
							while($row = mysqli_fetch_array($result1))
							{
						 ?>
						<tr>
							<td><?php echo $s++; ?></td>
							<td><?php echo $row['tname']; ?></td>
							<td><?php echo $row['no_fours']; ?></td>
							<td><?php echo $row['no_sixes']; ?></td>
							<td><?php echo $row['no_wickets']; ?></td>
							<td><?php echo $row['best_score']; ?></td>
						</tr>
					<?php } ?>
					</table>
				</div>
	      	</div>
	    </div>
	</div>
</div>
<br>
<!-- Trigger the modal with a button -->
<a type="button" class="pointer btn btn-primary" data-toggle="modal" data-target="#modal6">Get data sorted by no of sixes by team</a>
<br>
<!-- Modal -->
<div id="modal6" class="modal fade" role="dialog">
	  <div class="modal-dialog">
	  	<div class="modal-content">
	     	<div class="modal-body">
		       	<div class="container">
					<table class="table table-bordered">
						<tr>
							<th>S.No</th>
							<th>Team</th>
							<th>No of fours</th>
							<th>No of  sixes</th>
							<th>No of  wickets</th>
							<th>Best Score</th>
						</tr>

						<?php 
							$s=1;
							$query = "select * from ipl_13 order by no_sixes desc";
							$result1 = mysqli_query($conn,$query);
							while($row = mysqli_fetch_array($result1))
							{
						 ?>
						<tr>
							<td><?php echo $s++; ?></td>
							<td><?php echo $row['tname']; ?></td>
							<td><?php echo $row['no_fours']; ?></td>
							<td><?php echo $row['no_sixes']; ?></td>
							
							<td><?php echo $row['no_wickets']; ?></td>
							<td><?php echo $row['best_score']; ?></td>
							
						</tr>
					<?php } ?>
					</table>
				</div>
	      	</div>
	    </div>
	</div>
</div>


<br>
<!-- Trigger the modal with a button -->
<a type="button" class="pointer btn btn-primary" data-toggle="modal" data-target="#modalw">Get data sorted by no of wickets by team</a>
<br>
<!-- Modal -->
<div id="modalw" class="modal fade" role="dialog">
	  <div class="modal-dialog">
	  	<div class="modal-content">
	     	<div class="modal-body">
		       	<div class="container">
					<table class="table table-bordered">
						<tr>
							<th>S.No</th>
							<th>Team</th>
							<th>No of fours</th>
							<th>No of sixes</th>
							<th>No of wickets</th>
							<th>Best Score</th>
							
						</tr>

						<?php 
							$s=1;
							$query = "select * from ipl_13 order by no_wickets desc";
							$result1 = mysqli_query($conn,$query);
							while($row = mysqli_fetch_array($result1))
							{
						 ?>
						<tr>
							<td><?php echo $s++; ?></td>
							<td><?php echo $row['tname']; ?></td>
							<td><?php echo $row['no_fours']; ?></td>
							<td><?php echo $row['no_sixes']; ?></td>
							
							<td><?php echo $row['no_wickets']; ?></td>
							<td><?php echo $row['best_score']; ?></td>
							
						</tr>
					<?php } ?>
					</table>
				</div>
	      	</div>
	    </div>
	</div>
</div>


<br>
<!-- Trigger the modal with a button -->
<a type="button" class="pointer btn btn-primary" data-toggle="modal" data-target="#modalscore">Get data sorted by best score of team</a>
<br>
<!-- Modal -->
<div id="modalscore" class="modal fade" role="dialog">
	  <div class="modal-dialog">
	  	<div class="modal-content">
	     	<div class="modal-body">
		       	<div class="container">
					<table class="table table-bordered">
						<tr>
							<th>S.No</th>
							<th>Team</th>
							<th>No of fours</th>
							<th>No of sixes</th>
							<th>No of wickets</th>
							<th>Best Score</th>
							
						</tr>

						<?php 
							$s=1;
							$query = "select * from ipl_13 order by best_score desc";
							$result1 = mysqli_query($conn,$query);
							while($row = mysqli_fetch_array($result1))
							{
						 ?>
						<tr>
							<td><?php echo $s++; ?></td>
							<td><?php echo $row['tname']; ?></td>
							<td><?php echo $row['no_fours']; ?></td>
							<td><?php echo $row['no_sixes']; ?></td>
							
							<td><?php echo $row['no_wickets']; ?></td>
							<td><?php echo $row['best_score']; ?></td>
							
						</tr>
					<?php } ?>
					</table>
				</div>
	      	</div>
	    </div>
	</div>
</div>
</div>





</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>