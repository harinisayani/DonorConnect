<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor Login</title>
    <link rel="stylesheet" href="login_donor.css">
</head>
<body>
    <div class="background">
        <?php  
             $servername="localhost:3308/";
             $username="root";
             $password="";
             $dbname="harini_csp";
             $conn=mysqli_connect($servername,$username,$password,$dbname);
             if(!$conn){
                 die("connection failed");
             }
             if(isset($_POST["finish"])){
                $email=$_POST["email"];
                $pswd=$_POST["password"];
                $sql="select * from donor_register where email='$email' and password='$pswd' ";
                $res=mysqli_query($conn,$sql);
                if(mysqli_num_rows($res)==1){
                    header("Location:donor_dashboard.php");
                }
                else{
                    echo "<script>alert('Enter correct Phone number or Password');</script>";
                }
            }
        ?>
        <form action="login_donor.php" method="post" class="form-container" name="donor">
            <h1 style="color:green;">Login</h1>
            &nbsp;&nbsp;&nbsp;&nbsp;<input type="email" placeholder="Enter email" name="email" required>
            &nbsp;&nbsp;<input type="password" placeholder="Enter Password" name="password" required><br><br>
            <input type="submit" value="Submit" name="finish"><br><br>
            <p>Don't have an account?<a href="register_donor.php">Register</a></p>
        </form>
</div>
</body>
</html>