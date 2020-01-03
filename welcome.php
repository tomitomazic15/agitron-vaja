<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>AgitronVaja</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="btn btn-success" href="logout.php">Logout</a>
    </nav>
</body>
</html>

<?php
    session_start();
    if (isset($_SESSION['username'])){
        $username = $_SESSION['username'];
        echo "<header>Welcome $username  </header> ";
        }else{
?>
<?php } ?>