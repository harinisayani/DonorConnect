<?php
    $org=$_POST['org'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate Form</title>
    <link rel="stylesheet" href="form_money.css">
</head>
<body>
        <form class="form-container" name="donor" action="congrats.php">
            <h1 style="color:green;">Donate</h1><br><br>
            <input type="text" name="name" placeholder="Enter name.." required>
            &nbsp;&nbsp;&nbsp;&nbsp;<input type="email" placeholder="Enter Email.." name="email" required><br>
            &nbsp;&nbsp;<input type="tel" placeholder="Phone Number" name="phone" required><br><br>
            <input type="text" value="<?php echo $org;?>" disabled><br><br>
            <input type="number" placeholder="how much money do you want to give to donate food..." required><br><br><br>
            <input type="submit" value="Submit" name="finish"><br><br>
        </form>
</body>
</html>