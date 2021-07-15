<?php
$dbcon=mysqli_connect("localhost","root","","agriculture");

if (mysqli_connect_errno())
{
echo "Failed to connect to mysql:".mysqli_connect_error();
}
//else
//{echo "hiiii";}
?>

<?php
if($_POST['submit'])
{	
       $name=$_POST['name'];
		$rate=$_POST['rate'];
		$money=$_POST['money'];
		$date=$_POST['date'];
		
        $sql="insert into a_table (name  , rate , money , date  ) values ('$name','$rate','$money','$date')";

        if ($dbcon->query($sql) ===true)
		{ echo "<script>alert('Successfully Add Home Income ');</script>";
        
	   }else {echo "Error".$sql ."<br>" .$dbcon->error;}
	   
	   
}
?>