<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=thn, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if(isset($_POST['name'])){

    
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "connectfour";

  $con = mysqli_connect($server,$username,$password,$database);

  if(!$con){
       die("connection to this database failed due to". mysqli_connect_error());
  }

  //echo "success connecting to the database";
    
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $sql = "INSERT INTO `connectfour`.`game_data` (`name`, `email`, `phone`) VALUES ('$name', '$email', '$phone');";

   //echo $sql;

  if($con->query($sql) == TRUE){

    echo "successfully inserted";
  } 
    else{
        echo "ERROR: $sql <br> $con->error";
    }
      $con->close();
}
    
    ?>
    
    
</body>
</html>