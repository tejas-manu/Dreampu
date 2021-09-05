<html>  
<title> COLLEGE NAME </title>
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: pink;  
}  
.container {  
    padding: 50px;  
  background-color: lightblue;  
}  
  
input[type=text], input[type=password], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color: orange;  
  outline: none;  
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;     
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
}  
</style>  
</head>  
<body>  
<form>  
  <div class="container">  
  <center>  <h1> Student Registeration Form</h1> </center>  
  <hr>  
  <label> Firstname </label>   
<input type="text" name="firstname" placeholder= "Firstname" size="15" required />   
<label> Middlename: </label>   
<input type="text" name="middlename" placeholder="Middlename" size="15" required />   
<label> Lastname: </label>    
<input type="text" name="lastname" placeholder="Lastname" size="15"required />     
<div>  
<label>  

<label>Enter your age: </label>  
<input type="number" name="num" min="50" max="80"> 

<label>    
      Select of birth: <input type="datetime-local" name="meetingdate"> <br><br>  
    </label>   

    <label> Father Name</label>   
<input type="text" name="fathername" placeholder= "Enter Father name" size="15" required /> 
<label> Mother Name</label>   
<input type="text" name="mothername" placeholder= "Enter Mother name" size="15" required /> 
<label> Father Occupation</label>   
<input type="text" name="fatheroccup" placeholder= "Enter Father's Occupation" size="15" required /> 
<label> Mother Occupation</label>   
<input type="text" name="motheroccup" placeholder= "Enter Mother's Occupation" size="15" required /> 
<label> Income</label>   
<input type="text" name="income" placeholder= "Enter the annual income of the family" size="15" required /> 


Field:
</label>
<p>Kindly select the desiered field</p>  
  <input type="radio" name="field" value="Science"> Science <br>  
  <input type="radio" name="field" value="Commerce"> Commerce<br>   
  </div>  
<div>  
<label>  

 Science Course :  
</label>   
  
<select>  
<option value="Course">Course</option>  
<option value="PCMB">PCMB</option>  
<option value="PCMC">PCMC</option>  
<option value="PCME">PCME</option>   
</select>  
</div>  
<div>  
<label>  

Commerce Course :  
</label>   
  
<select>  
<option value="Course">Course</option>  
<option value="ABMS">ABMS</option>  
<option value="ABES">ABES</option>  
<option value="ABEM">ABME</option>    
</select>  
</div>  
<div>  
<label>  

<label> Class X Percentage : </label>   
<input type="text" name="class10" placeholder= "Enter Percentage obtained in class 10" size="15" required /> 


Gender :  
</label><br>  
<input type="radio" value="Male" name="gender" checked > Male   
<input type="radio" value="Female" name="gender"> Female   
<input type="radio" value="Other" name="gender"> Other  
  
</div>  
<label>   
Phone :  
</label>     
<input type="text" name="phone" placeholder="phone no." size="10"/ required> 
Nationality:  
<input type="text" name="Nationality" placeholder="Enter nationality" required>   
Current Address :  
<textarea cols="80" rows="5" placeholder="Current Address" value="address" required>  
</textarea>  
 <label for="email"><b>Email</b></label>  
 <input type="text" placeholder="Enter Email" name="email" required>  
Aadhar Card:
<label>  
    <input type="number" placeholder="Enter Aadhar No." name="Aadhar" size="12" required> </label>

<label>Select file to upload scanned copy of Aadhar card:</label>  
     <input type="file" name="newfile">   


    <button type="submit" class="registerbtn">Register</button>    
</form>  
</body>  
</html> 