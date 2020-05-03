<?php
	include "covid.php";
	
?>
<!DOCTYPE html>
<html>
	<title>Covid-19 Tracker</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--------------------------------- Boostrap CSS ----------------------->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
	integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<!--------------------------------- Boostrap js ----------------------->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" 
	integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" 
	crossorigin="anonymous"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
	integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" 
	crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
	integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" 
	crossorigin="anonymous"></script>

	<!-----Google fonts --->
	<link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
 
 
	<!---font awsome --->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" 
	integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    
	<!--------------------- my style---------------->
	<link="stylesheet" href="style.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.js"></script>
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.css">
	
	<script>
		$(document).ready( function () {
			$('#myTable').DataTable();	
				} ); 
	</script>
	
<body>

<div class="container.fluid bg-light p-5 text-center my-3">
  <h1>Covid-19 Tracker</h1>
  <h4 class="text-muted">This an open source project to keep track of COVID 19 empidamic </h4>
  </div>
  
  
  <div class="container my-5">
	<div class="row text-center">
		<div class="col-4 text-warning">
			<h5>Confirmed<h5>
			<?php echo $total_confirmed;?>
		</div>
		<div class="col-4 text-success">
			<h5>Recovered<h5>
			<?php echo $total_recovered;?>
		</div>
		<div class="col-4 text-danger">
			<h5>Deaths<h5>
			<?php echo $total_deaths;?>
		</div>
	</div >
  </div>
  
  <div class="container bg-light p-3 my-3 text-center">
   <h5 class="text-info">"Prevention is the Cure."</h5>
   <p class="text">Stay Indoor, Stay Safe.</P>
  </div>
  <div class="table-responsive">
  <table class="table" id="myTable">
		<thead class="thead-dark">
			<tr>
				<th scope="col">Countries</th>
				<th scope="col">Confirmed</th>
				<th scope="col">Recovered</th>
				<th scope="col">Deceased</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach($data as $key => $value){
					$increase = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed']
				?>
					<tr> 
						<th> <?php echo $key;?></th>
							<td>
								<?php echo $value[$days_count]['confirmed'];?>
								<?php if($increase != 0){?>
										<small class="text-danger pl-3"><i class="fas fa-arrow-up"></i><?php echo $increase;?></small>
								<?php }?>
							</td>
							<td>
								<?php echo $value[$days_count]['recovered'];?>
							</td>
							<td>
								<?php echo $value[$days_count]['deaths'];?>
							</td>
						</tr>
				<?php }?>
		</tbody>
		<div>
	</table>
  </div>
  <div class="container.fluid">
	
  </div>

<footer class="footer mt-auto py-3">
  <div class="container text-center">
    <span class="text-muted">Copyrigth &copy;2020, <a href="https://github.com/ErickNyagilo">Erick</a></span>
  </div>
</footer>
</body>
</html>