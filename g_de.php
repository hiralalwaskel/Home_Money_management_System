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
if($_POST['delete'])
{	
       $username=$_POST['username'];
       $date=$_POST['date'];
		
		
        $sql="delete from g_table where username='$username' and date='$date'";
      

	   if ($dbcon->query($sql) ===true)
		{ echo "<script>alert('Successful ');</script>";
        
	   }else {echo "Error".$sql ."<br>" .$dbcon->error;}
}
?>