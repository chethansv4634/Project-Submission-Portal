<!DOCTYPE html>
<html>
<head>
<tittle>
</tittle>
<style type="text/css">
.one{
background-color:silver;
text-align:center;
padding:30px;
height:100%;
}
.two{float:center;}
</style>
<script type="text/javascript">
function validate()
{
strValidate=strForm.str.value.search(/1BM16CS[0-9]{3}/i);
//strValid=strForm.strr.value.search(/[0-9]/{10});
if(strValidate== -1 )//|| strValid==-1);
{
alert("Enter the valid username and password");
}
alert("valid");
}
</script>
</head>
<body>
<div class="one">
<image class="two" src="bms.png"  width="200" height="200">
<h1>Student Login</h1>
<form action="file:///C:/Users/hp/Downloads/stu_home.php" name="strForm" onsubmit="validate();" >
<label><b>Username:</b>
<input type="text"
name="str"
/>
</label>
<br/><br/><br/><br/>
<label><b>Password:</b>
<input type="password"
name="strr"
/>
</label>
<br/><br/><br/><br/>
<label><input type="submit"
name="name"
value="Login"/></label>

</form>
<br/><br/>
<form action="http://localhost/signup.php">
<label><input type="submit"
name="name"
value="SIGNUP"/></label>
<br/><br/><br/><br/>


</div>
</body>
</html>