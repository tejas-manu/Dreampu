<!DOCTYPE html>
<html>
<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'hackathon');

if(isset($_POST['get']))
{
    $Application_ID = $_POST['Application_ID']; 
    
    $query = "Insert into Commerce 
Select Application_ID, Full_name, Father_Name, Commerce_course, Class_10_Percentage 
from application_entry
Where Field = "Commerce";
    
    $query_run= mysqli_query($connection,$query);
    
    if($query_run)
    {
        echo'<script type="text/javascrpit"> alert("data updated") </script>';
        header("Location: Commerce.display.php");
    }
    else
    {  
        echo'<script type="text/javascrpit"> alert("data not found") </script>';
    }
    
    
}

?>
    
</html>