
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
<form role="form" method="POST" action="h_up.php">
<div class="hero-text">
<center>
<h2>Update Income </h2>
</center>
<br>
<input type="text"name="name"placeholder="name"required>
<br><br>
<input type="text" name="kg"placeholder="kg"required>
<br><br>
<input type="text" name="rate"placeholder="rate"required>
<br><br>
<input type="text" name="money"placeholder="money"required>
<br><br>
<input type="date" name="date"placeholder="date"required>
<br><br>
<button type="sumbit" name="update" value="update">Update</button>
</div>
</form>



</div>

</body>
</html>