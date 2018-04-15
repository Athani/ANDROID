<!DOCTYPE HTML>
<html>
<head>
    <title>WELCOME</title>
    <style type="text/css">

    h1{
        font-size: 50px;
        background-color:coral;
        padding=30px;
		color : white;
    }

    body{
	background-color:black;}


    .mybutton1 {
	
        position:absolute; 
		top : 150px;
   	margin-left:40%;   
   	width:300px;
   	bottom:395px;
    background-color: coral;
	border: white solid 2.5px;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}

.mybutton2 {
        position:absolute; 
		top: 250px;
   	margin-left:40%;   
   	width:300px;
	bottom:295px;
    background-color: coral;
	border: white solid 2.5px;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}

.mybutton3 {
        position:absolute; 
		top: 350px;
   	margin-left:40%;   
   	width:300px;
	bottom:190px;
    background-color: coral;
    color: white;
	border: white solid 2.5px;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}

.mybutton4 {
        position:absolute; 
   	margin-left:40%;   
   	width:300px;
	top : 460px;
	bottom:75px;
	5px;    background-color: coral;
    border: white solid 2.5px;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}

        
    </style>
</head>
<body>
<h1 align="center"><marquee>Blood Bank System</marquee></h1>
    <form>
       <form> <input class="mybutton1" type="button" value="Add Registration for blood" onclick="window.location.href='http://localhost/ddproject/main.php'" /> </form><br />
       <form><input class="mybutton2" type="button" value="Show Vertical Fragmentation" onclick="window.location.href='http://localhost/ddproject/vertfrag.php'" ></form><br />
        <form><input class="mybutton3" type="button" value="Show Horizontal fragmentation" onclick="window.location.href='http://localhost/ddproject/horizfrag.php'"></form><br />
        <form><input class="mybutton4" type="button" value="Show XML tree" onclick="window.location.href='http://localhost/ddproject/myxml.php'"/></form>
    </form>


</body>
</html>
