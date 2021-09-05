
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
$sql = "SELECT * FROM Science WHERE Class_10_percentage > 85"; 
$result = $mysqli->query($sql); 
$mysqli->close(); 
?> 
 
<!DOCTYPE html> 
<html lang="en"> 

<head> 
	<meta charset="UTF-8"> 
	<title>Patient Details Display</title> 
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
		<h1>STUDENT ADMISSION DETAILS</h1> 
		<!-- TABLE CONSTRUCTION--> 
		<table> 
			<tr> 
				<th>Application_ID</th>  
				<th>Full_Name</th> 
                <th>Father_Name</th>
                <th>Field</th>
                <th>Science_Course</th>
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
				<td><?php echo $rows['First_Name'];?></td> 
                <td><?php echo $rows['Father_Name'];?></td>
                <td><?php echo $rows['Field'];?></td>
                <td><?php echo $rows['Science_Course'];?></td>
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

.button1:hover {
  background-color: #4CAF50;
  color: white;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

.button2 {
  background-color: white; 
  color: black; 
  border: 5px solid #008CBA;
  border-radius: 25px;
  float: right;
  position:relative;
  right: 300px;
  bottom: -500px;
}
  
.button2:hover {
  background-color: #008CBA;
  color: white;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.button3 {
  background-color: white; 
  color: black; 
  border: 5px solid #008CBA;
  border-radius: 25px;
  float: right;
  position:relative;
  right: 350px;
  bottom: -500px;
}
  
.button3:hover {
  background-color: #008CBA;
  color: white;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
    
}
</style>
</head>
</html>