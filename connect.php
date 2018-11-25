<?php

	$first=$_POST['first'];
	$last=$_POST['last'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$phone=$_POST['phone'];

	if(!empty($first))
	{
		if(!empty($email))
		{
			if (!empty($password)) 
			{
			    $host="localhost";
			    $dbusername="root";
			    $dbpassword="root";
			    $dbname="projectdb";

			    $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
			    if(mysqli_connect_error())
			    {
				    die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
			    }
			    else
			    {
				    $sql="INSERT INTO customer values (0,'$first','$last','$email','$password','$phone')";
				    if($conn->query($sql))
				    {
					    echo "Insertion successful!";
				    }
				    else
				    {
					    echo "Error:".$sql."<br>".$conn->error;
				    }
				    $conn->close();
			    }
			}
		    else
	        {
		        echo "Password cannot be empty!";
		        die();
	        }
	    }    
		else
		{
			echo "Email cannot be empty!";
			die();
		}
	}
	else
	{
		echo "First name cannot be empty!";
		die();
	}

?>
