<?php
       if (isset($_POST['submit'])){
        $dbcon=mysqli_connect("localhost","root","","agriculture");

        $username=($_POST['username']);
        $password=($_POST['password']);

        $sql="SELECT username, password FROM login_table WHERE username='$username'";
        $query=mysqli_query($dbcon, $sql);
        if($query){
          $row= mysqli_fetch_row($query);
		  { 
          $dbusername=$row[0];
          $dbpassword=$row[1];
		 
		  
		 
        } }
		
		
           if($username== $dbusername && $password== $dbpassword){
		
          header('Location:home.php');
        }else{  echo "<script>alert('User name or password is incorrect!');</script>";
           
          }    
} 
?>
<!doctype html>
<html>
<head>
<style>
.alert{
	background-color:#FFFFFF; height:500px;box-shadow:0px 0px 10px 0px;margin-left:150px;margin-right:150px;margin-top:25px;}
.m{width:680px;height:400px;margin-left:15px;margin-right:15px;margin-top:25px;}
th{padding:84px;padding-top:0px;padding-bottom:20px;font-size:20px;background-color:#8A903A;}
body{margin:0px;}

h2{color:#7C7CBE;}
button{color:blue;}
.hero-text{
text-align:center;
top:20%;
left:60%;position:absolute;
border:5px solid gray;
    border-radius:10%;
    background-color:#D3C4E1;
    width:170px;
    padding:10px;
    padding-left:10px;
    padding-right:10px;
	opacity:0.4;

}
form:hover{opacity:0.5;}

</style>
</head>
<body>
<div class="alert">

<center>
<img src="img.jpg"class="m">
<form role="form" method="post" action="index.php">
<div class="hero-text">
<center>
<h2>login form </h2>
<img src="logo.jpg"class="img-circle"style="border-radius:50px">
</center>
<br>
<input type="text"name="username"placeholder="username"required>
<br><br>
<input type="password" name="password"placeholder="password"required>
<br><br>
<button type="sumbit" name="submit" value="login">Login</button>
</div>
</form>
</img>
</center>

</div>

</body>
</html>
