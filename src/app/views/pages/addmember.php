<!DOCTYPE html>
<html>
<head>
	<title>Add Member</title>
	<!-- Include color pallette -->
    <link rel="stylesheet" type="text/css" href="../../../public/css/colors.css">

     <!-- Include google icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="../../../public/css/forms.css">
</head>
<body>
<form class="pure-form pure-form-stacked">
	<input type="text" name="fname" placeholder="First Name">
	<input type="text" name="lname" placeholder="Last Name">
	<input type="text" name="uname" placeholder="User Name">
	<input type="password" name="pword" placeholder="Password">
	<input type="password" name="cpword" placeholder="Confirm Password">
	<input type="text" name="nic" placeholder="N.I.C Number">
	<input type="radio" name="gender" value="male" checked> Male
  	<input type="radio" name="gender" value="female"> Female
  	<input type="text" name="add1" placeholder="Address Line 1">
  	<input type="text" name="add2" placeholder="Address Line 2">
  	<input type="text" name="add3" placeholder="Address Line 3">
  	<input type="email" name="email" placeholder="E-Mail">
  	<input type="text" name="telnum" placeholder="T.P Number">
  	<input type="text" name="regnum" placeholder="Registration Number">
  	<input type="radio" name="membertype" value="student" checked> Student
  	<input type="radio" name="membertype" value="staff"> Staff Member

</form>

</body>
</html>