<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor Register</title>
    <link rel="stylesheet" href="register_donor.css">
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
        if(isset($_POST["finish"]))
        {
            $name=$_POST['name'];
            $email=$_POST["email"];
            $pswd=$_POST["password"];
            $confirm=$_POST["confirm"];
            $phone=$_POST["phone"];
            if($pswd==$confirm){
                $sql="insert into donor_register(name,email,password,confirm,phone) values('$name','$email','$pswd','$confirm','$phone')";
                if(mysqli_query($conn,$sql)){
                   header("location:login_donor.php");
                }
                else{
                    echo "error".mysqli_error($conn);
                }
            }
            else{
                echo "<script>alert('Enter correct Password');</script>";
            }
            }
            mysqli_close($conn);
        ?>
        <form action="register_donor.php" method="post" class="form-container" name="donor">
            <h1 style="color:green;">Register</h1><br><br>
            <input type="text" name="name" placeholder="Enter name.." required>
            &nbsp;&nbsp;&nbsp;&nbsp;<input type="email" placeholder="Enter Email.." name="email" required>
            &nbsp;&nbsp;<input type="password" placeholder="Enter Password" name="password" required>
            &nbsp;&nbsp;<input type="password" placeholder="Confirm Password" name="confirm" required>
            &nbsp;&nbsp;<input type="tel" placeholder="Phone Number" name="phone" required><br><br>
            <input type="submit" value="Submit" name="finish"><br><br>
            <p>Already have an account?<a href="login_donor.php">Login</a></p>
        </form>
</div>
</body>
</html>