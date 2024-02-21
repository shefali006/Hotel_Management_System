<?php
 include('FeedConn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration Details </title>
    <link rel="icon" type="image/png" href="IMAGES/MyFavicon.png">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:rgb(94, 209, 207) ;">

<div class="site-wrap">
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> 
    <a href="AdRegistration.php" onmouseover="this.style.color='green'" onmouseout="this.style.color='red'"> <u>Back to Admin Registration</u></a>

 
      
      <div class="admin-booking">
        <h1 class="admin-book" style="font-family: Baskerville Old Face;">Welcome Admin To Registration Details<Section></Section></h1>
        <table>
            <tr>
                    <th width="10%" height="50px"><center>Name</center></th>
                     <th width="10%" height="50px"><center>Gender </center></th>
                     <th width="10%" height="50px"><center>Mobile No.</center></th>
                     <th width="10%" height="50px"><center>E-Mail</center></th>
                     <th width="10%" height="50px"><center>Password</center></th>
                     <th width="10%" height="50px"><center>Age</center></th>
                     <th width="10%" height="50px"><center>Country</center></th>
                     <th width="10%" height="50px"><center>State</center></th>
                     <th width="10%" height="50px"><center>City</center></th>
                     <th width="10%" height="50px"><center>Locality</center></th>
                     <th width="10%" height="50px"><center>Birth Date</center></th>
                    
            </tr>
            <?php
               $qry="SELECT * FROM `registration`";
               $run=mysqli_query($sql,$qry);
                
                 while( $row=mysqli_fetch_assoc($run))
                 {
                    $name=$row['Name'];
                    $gender=$row['Gender'];
                    $mob_no=$row['Mob_no'];
                    $email=$row['Email'];
                    $password=$row['Password'];
                    $age=$row['Age'];
                    $bdate=$row['Birth_date'];
                    $country=$row['Country'];
                    $state=$row['State'];
                    $city=$row['City'];
                    $locality=$row['Locality'];
            

                    ?>
                    <tr>
                     <td width="10%" height="50px"><center><?php echo $name; ?></center></td>
                     <td width="10%" height="50px"><center><?php echo $gender; ?></center></td>
                     <td width="10%" height="50px"><center><?php echo $mob_no; ?></center></td>
                     <td width="10%" height="50px"><center><?php echo $email; ?></center></td>
                     <td width="10%" height="50px"><center><?php echo $password; ?></center></td>
                     <td width="10%" height="50px"><center><?php echo $age; ?></center></td>
                     <td width="10%" height="50px"><center><?php echo $country; ?></center></td>
                     <td width="10%" height="50px"><center><?php echo $state; ?></center></td>
                     <td width="10%" height="50px"><center><?php echo $city; ?></center></td>
                     <td width="10%" height="50px"><center><?php echo $locality; ?></center></td>
                     <td width="10%" height="50px"><center><?php echo $bdate; ?></center></td>
                    
                     
                 </tr>

                    <?php
                 }
            ?>
        </table>
      </div>
    </div>
  
    </body>
</html>
      
