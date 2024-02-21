<?php
include('FeedConn.php');
?>

<html>
    <head>
        <title>Admin Login</title>
        <link rel="icon" type="image/png" href="IMAGES/MyFavicon.png">
        <link href="style.css" rel="stylesheet" type="text/css" media="all" />
    </head>
    <body style="background-image: url(IMAGES/adminlog.webp);">
    <center>
    <div class="main">
		<div class="main-w3l">
			<h1 class="logo-w3" style="color: black; font-family:Algerian;">ADMIN LOGIN </h1>
			<div class="w3layouts-main">
            <form action="" method="post" >
            <table>
             <tr>
                 <td width="50%" height="50px"><b>Username</b></td>
                 <td width="50%" height="50px"> <input type="text" name="un" id="username"  title="Enter Username"></td>
             </tr>
             <tr>
                 <td width="50%" height="50px"><b>Password</b></td>
                 <td width="50%" height="50px"> <input type="Password" name="ps" id="password" title="Enter Password"></td>
             </tr>
             <tr>
                 <td colspan="2"><input type="submit" name="sub" id="btn" value="Login"></td>
             </tr>
            </form>
            <?php
                
                if(isset($_POST['sub']))
                {
                    $username=$_POST['un'];
                    $password=$_POST['ps'];
                    $qry="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
                    $run=mysqli_query($sql,$qry);
                    $row=mysqli_num_rows($run);
                    if($row <1)
                    {
                        ?>
                        <script>
                            alert('Username or password not match !!');
                            window.open('Admin.php','_self');
                        </script>
                        <?php
                    }
                    else{
                        header('location:AdminWel.html');
                    }
                }

            ?>

        </div>
    </div>
</div>
    </center>
</body>
</html>