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
       $username=$_POST['username'];
		$age=$_POST['age'];
		$address=$_POST['address'];
		$working=$_POST['working']; 
		$mobile_number=$_POST['mobile_number'];
		$money=$_POST['money'];
		$byaj=$_POST['byaj'];
		$date=$_POST['date'];
		
        $sql="insert into t_table (username  , age, address , working , mobile_number , money , byaj , date ) values ('$username','$age','$address','$working','$mobile_number','$money','$byaj','$date')";

        if ($dbcon->query($sql) ===true)
		{ echo "<script>alert('Successfully Add Home Income ');</script>";
        
	   }else {echo "Error".$sql ."<br>" .$dbcon->error;}
	   
	   
}
?>