
<?php
session_start();
include"link.php";
if(isset($_POST['login'])){
  $username=$_POST['username'];
  $password=$_POST['password'];
  $sql="SELECT*from user where username=:username and password=:password";
  $statement=$link->prepare($sql);
  $statement->execute(array(
    'username'=>$_POST['username'],
     'password'=>$_POST['password']));
     $count=$statement->rowcount();
     if($count==1){
     $data=$statement->fetch();
  $_SESSION['un']=$username;
  $_SESSION['pw']=$password;
  header('location:form.php');
}else {
  header("location:news.php?msg=invalid username or password");
};

}
else{
  header("location:news.php");
}
 ?>
