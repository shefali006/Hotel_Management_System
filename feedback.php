<?php
include('FeedConn.php');
?>
<html>
<head>
    <title>FeedBack Form</title>
    <link rel="icon" type="image/png" href="IMAGES/MyFavicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link href="style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body style="background-image:url(IMAGES/feedback1.jpg) ;">

  
    

<center>
<div class="main">
		<div class="main-w3l">
        <h1 class="logo-w3" style="color: black; font-family:Algerian;">ENTER YOUR FEEDBACK.!!</h1>
			<div class="w3layouts-main">
    <form action="feedback.php" method="post">
        <p style="font-family: Calibri; color:black; font-size:large;"> <b>Enter Your Name:</b></p>
       <input type="text" name="name" placeholder="Enter Name">
       <p style="font-family: Calibri; color:black; font-size:large;"><b>Enter Your FeedBack:</b></p>
       <input type="text" name="feedback" placeholder="Enter Feedback">
       <input type="submit" name="submit">
    </form>

    <a href="homePage.html" style="color: red;" onmouseover="this.style.color='green'" onmouseout="this.style.color='red'"> <b>Back To HomePage</b></a>
            </div>
        </div>
</div>
</center>
    <?php
       if(isset($_POST['submit']))
       {
           $name = $_POST['name'];
           $feedback=$_POST['feedback'];

           $qry="INSERT INTO `feedback`( `name`, `feedback`) VALUES ('$name','$feedback')";
           $run=mysqli_query($sql,$qry);
           if($run==true)
           {
               ?>
               <script>
                   alert("Feedback Saved Perfectly");
               </script>
               <?php
           }
       }
    ?>



</body>
</html>