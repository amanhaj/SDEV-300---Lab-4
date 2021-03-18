

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <title>Stargate Project Login</title>
</head>
<body OnLoad="document.main.username.focus();">
<br><br><br><br><br><br><br></br>
<table align="center" style="margin: 0px auto;"align= "center;"border="3px solid Black" 
height = "40%" width=  "900px" bgcolor="#C0C0C0">
<tr>
<td colspan="2" height = "100px;">
<h4 style = "text-align: center; font-size: 40;">User Authorization</h4>
</td>
</tr>
<!-- create the main form with an input text boxes -->
<form action="Lab4_Authentication.php" method="post">
<tr>
<td style= "font-size: 30;"><center>Name:</center></td>
<td><center><input name="id" type="text" size="20" style = "font-size: 30px;"></center></td>
</tr>
<tr>
<td style= "font-size: 30;"><center>Email:</center></td>
<td><center><input name="email" type="text" size="20" style = "font-size: 30px;"></center></td>
</tr>
<tr>
<td style= "font-size: 30;"><center>Access Code:</center></td>
<td><center><input name="access" type="password" size="20" style= "font-size: 30px;"></center></td>
</tr>
<tr><br></br>
<td colspan="2" align="center"><input name="btnsubmit" type="submit"
value="Login" style="font-size:30px;"></td>
</tr>
</table>

</form>


</body>
</html>

