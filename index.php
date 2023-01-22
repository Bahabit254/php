<?php
   if(isset($_POST['submit']))

   echo "Submitted"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP PROGRAMMING</title>
</head>
<body>
    <div class="new-user">
        <h1>Sign Up</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            <label>Username</label>
            <input type="text" name="username">
            <label>Email</label>
            <input type="email" name="email">
            <input type="submit" name="submit" value="submit">
        </form>
    </div>
</body>
</html>