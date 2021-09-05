<?php
$server_name="localhost";
$username="root"; 
$password=""; 
$database_name="hackathon";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
die("Connection Failed:" . mysqli_connect_error());
}

if(isset($_POST['save'])) 
{

    $Identity_Proof = $_POST['Identity_Proof']; 
    
    $Identity_Number = $_POST['Identity_Number'];
    
    $Full_Name = $_POST['Full_Name'];

    $Age = $_POST['Age'];
    
    $Gender = $_POST['Gender'];
     
    $Father_Name = $_POST['Father_Name'];
    
    $Mother_Name = $_POST['Mother_Name'];
    
    $Father_Occupation = $_POST['Father_Occupation'];
    
    $Mother_Occupation = $_POST['Mother_Occupation'];
    
    $Income = $_POST['Income'];
    
    $Field = $_POST['Field'];
    
    $Science_Course = $_POST['Science_Course'];
    
    $Commerce_Course = $_POST['Commerce_Course'];
    
    $Class_10_percentage = $_POST['Class_10_percentage'];
    
    $Contact_Number = $_POST['Contact_Number'];
    
     $Alternate_Number = $_POST['Alternate_Number'];
    
     $House_Address = $_POST['House_Address'];
    
    $Nationality = $_POST['Nationality'];
    
     $Email_Address = $_POST['Email_Address'];

    
    $sql_query = "INSERT INTO application_entry (Identity_Proof,Identity_Number,Full_Name,Age,Gender,Father_Name,Mother_Name,Father_Occupation,Mother_Occupation,Income,Field,Science_Course,Commerce_Course,Class_10_percentage,Contact_Number,Alternate_Number,House_Address,Nationality,Email_Address)VALUES

('$Identity_Proof','$Identity_Number','$Full_Name','$Age','$Gender','$Father_Name','$Mother_Name','$Father_Occupation','$Mother_Occupation','$Income','$Field','$Science_Course','$Commerce_Course','$Class_10_percentage','$Contact_Number','$Alternate_Number','$House_Address','$Nationality','$Email_Address')";

    if (mysqli_query($conn, $sql_query))
    {
        
        echo "Application form subbmitted successfully!";
    }
    
    else
    {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
    
}
?>