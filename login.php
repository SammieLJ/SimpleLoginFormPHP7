<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Login Page</title>
</head>
<body>
    <div id="frm">
        <form action="process.php" method="POST">
         <p>
            <label for="">Username:</label>
            <input type="text" id="user" name="user">
         </p>
         <p>
            <label for="">Password:</label>
            <input type="password" id="pass" name="pass">
         </p>
         <p>
            <input type="submit" id="btn" value="login">
         </p>
        </form>
    </div>
</body>
</html>