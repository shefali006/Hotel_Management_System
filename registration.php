<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="icon" type="image/png" href="IMAGES/MyFavicon.png">

</head>
<body style="background-image: url(IMAGES/regimg.webp);">

	<?php

		$name=$_POST['Name'];
		$gender=$_POST['Gender'];
		$mob_no=$_POST['Phone'];
		$email=$_POST['Email_id'];
		$password=$_POST['Password'];
		$age=$_POST['Age'];
		$bdate=$_POST['Birthdate'];
		$country=$_POST['Country'];
		$state=$_POST['State'];
		$city=$_POST['City'];
		$locality=$_POST['Locality'];

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
				$query1="INSERT INTO registration(User_Id,Name,Gender,Mob_no,Email,Password,Age,Country,State,City,Locality,Birth_date) VALUES('','$name','$gender','$mob_no','$email','$password','$age','$country','$state','$city','$locality','$bdate')";
				//print_r($_POST); //to print all elements in post array
			}

			// query in $query1 is fired on connection $conn 
		if(mysqli_query($conn,$query1))
			{
				//echo"insertion done";

				$query2="SELECT * FROM registration WHERE Password='$password'&& Email='$email'";
				$res=$conn->query($query2);//performs a query on database
				$rows=$res->num_rows;//return no of rows present in result set
				$res->data_seek(0);//adjust data pointer to arbitrary row in result
				$row=$res->fetch_array(MYSQLI_NUM);//fetch_array:fetch result row as an array,MYSQLI_NUM: specifies return array should use numeric keys for array(0=>data)
				$val=array($row[0]);//copying first value from row array
	?>
				<center>
				<h1 style=" font-family:Century Schoolbook; color:black;"> Inn of Seas</h1>
				<h2 style=" font-family:Century Schoolbook; color:black;"> Congratulations!!<?php echo "$name"; ?></h2> <br>
				<h2 style=" font-family:Century Schoolbook; color:black;"> Your Registration Details Are As Follows:</h2><br/>
				<h3>UserId : <?php $data=implode($val); echo "$data"; ?></h3>
				<h3>Name : <?php echo "$name"; ?></h3>
				<h3>Gender : <?php echo "$gender"; ?></h3>
				<h3>Mobile No : <?php echo "$mob_no"; ?></h3>
				<h3>Email Id : <?php echo "$email"; ?></h3>
				<h3>Birth date : <?php echo "$bdate"; ?></h3>
				<h3>Age : <?php echo "$age"; ?></h3>
				<h3>Country : <?php echo "$country"; ?></h3>
				<h3>State : <?php echo "$state"; ?></h3>
				<h3>City : <?php echo "$city"; ?></h3>
				<h3>Locality : <?php echo "$locality"; ?></h3>
				<br/><br/>
				</center>

	<?php			
			}
		else
			{
	?>
		<center>
		<h1 style=" font-family:Algerian; color:black;">Inn of Seas</h1><br/><br/>
		<?php echo("Unable to Register Please check if are aldready a member or try using another Email Id....<br/><br/>");
		 die("Connection failed: " . mysqli_connect_error());
		?>
		</center>
	<?php 
			}		
				
		mysqli_close($conn);
	?>

</body>
</html>