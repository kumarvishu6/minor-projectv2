<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=\, initial-scale=1.0">
  <title>Document</title>
  <style>

body {background-image: url(https://cdn.pixabay.com/photo/2021/02/16/18/55/gamer-6022003__340.png) ;
	     
  
  background-repeat: no-repeat;
  position: relative;
  width: 85%;
  height: 610px;
  margin-left: auto;
  margin-right: auto;
  background-size: 100%;
  }

    </style>
</head>
<body>
<br>
<br>



    <?php 
    //if(isset($_POST['name'])){

    
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
   $sql = "INSERT INTO `connectfour`.`minor` (`name`, `email`, `phone`) VALUES ('$name', '$email', '$phone');";

   //echo $sql;

  if($con->query($sql) == TRUE){

    echo "<p><center><h1>MUCH APPRECIATEED!</h1></center></p>";
    echo "<h2><center>Your data is safe with us</center></h2>";
  } 
    else{
        echo "ERROR: $sql <br> $con->error";
    }
      $con->close();
//}
    
    ?>
    
    

