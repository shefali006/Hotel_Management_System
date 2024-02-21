<!DOCTYPE html>
<html>
<head>
	<title>Table Booking Form</title>
	<link rel="icon" type="image/png" href="IMAGES/MyFavicon.png">

</head>
<body style="background-image: url(IMAGES/regimg.webp);">
	<?php
		
		$user_id=$_POST['User_id'];
		$name=$_POST['Name'];
		$password=$_POST['Password'];
		$table_name=$_POST['Table_name'];
		$guest=$_POST['Guest'];
		$dine_date=$_POST['Date'];
		$dine_time=$_POST['Time'];
		$request=$_POST['Request'];
		
		// to make connection
		$conn=mysqli_connect("localhost","root","","mySqlDb");

		//check if connection is done
		if(!$conn)  
			{
				echo"connection failed";
			}
		else
			{
				//echo"connection done";
				
				//query stored in $query variable 
				$query1="SELECT * FROM registration WHERE User_Id='$user_id' && Password='$password'";

				$res=$conn->query($query1);//performs a query on database
				$rows=$res->num_rows;//return no of rows present in result set
				// query in $query1 is fired on connection $conn 
				if($rows>0)
				{
				//echo"verification done";

				$query2="INSERT INTO dining(User_Id,Name,Table_name,Guest,Event_date,Event_time,Request) VALUES('$user_id','$name','$table_name','$guest','$dine_date','$dine_time','$request')";

					if(mysqli_query($conn,$query2))
					{
					//echo"insertion done";

					$query3="SELECT * FROM dining WHERE User_Id='$user_id'";
					$res=$conn->query($query3);//performs a query on database
					$rows=$res->num_rows;//return no of rows present in result set
					$res->data_seek(0);//adjust data pointer to arbitrary row in result
					$row=$res->fetch_array(MYSQLI_NUM);//fetch_array:fetch result row as an array,MYSQLI_NUM: specifies return array should use numeric keys for array(0=>data)
				
	?>
				<center>
				<h1 style=" font-family:Century Schoolbook; color:black;"> Inn of Seas</h1><br/><br/>
				<h2 style=" font-family:Century Schoolbook; color:black"> Congratulations!!</h2><br/>
				<h2 style=" font-family:Century Schoolbook; color:black;"> Your Table Booking Details Are As Follows:</h2><br/>
				<h3>UserId : <?php echo "$user_id"; ?></h3>
				<h3>Name : <?php echo "$name"; ?></h3>
				<h3>Table Name : <?php echo "$table_name"; ?></h3>
				<h3>Guest : <?php echo "$guest"; ?></h3>
				<h3>Dine Date : <?php echo "$dine_date"; ?></h3>
				<h3>Dine Time : <?php echo "$dine_time"; ?></h3>
				<h3>Special Requests : <?php echo "$request"; ?></h3>
				<br/><br/>
				</center>
	<?php
					}

				}
				else
				{
	?>
			<center>
			<h1 style=" font-family:Algerian; color:white;">Inn of Seas</h1><br/><br/>
	<?php 
			echo("Unable to Book Table Please check if you provide right details or try again.....<br/><br/>");
		 	die("Connection failed: " . mysqli_connect_error());
	?>
			</center>
	<?php 

				}			
			}	

		mysqli_close($conn);
	?>
	
</body>
</html>	