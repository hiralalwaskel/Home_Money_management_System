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
		$kg=$_POST['kg'];
		$rate=$_POST['rate'];
		$money=$_POST['money'];
		$date=$_POST['date'];
		
        $sql="insert into h_table (name , kg , rate , money , date ) values ('$name','$kg','$rate','$money','$date')";

        if ($dbcon->query($sql) ===true)
		{ echo "<script>alert('Successfully Add Home Income ');</script>";
        
	   }else {echo "Error".$sql ."<br>" .$dbcon->error;}
	   
	   
}
?>