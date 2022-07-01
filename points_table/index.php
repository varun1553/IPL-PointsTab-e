<?php 
	include '../dbconfig.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Points_table</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
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
        <a class="nav-link" href="#">Schedule</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="../ipl_2020_info/">ipl_2020_info</a>
      </li>
        <li class="nav-item">
          <a class="nav-link" href="../ipl_1_to_12_info/">ipl_1_to_12_info</a>
        </li>
        
    </ul>
  </div>
</nav>

<br>


<div class="container">
	<table class="table table-bordered">
		<tr>
			<th>S.no</th>
			<th>tname</th>
			<th>Matches_played</th>
			<th>Matches_won</th>
			<th>Matches_lost</th>
			<th>Matches_draw</th>
			<th>NRR</th>
			<th>Points</th>
			
			
		</tr>

		<?php 
			$s=1;
			$query = "select * from points_table";
			$result1 = mysqli_query($conn,$query);
			while($row = mysqli_fetch_array($result1))
			{
		 ?>
		<tr>
			<td><?php echo $s++; ?></td>
			
			<td><?php echo $row['tname']; ?></td>
			<td><?php echo $row['matches_played']; ?></td>
			
			<td><?php echo $row['matches_won']; ?></td>
			<td><?php echo $row['matches_lost']; ?></td>

			<td><?php echo $row['matches_draw']; ?></td>
			<td><?php echo $row['nrr']; ?></td>

			<td><?php echo $row['points']; ?></td>
			
			
		</tr>
	<?php } ?>
	</table>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>