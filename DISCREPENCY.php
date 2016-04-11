<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>
<?php
	$host="localhost";
	$db="sibi";
	$user="root";
	$pass="";
	
	$conn=mysqli_connect($host,$user,$pass,$db);
	if (!$conn) 
	{
    die("Connection failed: " . mysqli_connect_error());
	}
	$result ="SELECT T1.PRODUCT_ID,T2.PRODUCT_ID,T1.MODIFIED_DATE,T2.MODIFIED_DATE,T1.SOLD_STATUS,T2.PUURCHASE_STATUS,T1.DATE_OF_DELIVERY,
			T2.DELIVERED_DATE FROM SOLD_BY_SELLER T1 LEFT OUTER JOIN BOUGHT_BY_CUSTOMER T2 ON T1.MODIFIED_DATE <> T2.MODIFIED_DATE 
			OR T1.SOLD_STATUS <> T2.PUURCHASE_STATUS OR T1.DATE_OF_DELIVERY <> T2.DELIVERED_DATE WHERE T1.PRODUCT_ID = T2.PRODUCT_ID;";
	$id = mysqli_query($conn, $result);
	
	
	echo "<table>
			<tr>
				<th>PRODUCT_ID</th>
				<th>PRODUCT_ID</th>
				<th>MODIFIED_DATE</th>
				<th>MODIFIED_DATE</th>
				<th>SOLD_STATUS</th>
				<th>PURCHASE_STATUS</th>
				<th>DATE_OF_DELIVERY</th>
				<th>DELIVERED_DATE</th>
			</tr>";
			
			while($row = mysqli_fetch_array($id)) 
			{
				echo "<tr>";
				echo "<td>" . $row['PRODUCT_ID'] . "</td>";
				echo "<td>" . $row['PRODUCT_ID'] . "</td>";
				echo "<td>" . $row['MODIFIED_DATE'] . "</td>";
				echo "<td>" . $row['MODIFIED_DATE'] . "</td>";
				echo "<td>" . $row['SOLD_STATUS'] . "</td>";
				echo "<td>" . $row['PUURCHASE_STATUS'] . "</td>";
				echo "<td>" . $row['DATE_OF_DELIVERY'] . "</td>";
				echo "<td>" . $row['DELIVERED_DATE'] . "</td>";
				echo "</tr>";
			}
		echo "</table>";
		
	mysqli_close($conn);
?>
</body>
</html>