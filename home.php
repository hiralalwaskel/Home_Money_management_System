
<!doctype html>
<html>
<head>
<style>
.alert{
	  background-color:#FFFFFF;
	  height:500px;
	  box-shadow:0px 0px 10px 0px;
	  margin-left:150px;
	  margin-right:150px;
	  margin-top:25px;
	  }
.m{
	width:680px;
	height:400px;
	margin-left:15px;
	margin-right:15px;
	margin-top:25px;
	}
body{
	margin:0px;
	}

.hero-text{
    text-align:center;
    top:10%;
    left:60%;position:absolute;
    border:5px solid gray;
    
    background-color:#D3C4E1;
    width:200px;
    opacity:0.5;
    }
.hero-text1{
    text-align:center;
    top:20%;
    left:60%;position:absolute;
    border:5px solid gray;
   
    background-color:#D3C4E1;
    width:200px;
    opacity:0.5;
    }
.hero-text2{
    text-align:center;
    top:30%;
    left:60%;position:absolute;
    border:5px solid gray;
  
    background-color:#D3C4E1;
    width:200px;
    opacity:0.5;
    }
.hero-text3{
    text-align:center;
    top:40%;
    left:60%;position:absolute;
    border:5px solid gray;
   
    background-color:#D3C4E1;
    width:200px;
    opacity:0.5;
    }
.hero-text4{
    text-align:center;
    top:50%;
    left:60%;position:absolute;
    border:5px solid gray;
   
    background-color:#D3C4E1;
    width:200px;
    opacity:0.5;
    }

   
   
//8888888888888
.container{
position:relative;
width:50%;
}
.overlay{
position:absolute;
bottom:100%;
left:0;
right:0;
background-color:#C1C1C1;
overflow:hidden;
width:100%;
height:0;
transition:0.1s ease;
}
.container:hover .overlay{
bottom:0;
height:100%;
}
.text{
color:white;
position:absolute;
overflow:hidden;
top:50%;
left:50%;

transform:translate(-50%,-50%);
}

</style>
</head>
<body>
<div class="alert">
<center>
<img src="img.jpg"class="m">
<div class="hero-text">
<div class="container">
<p>Home Income<p>
 <div class="overlay">
<div class="text">
<p><a href="h_insert.php">insert</a>
<a href="h_update.php">update</a> 
<a href="h_delete.php">delete </a>
<a href="h_view.php">view </a></p>
</div>
</div>
</div>
</div>
<div class="hero-text1">
<div class="container">
<p>Another source Income<p>
 <div class="overlay">
<div class="text">
<p><a href="a_insert.php">insert</a>
<a href="a_update.php">update</a> 
<a href="a_delete.php">delete </a>
<a href="a_view.php">view </a></p>
</div>
</div>
</div>
</div>
<div class="hero-text2">
<div class="container">
<p>Any person Take Money<p>
 <div class="overlay">
<div class="text">
<p><a href="t_insert.php">insert</a>
<a href="t_update.php">update</a> 
<a href="t_delete.php">delete </a>
<a href="t_view.php">view </a></p>
</div>
</div>
</div>
</div>

<div class="hero-text3">
<div class="container">
<p>Any person Give Money<p>
 <div class="overlay">
<div class="text">
<p><a href="g_insert.php">insert</a>
<a href="g_update.php">update</a> 
<a href="g_delete.php">delete </a>
<a href="g_view.php">view </a></p>
</div>
</div>
</div>
</div>
<div class="hero-text4">
<div class="container">
<p>Views All Tables<p>
 <div class="overlay">
<div class="text">
<p><a href="htable.php">HTable</a>
<a href="atable.php">ATable</a> 
<a href="ttable.php">TTable </a>
<a href="gtable.php">GTable </a></p>
</div>
</div>
</div>
</div>
</img>
</center>

</div>

</body>
</html>
