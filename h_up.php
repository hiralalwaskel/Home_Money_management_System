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
if($_POST['update'])
{	
       $name=$_POST['name'];
		$kg=$_POST['kg'];
		$rate=$_POST['rate'];
		$money=$_POST['money'];
		$date=$_POST['date'];
		
        $sql="update h_table set kg='$kg',rate='$rate',money='$money'where name='$name'and date='$date'";

        if ($dbcon->query($sql) ===true)
		{ echo "<script>alert('Successfully Update Home Income ');</script>";
        
	   }else {echo "Error".$sql ."<br>" .$dbcon->error;}
	   
	   
}
?>