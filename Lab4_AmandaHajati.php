<?php
 
session_start();
// set timeout period in seconds
$inactive = 1800;
// check to see if $_SESSION['timeout'] is set
if(isset($_SESSION['timeout']) ) {
	$session_life = time() - $_SESSION['start'];
	if($session_life > $inactive)
        { session_destroy(); header("Location: Lab4_Login.php"); }
}
$_SESSION['timeout'] = time(); ?>

<html>
<head><title>Project Task Manager</title>
</head>
<body>
<style>
body {
background-image: url("https://www.gateworld.net/wiki/images/5/5c/Pegasusgalaxy.jpg");
}
</style>
<?php
// Retrieve Data using POST method
$id = $_POST['id'];
$access = $_POST['access'];
?>

<p style = "text-align:center;font-size:50px;color:#ffffff;">
Hello <?php echo $id ?>, here is the project progress:</p>

<h1 style = "text-align:center;font-size:50px;color:#ffffff;"> Stargate Alien Technology Projects </h1>

<form method="post" action="Lab4_Summary.php" >
	<table align="center" style="margin: 0px auto;"align= "center;"border="3px solid Black" 
		height = "650px" width=  "50%" bgcolor="#C0C0C0">

<tr style="font-weight:bold; font-size:30px;" align="center">
	<td><input type="hidden" name="col1" value="Project">Project</td>
	<td><input type="hidden" name="col2" value="% Completion">% Completion</td>
	<td><input type="hidden" name="col3" value="Customer Comments">Customer Comments</td>
	</tr>

<tr style="font-size:30px;" width = "200px;" >
	<td align="center"><input type="hidden" name="1" value="Ancient Gene Therapy"> Ancient Gene Therapy</td>
	<td><input type="hidden" name="1-1" value="75%">
  <div style="width: 75%; height:50%; background: rgb(255, 0, 0); overflow:visible;">
            <div style="width:350px;">
			  75%
            </div>
         </div>
    </td>
	<td><textarea name="AncientGeneTherapyComments"  cols="150" rows="5"></textarea></td>
	</tr>
	
<tr style="font-size:30px;">
	<td align="center"><input type="hidden" name="2" value="HyperDrive">HyperDrive</td>
	<td><input type="hidden" name="2-1" value="35%"><div style="width: 30%; height:50%;  background: rgb(0, 102, 204); overflow:visible;">
            <div style="width:350px;">
			  30%
            </div>
         </div></td>
	<td><textarea name="HyperDriveComments"  cols="150" rows="5"></textarea></td>
	</tr>
	
<tr style="font-size:30px;">
	<td align="center"><input type="hidden" name="3" value="Intergalactic Gate Bridge">Intergalactic Gate Bridge</td>
	<td><input type="hidden" name="3-1" value="55%"><div style="width: 55%; height:50%; background: rgb(102, 255, 51); overflow:visible;">
            <div style="width:350px;">
			  55%
            </div>
         </div>
		 </td>
	<td><textarea name="IntergalacticGateBridgeComments" cols="150" rows="5"></textarea></td>
	</tr>
	
<tr style="font-size:30px;">
	<td align="center"><input type="hidden" name="4" value="Memory Recall Device">Memory Recall Device</td>
	<td><input type="hidden" name="4-1" value="85%"><div style="width: 85%; height:50%; background: rgb(255, 153, 204); overflow:visible;">
            <div style="width:350px;">
			  85%
            </div>
         </div>
		 </td>
	<td><textarea name="MemoryRecallDeviceComments"  cols="150" rows="5"></textarea></td>
	</tr>

<tr style="font-size:30px;">
	<td align="center"><input type="hidden" name="5" value="Zero Point Module">Zero Point Module</td>
	<td><input type="hidden" name="5-1" value="21%"><div style="width: 21%; height:50%; background: rgb(102, 0, 204); overflow:visible;">
            <div style="width:350px;">
			  21%
            </div>
         </div>
	</td>
	<td><textarea name="ZeroPointModuleComments"  cols="150" rows="5"></textarea></td>
	</tr>
	
<tr style="font-size:30px;">
	<td align="center"><input type="hidden" name="6" value="TimeDilation Fields">Time Dilation Fields</td>
	<td><input type="hidden" name="6-1" value="4%"><div style="width: 4%; height:50%; background: rgb(255, 204, 0); overflow:visible;">
            <div style="width:350px;">
			  4%
            </div>
         </div>
		 </td>
	<td><textarea name="TimeDilationFieldsComments"  cols="150" rows="5"></textarea></td>
	</tr>
	
<tr style="font-size:30px;">
	<td align="center"><input type="hidden" name="7" value="Stasis Pods">Stasis Pods</td>
	<td><input type="hidden" name="7-1" value="12%"><div style="width: 12%; height:50%; background: rgb(153, 0, 0); overflow:visible;">
            <div style="width:350px;">
			  12%
            </div>
         </div>
		 </td>
	<td><textarea name="StasisPodsComments"  cols="150" rows="5"></textarea></td>
	</tr>
	
<tr style="font-size:30px;">
	<td align="center"><input type="hidden" name="8" value="Naquadah Generator">Naquadah Generator</td>
	<td><input type="hidden" name="8-1" value="100%"><div style="width: 100%; height:50%; background: rgb(255, 238, 230); overflow:visible;">
            <div style="width:350px;">
			  100%
            </div>
         </div>
		 </td>
	<td><textarea name="NaquadahGeneratorComments"  cols="150" rows="5"></textarea></td>
	</tr>
	
<tr style="font-size:30px;">
	<td align="center"><input type="hidden" name="9" value="Dial Home Device">Dial Home Device</td>
	<td><input type="hidden" name="9-1" value="100%"><div style="width: 100%; height:50%; background: rgb(51, 153, 102); overflow:visible;">
            <div style="width:350px;">
			  100%
            </div>
         </div>
		 </td>
	<td><textarea name="DialHomeDeviceComments"  cols="150" rows="5"></textarea></td>
	</tr>
	
<tr style="font-size:30px;">
	<td align="center"><input type="hidden" name="10" value="Attero Device">Attero Device</td>
	<td><input type="hidden" name="10-1" value="69%"><div style="width: 69%; height:50%; background: rgb(153, 204, 255); overflow:visible;">
            <div style="width:350px;">
			  69%
            </div>
         </div>
		 </td>
	<td><textarea name="AtteroDeviceComments" cols="150" rows="5"></textarea></td>
	</tr>

<td colspan="3" align="center"><input name="btnsubmit" type="submit"
value="Logout" style="font-size:30px;"></td>



</table>
</form>
</body>
</html>

