<?php include ("connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <table >
        
        <thead>
           
        <tr>
            
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>UPDATE</th>
            <th>DELETE</th>
        </tr>
        </thead>
        <tbody>
            <?php
            
            $sql = "Select * from crud";
            $result = mysqli_query($conn,$sql);
            if($result){
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row['ID'];
                    $name  = $row['NAME'];
                    $email = $row['EMAIL'];

                    echo '<tr>
                    <td>'.$id.'</td>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td><button><a href="update.php?updateid='.$id.'">UPDATE</a></button></td>
                    <td><button><a href="delete.php?deleteid='.$id.'">DELETE</a></button></td>  
                     
                    </tr>';
                
                }
            }

            ?>
        </tbody>
    </table></div><br><br>
    <div class="addbtn">
    <button type="submit" name="btnadd" class="btnadd"><a href="index.php">ADD USER</a></button>
    </div>
</body> 
</html>