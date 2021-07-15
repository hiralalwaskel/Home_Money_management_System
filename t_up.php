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
       $username=$_POST['username'];
		$age=$_POST['age'];
		$address=$_POST['address'];
		$working=$_POST['working']; 
		$mobile_number=$_POST['mobile_number'];
		$money=$_POST['money'];
		$byaj=$_POST['byaj'];
		$date=$_POST['date'];
		
        $sql="update t_table set age='$age',address='$address',working='$working',mobile_number='$mobile_number',money='$money',byaj='$byaj' where username='$username' and date='$date'";

        if ($dbcon->query($sql) ===true)
		{ echo "<script>alert('Successfully Update ');</script>";
        
	   }else {echo "Error".$sql ."<br>" .$dbcon->error;}
	   
	   
}
?>