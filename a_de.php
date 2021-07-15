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
       $name=$_POST['name'];
	    $sd=$_POST['start'];
       $ed=$_POST['end'];
		
		
        $sql="delete from a_table where name='$name'and date>='$sd' and date<='$ed'";

        if ($dbcon->query($sql) ===true)
		{ echo "<script>alert('Successfully Update Home Income ');</script>";
        
	   }else {echo "Error".$sql ."<br>" .$dbcon->error;}
	   
	   
}
?>