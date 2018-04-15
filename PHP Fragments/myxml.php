<?php

include 'conn.php';

//createElement and appendChild()
$con = mysqli_connect('localhost','root','','ddproject');

$result=mysqli_query($con,"select * from mainproject");

$xml=new DOMDocument("1.0");
$xml->formatOutput=true; //to structure data properly

$BloodBank=$xml->createElement("BloodBank");
$xml->appendChild($BloodBank);


//to loop through all the records in the mainproject table
while($row=mysqli_fetch_array($result)){
    $mainproject=$xml->createElement("bloodbank");
    $BloodBank->appendChild($mainproject);   //appending to the parent directory

    $id=$xml->createElement("id",$row['id']);
    $mainproject->appendChild($id);

    $firstname=$xml->createElement("firstname",$row['firstname']);
    $mainproject->appendChild($firstname);

    $lastname=$xml->createElement("lastname",$row['lastname']);
    $mainproject->appendChild($lastname);

    $contact=$xml->createElement("contact",$row['contact']);
    $mainproject->appendChild($contact);

    $email=$xml->createElement("email",$row['email']);
    $mainproject->appendChild($email);

    $blood_group=$xml->createElement("blood_group",$row['blood_group']);
    $mainproject->appendChild($blood_group);

    $hb=$xml->createElement("hb",$row['hb']);
    $mainproject->appendChild($hb);

    $wbc=$xml->createElement("wbc",$row['wbc']);
    $mainproject->appendChild($wbc);
	
	$location=$xml->createElement("location",$row['location']);
    $mainproject->appendChild($location);
	
}



echo "<xmp>".$xml->saveXML()."</xmp>" ;//to display data to browser

$xml->save("reports.xml"); //to save data to directory



?>