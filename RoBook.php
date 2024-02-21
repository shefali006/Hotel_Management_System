<?php
 include('FeedConn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Room Booking </title>
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
    <a href="AdRoom.php" onmouseover="this.style.color='green'" onmouseout="this.style.color='red'"> <u>Back to Admin Room</u></a>

 
      
      <div class="admin-booking">
        <h1 class="admin-book" style="font-family: Baskerville Old Face;">Welcome Admin To Room Booking <Section></Section></h1>
        <table>
            <tr>
                    <th width="10%" height="50px"><center>Name</center></th>
                     <th width="10%" height="50px"><center>Room Name</center></th>
                     <th width="10%" height="50px"><center>Arrival</center></th>
                     <th width="10%" height="50px"><center>Departure</center></th>
                     <th width="10%" height="50px"><center>Rooms</center></th>
                     <th width="10%" height="50px"><center>Adults</center></th>
                     <th width="10%" height="50px"><center>Childrens</center></th>
                     <!--<th width="10%" height="50px">Members</th>
                     <th width="10%" height="50px">Room Type</th>-->
                    
            </tr>
            <?php
               $qry="SELECT * FROM `room_book`";
               $run=mysqli_query($sql,$qry);
                
                 while( $row=mysqli_fetch_assoc($run))
                 {
                   $name=$row['Name'];
                  //  $password=$_POST['Password'];
                    $room_name=$row['Room_name'];
                    $arrival=$row['Arrival'];
                    $departure=$row['Departure'];
                    $rooms=$row['Rooms'];
                    $adults=$row['Adults'];
                    $children=$row['Children'];

                    ?>
                    <tr>
                     <td width="10%" height="50px"><center><?php echo $name; ?></center></td>
                     <td width="10%" height="50px"><center><?php echo $room_name; ?></center></td>
                     <td width="10%" height="50px"><center><?php echo $arrival; ?></center></td>
                     <td width="10%" height="50px"><center><?php echo $departure; ?></center></td>
                     <td width="10%" height="50px"><center><?php echo $rooms; ?></center></td>
                     <td width="10%" height="50px"><center><?php echo $adults; ?></center></td>
                     <td width="10%" height="50px"><center><?php echo $children; ?></center></td>
                    <!-- <td width="10%" height="50px"><center></center></td>
                     <td width="10%" height="50px"><center></center></td>-->
                    
                     
                 </tr>

                    <?php
                 }
            ?>
        </table>
      </div>
    </div>
  
    </body>
</html>
      
