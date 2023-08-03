<?php 
include 'connection.php';
if(isset($_POST['btnsubmit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "insert into crud (name,email) values('$name','$email')";
    $result = mysqli_query($conn,$sql);
    if($result){
        // echo "data successfully inserted";
        header('location:display.php');
    }else{
        die(mysqli_error($conn));
    }
}


?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="index-contain">
    <div class="container-1">
    <form method="post" >
        <h2>DATA ENTRY</h2>
        <label>NAME:</label>
        <input type="text" placeholder="Enter your name" name="name" autocomplete="off" autofocus><br><br>
        <label>EMAIL:</label>
        <input type="email" placeholder="Enter your email" name="email" autocomplete="off"><br><br>
        <button type="submit" name="btnsubmit" class="submit">SUBMIT</button>
    </form></div></div>
</body>
</html>
