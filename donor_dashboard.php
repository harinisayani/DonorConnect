<?php 
$servername="localhost:3308/";
$username="root";
$password="";
$dbname="harini_csp";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("connection failed");
}
$sql="select * from organizations";
$result=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate Food</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="donor_dashboards.css">
</head>
<body>
    <nav>
        <ul>
            <li class="title">Donate Food</li>
            <li class="attr menu2"><a href="donor_dashboard.php">Organizations</a></li>
            <li class="attr"><a href="index.html">Logout</a></li>
        </ul>
    </nav>
    <?php
        while($row=mysqli_fetch_assoc($result))
        {
    ?>
    <div class="main-container">
        <div class="content-1">
            <div class="img">
                <img src="<?php echo $row['image'];?>" alt="no-image" >
            </div>
            <div class="content">
                <h2>Organizations Name:<?php echo $row['name'];?></h2>
                <p>Address:<?php echo $row['address'];?></p>
                <p>Contact Info:<?php echo $row['contact'];?></p><br>
                <div class="-button">
                    <form action="form_food.php" method="post">
                    <input type="text" value="<?php echo $row['name'];?>" name="org" class="org">
                    <input type="submit" value="Donate Food">
                    </form>
                    <form action="form_money.php" method="post">
                        <input type="text" value="<?php echo $row['name'];?>" name="org" class="org">
                       <input type="submit" value="Donate Money">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php 
        }
    ?>
</body>
</html>