<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
    <title></title>
  </head>
  <body>
    <h2 style="text-align:center;">Patient Records</h2>
<section id="sidebar">
  <div>

<table style="width:80%">
  <tr class="dark">
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Middlename</th>
    <th>Address</th>
    <th>Phone number</th>
    <th>Age</th>
    <th>Edition</th>
    <th>Deletion</th>

  </tr>
<?php
include("link.php");

if(isset($_GET["delete"])){
  $sql = "DELETE FROM patient WHERE pid=:id";
  $query = $link->prepare($sql);
  $query->execute(array("id"=>$_GET["delete"]));
}
  $sql = "SELECT * FROM patient";
  $query = $link->prepare($sql);
  $query->execute();

  foreach ($query->fetchAll() as $value) {

?>
<tr>
  <td><?php echo $value["fname"];?></td>
  <td><?php echo $value["mname"];?></td>
  <td><?php echo $value["lname"];?></td>
  <td><?php echo $value["address"];?></td>
  <td><?php echo $value["phone"];?></td>
  <td><?php echo $value["age"];?></td>
  <td></td>
  <td><a href="?delete=<?php echo $value["pid"];?>"><button> delete</button></a></td>

</tr>

<?php
}
?>
</table>
</section>

</section>



  </body>
</html>
