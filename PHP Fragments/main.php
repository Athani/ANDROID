<!DOCTYPE HTML>
<html>
<head>
<title>Blood Bank System</title>

<style type="text/css">

#mar{
			font-size : 30px;
			font-style : Times New Roman;
			background-color : coral;
			height : 67px;
			color : white;
			text-align: center;
			padding-top:19px;
			
 }

#Sign-Up
			{
						font-size : 24px;
						font-style : Times New Roman;
						text-align: center;
						color : coral;
						padding-top:29px;
			}
			
#button {
    background-color: coral; /* Green */
    border: none;
    color: white;
    padding: 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    margin: 4px 2px;
    cursor: pointer;
}
						
  </style>


</head>
<link rel="stylesheet" type="text/css">
<body style="background-color:white;">
<div id="mar">
Register to Donate the Blood!!!!
</div>	
<div id="Sign-Up">
<form method="POST" action="conn.php">
Firstname :&nbsp;&nbsp; <input type="text" name="firstname"></br></br>	
Lastname :  &nbsp;&nbsp;<input type="text" name="lastname"></br></br>
Contact :   &nbsp;&nbsp;<input type="text" name="contact"></br></br>
Email :    &nbsp;&nbsp; <input type="email" name="email">	</br></br>
 Blood Group : </td><td><br> <select name="blood_group">
		 				<option value="A">A</option>
		  				<option value="A+">A+</option>
		  				<option value="A-">A-</option>
		  				<option value="B">B</option>
		  				<option value="B+">B+</option>
		  				<option value="B-">B-</option>
		  				<option value="AB+">AB+</option>
		  				<option value="AB-">AB-</option>
		  				<option value="O+">O+</option>
		  				<option value="O-">O-</option>
</select></br></br>
HB Rate : </td><td> &nbsp;&nbsp;    <input type="text" name="hb"></br></br>
WBC Rate : </td><td>	&nbsp;&nbsp;<input type="text" name="wbc"></br></br>
Location : </td><td>	&nbsp;&nbsp;<input type="text" name="location"></br></br>
<input id="button" type="submit" name="submit">
</form>
</table>
</div>
</body>
</html>


