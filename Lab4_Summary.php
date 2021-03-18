<?php

if (isset($_POST["submit"])){

 // getting current Date Time OOP way
 $currentDateTime = new \DateTime();

 //set timeZone
 $currentDateTime->setTimezone(new \DateTimeZone('America/New_York'));
 $dateTime = $currentDateTime->format('l-j-M-Y H:i:s A');

}

?>
<html>
<head><title>Summary </title>
<p>Thank you for your input !</p>
<p>Session End: <?php echo $dateTime ?></p>
</head>
<body>
<form action = "Lab4_Login.php" method = "post">
<?php
	// Retrieve Data using Post method 	
	$col1 = $_POST["col1"];	
	$col2 = $_POST["col2"];         
	$col3 = $_POST["col3"];
	$one = $_POST["1"];
	$two = $_POST["2"];
	$three = $_POST["3"];
	$four = $_POST["4"];
	$five = $_POST["5"];
	$six = $_POST["6"];
	$seven = $_POST["7"];
	$eight = $_POST["8"];
	$nine = $_POST["9"];
	$ten = $_POST["10"];
	$oneone = $_POST["1-1"];
	$twotwo = $_POST["2-1"];
	$threethree = $_POST["3-1"];
	$fourfour = $_POST["4-1"];
	$fivefive = $_POST["5-1"];
	$sixsix = $_POST["6-1"];
	$sevenseven = $_POST["7-1"];
	$eighteight = $_POST["8-1"];
	$ninenine = $_POST["9-1"];
	$tenten= $_POST["10-1"];
	$onecomments = $_POST["AncientGeneTherapyComments"];
	$twocomments = $_POST["HyperDriveComments"];
	$threecomments = $_POST["IntergalacticGateBridgeComments"];
	$fourcomments = $_POST["MemoryRecallDeviceComments"];
	$fivecomments = $_POST["ZeroPointModuleComments"];
	$sixcomments = $_POST["TimeDilationFieldsComments"];
	$sevencomments = $_POST["StasisPodsComments"];
	$eightcomments = $_POST["NaquadahGeneratorComments"];
	$ninecomments = $_POST["DialHomeDeviceComments"];
	$tencomments = $_POST["AtteroDeviceComments"];
	
        // Display in a table      
       echo "<h3> Summary </h3>";
       echo "<table border='1'>";
       echo "<tr>
             <th>$col1</th>
             <th>$col2</th>
             <th>$col3</th>
             </tr>";
       echo "<tr>
             <td>$one</td>
             <td>$oneone</td>
			 <td>$onecomments</td>
             </tr>";
	   echo "<tr>
             <td>$two</td>
             <td>$twotwo</td>
			 <td>$twocomments</td>
             </tr>";
	   echo "<tr>
             <td>$three</td>
             <td>$threethree</td>
			 <td>$threecomments</td>
             </tr>";
	   echo "<tr>
             <td>$four</td>
             <td>$fourfour</td>
			 <td>$fourcomments</td>
             </tr>";
	   echo "<tr>
             <td>$five</td>
             <td>$fivefive</td>
			 <td>$fivecomments</td>
             </tr>";
	   echo "<tr>
             <td>$six</td>
             <td>$sixsix</td>
			 <td>$sixcomments</td>
             </tr>";
	   echo "<tr>
             <td>$seven</td>
             <td>$sevenseven</td>
			 <td>$sevencomments</td>
             </tr>";
	   echo "<tr>
             <td>$eight</td>
             <td>$eighteight</td>
			 <td>$eightcomments</td>
             </tr>";
	   echo "<tr>
             <td>$nine</td>
             <td>$ninenine</td>
			 <td>$ninecomments</td>
             </tr>";
	   echo "<tr>
             <td>$ten</td>
             <td>$tenten</td>
			 <td>$tencomments</td>
             </tr>";
       echo "</table>";     	 
?> 
<input name="btnsubmit" type="submit"
value="Logout" style="font-size:30px;"></td>
</form>
</body>
</html>
</body>