<?php 
include 'connection.php';

$id = $_GET['updateid'];
$sql = "Select * from crud where id = $id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$name = $row['NAME'];
$email = $row['EMAIL'];

if(isset($_POST['btnsubmit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "update crud set id='$id',name='$name',email='$email' where id=$id";
    $result = mysqli_query($conn,$sql);
    if($result){
        // echo "UPDATED successfully ";
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
    <link rel="stylesheet" href="update.css">
</head>
<body>
    <div class="update">
    <div class="container-2">
    <form method="post" >
    <h2>UPDATE PAGE</h2> 
        <label>NAME:</label>
        <input type="text" placeholder="enter your name" name="name" autocomplete="off" value =<?php echo "$name"?>><br><br>
        <label>EMAIL:</label>
        <input type="email" placeholder="enter your email" name="email" autocomplete="off" value =<?php echo "$email"?>><br><br>
        <button type="submit" name="btnsubmit" class="updatebtn">UPDATE</button>
    </form></div></div>
</body>
</html>
