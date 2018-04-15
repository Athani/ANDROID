<!DOCTYPE HTML>
<html>
<head>
    <title>HORIZONTAL FRAGMENTATION TABLES</title>
    <style type="text/css">
    table{
        border-collapse:collapse;
        width:100%;
        color:#588c7e;
        font-family: monospace;
        font-size:25px;
        text-align:left;
    }
    th{
        background-color: #588c7e;
        color:white;
    }
    tr:nth-child(even){background-color:#f2f2f2}
    </style>
</head>
<body>
    <h1>ORIGINAL TABLE:mainproject</h1>
    <table>
        <tr>
            <th>id</th>
            <th>firstname</th>
            <th>lastname</th>
            <th>contact</th>
            <th>email</th>
            <th>blood_group</th>
            <th>hb</th>
            <th>wbc</th>
			<th>location</th>
        </tr>

<?php
    $conn=mysqli_connect("localhost","root","","ddproject");
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }

    $sql="SELECT id,firstname,lastname,contact,email,blood_group,hb,wbc,location from mainproject";
    $result=$conn->query($sql);

    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["contact"]."</td><td>".$row["email"]."</td><td>"
            .$row["blood_group"]."</td><td>".$row["hb"]."</td><td>".$row["wbc"]."</td><td>".$row["location"]."</td></tr>";
        }

        echo "</table>";

    }
    else{
        echo "no rows";
    }


    $conn->close();

?>
<br/><br/>
 <h1>horizontally fragmented table 1: Donor_fragment</h1>
</table>

<br/><br/>

<table>
        <tr>
            <th>id</th>
            <th>firstname</th>
            <th>lastname</th>
            <th>contact</th>
            <th>email</th>
            <th>blood_group</th>
            <th>hb</th>
            <th>wbc</th>
			<th>location</th>
        </tr>

<?php
    $conn=mysqli_connect("localhost","root","","ddproject");
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }

	$sql1="SELECT id,firstname,lastname,contact,email,blood_group,hb,wbc,location from mainproject";	
    $result1=$conn->query($sql1);

    if($result1->num_rows>0){
        while($row=$result1->fetch_assoc()){
echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["contact"]."</td><td>".$row["email"]."</td><td>"
            .$row["blood_group"]."</td><td>".$row["hb"]."</td><td>".$row["wbc"]."</td><td>".$row["location"]."</td></tr>";
        }

        echo "</table>";

    }
    else{
        echo "no rows";
    }


    $conn->close();

?>
<br/><br/>
 <h1>horizontally fragmented table 2: Donor_frag2</h1>
</table>

<br/><br/>

<table>
        <tr>
            <th>id</th>
            <th>firstname</th>
            <th>lastname</th>
            <th>contact</th>
            <th>email</th>
            <th>blood_group</th>
            <th>hb</th>
            <th>wbc</th>
			<th>location</th>
        </tr>

<?php
    $conn=mysqli_connect("localhost","root","","ddproject");
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }

    $sql2="SELECT id,firstname,lastname,contact,email,blood_group,hb,wbc,location from mainproject";
    $result2=$conn->query($sql2);

    if($result2->num_rows>0){
        while($row=$result2->fetch_assoc()){
           echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["contact"]."</td><td>".$row["email"]."</td><td>"
            .$row["blood_group"]."</td><td>".$row["hb"]."</td><td>".$row["wbc"]."</td><td>".$row["location"]."</td></tr>";
        }

        echo "</table>";

    }
    else{
        echo "no rows";
    }


    $conn->close();

?>
<br/><br/>
 <h1>horizontally fragmented table 3: To see the blood_group= "O-" and location="Virar"</h1>
</table>

<br/><br/>

<table>
        <tr>
            <th>id</th>
            <th>firstname</th>
            <th>contact</th>
            <th>email</th>
            <th>blood_group</th>
			<th>location</th>
        </tr>

<?php
    $conn=mysqli_connect("localhost","root","","ddproject");
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }

    $sql3="SELECT id,firstname,contact,email,blood_group,location from mainproject where blood_group='O-' and location='Virar'";

    $result3=$conn->query($sql3);

    if($result3->num_rows>0){
        while($row=$result3->fetch_assoc()){
          echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]."</td><td>".$row["contact"]."</td><td>".$row["email"]."</td><td>"
            .$row["blood_group"]."</td><td>".$row["location"]."</td></tr>";
        }

        echo "</table>";

    }
    else{
        echo "no rows";
    }


    $conn->close();

?>

</table>





</body>
</html>