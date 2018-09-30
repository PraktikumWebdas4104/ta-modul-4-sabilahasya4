<html>
<head>
    <title>TA 4 WebDas </title> 
</head>
<body>
     <h1>Membuat Login Dengan</h1>
     <h3>SILAHKAN LOGIN</h3>
     <form action="proses.php" method="post">  
<table>
    <tr>
      <td>Username</td>
      <td><input type="text" name="username"></td>
    </tr>
    <tr>
       <td>Password</td>
       <td><input type="password" name="password"></td>
    </tr>
    <tr>
       <td></td>
       <td><input type="submit" name="login" value="Log In"></td>
       </tr>
  </table>
 </form>
</body>
</html>

<?php 

if(isset($_POST['login'])){
  $username=$_POST['username'];
  $user=$_POST['password'];

  if($user=="admin"&&$pass="admin"){
    echo "LOGIN BERHASIL";
?>


<a href="proses.php" > lanjutlah ke proses </a>
<?php

  }else{
    echo "LOGIN GAGAL";
  }

}



?>

