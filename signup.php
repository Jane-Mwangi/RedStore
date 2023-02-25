<?php 

session_start();

include("connection.php");
include("function.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name) )
    {

        //save to database
        $user_id = random_num(20);
        $query = "insert into users(user_id,user_name,password) VALUES ('$user_id','$user_name','$password')";

        mysqli_query($con,$query);

        header("location:login.php");
        die;

    }else
    {
        echo "Please enter some valid information!";
    }
}
 



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>

<body style="background-color:lightgrey;">
<style>
#text{
  height:25px;
  border-radius: 5px;
  padding: 4px;
  border: solid thin #aaa;
  width: 350px;
  
  
}
#button{
  padding: 10px;
  width: 100px;
  color: white;
  background-color: blue;
  border: none;
  border-radius:25px;
}
#box{
  background-color: white;
  margin:auto;
  width: 400px;
  padding: 20px;
  min-height:400px;
  box-sizing: border-box;
  font-size: 20px;
  
  }
   
</style>

<br>
  <div id="box" >
     
        <form method="POST" >
            <div style ="font-size: 25px; margin:10px; color:dark; text:center;">Signup</div>
            <label for="Username">Username:</label><br>
            <input id="text" type="text" name="user_name"><br><br>
            <label for="password">Password:</label><br>
            <input id="text" type="password" name="password"><br><br>


            <input id="button" type="submit" value="Signup"><br><br><br>

            <a href="login.php">Click to Login</a><br>
        </form>
</div>
</body>
</html>