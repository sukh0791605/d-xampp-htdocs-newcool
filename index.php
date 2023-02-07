
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
   <div class="Conatiner-form">
    <form action="" method="post">
    <h1> ADMIN LOGIN</h1>
     <br>
     <br>
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="Adminusername" required>
      <br> <br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="AdminPassword" required>
    <br> <br>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    <br> <br>
    <button type="submit" name="submit">Login</button>
    <br>
  
  </div>
<!-- 
  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div> -->
</form>
</div>
</body>
</html>
<?php
include './database/connection.php';
if (isset($_POST['submit'])){
if(!empty($_POST['Adminusername'])&!empty($_POST['AdminPassword'])){
    $Adminusername=$_POST['Adminusername'];
 $AdminPassword=$_POST['AdminPassword'];

//  $username = stripcslashes($username);  
//         $password = stripcslashes($password);  
//         $username = mysqli_real_escape_string($con, $username);  
//         $password = mysqli_real_escape_string($con, $password);  
      
//         $sql = "select *from login where username = '$username' and password = '$password'";  
//         $result = mysqli_query($con, $sql);  
//         $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
//         $count = mysqli_num_rows($result);  
          
//         if($count == 1){  
//             echo "<h1><center> Login successful </center></h1>";  
//         }  
//         else{  
//             echo "<h1> Login failed. Invalid username or password.</h1>";  
//         }  


 $sqldata="SELECT * FROM `adminuser` WHERE Adminusername='".$Adminusername."' &&  $AdminPassword='".$AdminPassword."' ";
 $result=mysqli_query($conn,$sqldata);
 $row=mysqli_fetch_row($result);
 $count=mysqli_num_rows($result);
 if($count==1){
   
  echo   "<script>alert ('you have successfully logged in')
 window.location.href='./client/customers.php'</script>";
   exit();

 }
 else{
    echo   "<script>alert ('you enter incorrect password')
 </script>";
   exit();
  
 }
 
}
else{
    echo "fill the information";
}

}


?>