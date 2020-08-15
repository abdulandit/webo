<?php
include("link.php");
    if(isset($_POST['submit'])){
      $fname = $_POST["fname"];
      $mname = $_POST["mname"];
      $lname = $_POST["lname"];
      $address = $_POST["address"];
      $gender = $_POST["gender"];
      $dob = $_POST["dob"];

      $sql = "INSERT INTO patient VALUES(NULL,:fname,:mname,:lname,:address,:sex,:dob,20,887856758)";
      $query = $link->prepare($sql);
      $query->execute(array("fname"=>$fname, "mname"=>$mname,"lname"=>$lname,"address"=>$address,"sex"=>$gender,"dob"=>$dob));


    // if (empty($_POST["name"])) {
    // $nameError = "Name is required";
    // } else {
    // $name = test_input($_POST["name"]);
    //
    // if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
    // $nameError = "Only letters and white space allowed";
    // }
    // }
    //
    // if (empty($_POST["name"])) {
    // $addresserror = "address is required";
    // } else {
    // $address = test_input($_POST["address"]);
    //     }
    //
    //
    // if (empty($_POST["gender"])) {
    // $genderError = "Gender is required";
    // } else {
    // $gender = test_input($_POST["gender"]);
    // }
    }
    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
     ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title>COVID 19|patient form</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>

  <body>


    <script type="text/javascript">
    var fu=document.getElementById('nm').value;
    var fuu=document.getElementById('fm').value;

    if(fu==""){
      document.getElementById('nm').innerHTML="hiii";
      alert('hiii');
    }else {
      document.getElementById('nm').innerHTML="";
    }
    </script>

    </script>


    <aside id="sidebar" style="width:500px;position:absolute; left:30%; ">
      <div class="dark">


      <h1 style="text-align:center; font-size:40px;"><span class="highlight" style="color:red; font-size:40px;">Patient </span>Form</h1>


<section>
    <form class="quote"  method="post" action="" onsubmit="return validate()">

      <div>
        <label><b>Name</b></label>
        <input type="text" name="fname" id="nm" placeholder="first name">
        <input type="text" name="mname" placeholder="middle name">
        <input type="text" name="lname" placeholder="last name">
        <input type="text" name="address" placeholder="Address">
      </div><br>

      <div>
        <label><b>Email</b></label>
        <input type="email" name="email" placeholder="email address">
      </div><br>

      <div>
        <label><b>Sex</b></label>
        <input type="radio" name="gender" value="female" checked>female
        <input type="radio" name="gender" value="male">male
      </div><br>

          <div>
           <label><b>Date of birth</b></label>
           <input type="date" name="dob">
         </div><br>

         <div>
           <h2>Patient medical history</h2>
         </div>

         <div>
           <label>have you everhad(select form list)</label>
           <br>
           <label>cancer</label>
           <input type="checkbox" name="cancer" value="Cancer">
           <label>Asthma</label>
           <input type="checkbox" name="asthma" value="Asthma">
           <label>Heart-deseases</label>
           <input type="checkbox" name="heartdeseases" value="heartdeseases">
           <label>Anemia</label>
           <input type="checkbox" name="anemia" value="Anemia">
          <label>kidneydeseases</label>
           <input type="checkbox" name="kidneydeseases" value="Kidney-deseases">
         </div><br>

          <div>
            <label>Other illness</label>
            <input type="text" name="illness" value="">
          </div><br>
          <div>
            <label>List other drug allergies</label>
            <textarea name="message" rows="4" cols="40"></textarea>
          </div><br>


        <button class="button1" type="submit" name="submit">register patient</button>

    </form>
     </dark>
    </aside>

<script>
function validate(){
  var name = document.getElementById("nm").value;

  if(/^\w{0}$/.test(name)){
    alert("Name Must Be Filled !!!");
  }
  else{
    return true;
  }

  return false;
}
</script>

  </body>

</html>
