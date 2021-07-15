<html>
<head>
<style>
.alert{
	background-color:#FFFFFF; height:500px;box-shadow:0px 0px 10px 0px;margin-left:150px;margin-right:150px;margin-top:25px;}
.m{width:400px;height:400px;margin-left:15px;margin-right:15px;margin-top:25px;}

body{margin:0px;}
h2{color:#7C7CBE;}
button{color:blue;}
.hero-text{
text-align:center;
top:10%;
left:60%;position:absolute;
border:5px solid gray;
    border-radius:10%;
    background-color:#D3C4E1;
    width:170px;
    padding:10px;
    padding-left:10px;
    padding-right:10px;
}
form{opacity:-1;}
form:hover{opacity:0.7;}
</style>
</head>
<body>
<div class="alert">

<img src="img.jpg"class="m"></img>
<form role="form" method="POST" action="t_up.php">
<div class="hero-text">
<center>
<h2>Update Money </h2>
</center>
<br>
<input type="text"name="username"placeholder="username"required>
<br><br>
<input type="text" name="age"placeholder="age"required>
<br><br>
<input type="text" name="address"placeholder="address"required>
<br><br>
<input type="text" name="working"placeholder="working"required>
<br><br>
<input type="text" name="mobile_number"placeholder="mobile_number"required>
<br><br>
<input type="text" name="money"placeholder="money"required>
<br><br>
<input type="text" name="byaj"placeholder="byaj"required>
<br><br>
<input type="date" name="date"placeholder="date"required>
<br><br>
<button type="sumbit" name="update" value="update">update</button>
</div>
</form>



</div>

</body>
</html>
