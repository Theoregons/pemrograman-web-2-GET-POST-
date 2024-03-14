<?php 
    if (isset($_POST["submit"])) {
        if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
            header("Location: admin.php");
            exit;
        } else {
            $eror = true;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login Admin</h1>
    <?php if(isset($eror)) : ?>
        <p>Username / password anda salah!</p>
    <?php endif; ?>

    <form action="" method="POST">
        <label for="">Username : </label>
        <input type="text" name="username" id="username"> <br>
        <label for="">Password : </label>
        <input type="password" name="password" id="password"> <br>
        <button type="submit" name="submit">Submit</button>
    </form>

</body>
</html>