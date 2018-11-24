<?php

	$username=$_POST['username'];
	$password=$_POST['userpassword'];
	$email=$_POST['useremail'];
	if(!empty($username))
	{
		if(!empty($password))
		{
			if (!empty($email)) 
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
				    $sql="INSERT INTO signup values ('$username','$password','$email')";
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
		        echo "Email cannot be empty!";
		        die();
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
		echo "Username cannot be empty!";
		die();
	}

?>
