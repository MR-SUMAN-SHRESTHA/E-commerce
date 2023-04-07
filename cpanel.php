<?php include('connection.php');?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>F-pannel</title>
<style>
	*
	{
		margin: 0;
		padding:0 ;
	}
	.container
	{
		position: relative;
	}
	.one
	{
		border: 0px solid black;
		width:25%;
		height: 100vh;
		background: black;
		display: flex;
		justify-content: center;
		align-items: center;
	}
	.one ul 
	{
		list-style: none;
	}
	.one ul li
	{
		text-align: center;
		border: 0px solid black;
		height: 50px;
		margin: 20px;
		width: 200px;
		border-radius: 30px;
	}
	.one ul li a
	{
		text-decoration: none;
		font-size: 20px;
		color: white;
		border: 0px solid black;
		width: 200px;
		height: 50px;
		display: flex;
		justify-content: center;
		align-items: center;
		border-radius:30px ;
		transition: background 1s;
		transition: transform;

	}
	.one ul li a:hover
	{

		background:blue;
		transform: scale(1.3);
	}
	.two
	{
		border: 0px solid black;
		background: white;
		width: 75%;
		height: 100vh;
		float: left;
		position: absolute;
		left: 25%;
		top:1px;
		display: flex;
		align-items: center;
		justify-content: center;
	}
	table
	{
		width:900px;
		padding: 2px;
		font-weight: bold;
		background: #c8cdca;
	}
	td{
		padding-left: 20px;
	}
</style>
</head>
<body>
<div class="container">
	<div class="one">
		<ul>
			<li><a href="cpanel.php">Dash Board</a></li>
			<li><a href="additems.php">Add Items</a></li>
				<li><a href="orderlist.php">Item List</a></li>
		</ul>
	</div>
	<div class="two">
	<table border="two">
		<tr>
	<?php
	$sql = "SELECT * FROM orders";
	$results = $connection->query($sql);
	?>


<th>Customer name </th>
<th>Order item</th>
<th>Order price </th>
<th>Customer Contact No.</th>		   
<th>Transaction code</th>
	<th>Status</th>
</tr>
	<?php
	if ($results->num_rows > 0) {
	while($result = $results->fetch_assoc())
{
?>
	<tr>	

	<td><?php echo $result['order_cname'];?></td>
	<td><?php echo $result['order_item'];?></td>
	<td><?php echo $result['order_price'];?></td>
	<td><?php echo $result['order_ph_no'];?></td>
		<td><?php echo $result['t_code'];?></td>
		<td><?php echo $result['status'];?></td>

	</tr>
			<?php
			}}
			else
			{
				echo "O result";
			}
		?>

</table>
</div>
	</div>
</div>
</body>
</html>