
<?php 


$user = 'root'; 
$password = ''; 


$database = 'hackathon'; 

 
$servername='localhost'; 
$mysqli = new mysqli($servername, $user, 
				$password, $database); 

if ($mysqli->connect_error) { 
	die('Connect Error (' . 
	$mysqli->connect_errno . ') '. 
	$mysqli->connect_error); 
} 

// SQL query to select data from database 
$sql = "SELECT * FROM commerce WHERE Class_10_percentage >= 85 ORDER BY Class_10_percentage DESC"; 
$result = $mysqli->query($sql); 
$mysqli->close(); 
?> 
 
<!DOCTYPE html> 
<html lang="en"> 

<head> 
	<meta charset="UTF-8"> 
	<title>Commerce students selected</title> 
	<!-- CSS FOR STYLING THE PAGE --> 
	<style> 
		table { 
			margin: 0 auto; 
			font-size: large; 
			border: 1px solid black; 
		} 

		h1 { 
			text-align: center; 
			color: #006600; 
			font-size: xx-large; 
			font-family: 'Gill Sans', 'Gill Sans MT', 
			' Calibri', 'Trebuchet MS', 'sans-serif'; 
		} 

		td { 
			background-color: #E4F5D4; 
			border: 1px solid black; 
		} 

		th, 
		td { 
			font-weight: bold; 
			border: 1px solid black; 
			padding: 10px; 
			text-align: center; 
		} 

		td { 
			font-weight: lighter; 
		} 
	</style> 
</head> 

<body> 
	<section> 
		<h1>STUDENT ADMISSION DETAILS- Commerce</h1> 
		<!-- TABLE CONSTRUCTION--> 
		<table> 
			<tr> 
				<th>Application_ID</th>  
				<th>Full_Name</th> 
                <th>Father_Name</th>
                <th>Field</th>
                <th>Commerce_Course</th>
                <th>Class_10_percentage</th>
			</tr> 
			<!-- PHP CODE TO FETCH DATA FROM ROWS--> 
			<?php // LOOP TILL END OF DATA 
				while($rows=$result->fetch_assoc()) 
				{ 
			?> 
			<tr> 
				<!--FETCHING DATA FROM EACH 
					ROW OF EVERY COLUMN--> 
                <td><?php echo $rows['Application_ID'];?></td> 
				<td><?php echo $rows['Full_Name'];?></td> 
                <td><?php echo $rows['Father_Name'];?></td>
                <td><?php echo $rows['Field'];?></td>
                <td><?php echo $rows['Commerce_Course'];?></td>
                <td><?php echo $rows['Class_10_percentage'];?></td>
			</tr> 
			<?php 
				} 
			?> 
		</table> 
	</section> 
</body> 

</html> 

<html>
<head>
<style>
.button {
  border: none;
  color: white;
  padding: 20px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
    font-family: sans-serif;
  
}  
    
.button1 {
  background-color: white; 
  color: black; 
  border: 5px solid #4CAF50;
  border-radius: 25px;
  float: left;
  position:relative;
  right: -300px;
  bottom: -500px;
}

</style>
</head>
</html>