
<!DOCTYPE html>
<html>


<?php
$dbcon=mysqli_connect("localhost","root","","agriculture");
if($_POST['submit'])
{	
      $username=$_POST['username'];
		$address=$_POST['address'];
		$working=$_POST['working'];
		

		
		
		

$sql= "SELECT username, age, address, working, mobile_number, money, byaj, date FROM g_table  where username='$username'and address='$address'and working='$working'";
$result = $dbcon->query($sql);

if (!$result) {
	die ('SQL Error: ' . mysqli_error($dbcon));
}}
?>
<head>
	
	<style type="text/css">
		
		body {
			font-size: 15px;
			color: #6b6f4f;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
			margin-bottom:10px;
			
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: black;
			color: #FFFFFF;
			border-color: #2e303c!important;
			text-transform: uppercase;
			
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color:#d2d4e4;
		}
		.data-table tbody tr:hover td {
			background-color: #9dbd9b;
			border-color: #9dbd9b;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
		h1{margin-top:80px;}
	</style>
</head>
<body>
	<h1>List Of Take Money</h1>

	<table class="data-table">
		
		<thead>
			<tr>
				<th>User Name</th>
				<th>Age</th>
				<th>Address</th>
				<th>Working</th>
				<th>Mobile Number</th>
				<th>Money</th>
				<th>Byaj</th>
				<th>Date</th>
				
			</tr>
		</thead>
		<tbody>
		<?php
		
		while ($row = mysqli_fetch_array($result))
		{
		
			echo '<tr>
					
					<td>'.$row['username'].'</td>
					<td>'.$row['age'].'</td>
					<td>'.$row['address'].'</td>
					<td>'.$row['working'].'</td>
					<td>'.$row['mobile_number'].'</td>
					<td>'.$row['money'].'</td>
					<td>'.$row['byaj'].'</td>
					<td>'.$row['date'].'</td>
					
				</tr>';
			
		}?>
		</tbody>
	</table>
	
	 <center> <a href="g_view.php"><button style="margin-bottom:80px;">back</button></a></center>
</body>
</html>