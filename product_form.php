<html>

<head>
	<style>
		form{
			width: 28%;
			border: 2px solid black;
			padding: 10px;
			background-color: black;
			border-radius: 15px;
		}
		th,td{
			padding:15px;
			text-align:center;
			color: white;
		}
		.insert-button {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            text-align: center;
            display: inline-block;
            font-size: 14px;
            margin-bottom: 20px;
            cursor: pointer;
            border-radius: 4px;
        }
		.insert-button:hover {
            background-color:#333 ;
        }
	</style>
</head>
<body>
<center>
		<h1>Insert Data</h1>
		<form method="POST" action="insertdata.php">
			<table>
				<tr>
					<th><label>ID</label></th>
					<td><input type="text" placeholder="Enter Id" name="f_id"></td>
				</tr>

				<tr>
					<th><label>Name</label></th>
					<td><input type="text" placeholder="Enter Name" name="f_nam"></td>
				</tr>

				<tr>
					<th><label>Description</label></th>
					<td><input type="text"  placeholder="Enter Description" name="f_des" ></td>
				</tr>

				<tr>
					<th><label>Purchase_price</label></th>
					<td><input type="text" placeholder="Enter price" name="f_pri"></td>
				</tr>

				<tr>
					<th><label>Quantity</label></th>
					<td><input type="text" placeholder="Enter your quantity" name="f_qn"></td>
				</tr>
				
				<tr>
					
				 <th colspan="6"><a href="insert.php"><button button class="insert-button">Insert Record</button>	</a></th>
			
				</tr>
			</table>

			
		</form>
	</center>	
</body>
</html>