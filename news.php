<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="view port" content="width=device-width">
    <meta name="description" content="Corona virus covid19">
    <meta name="keywords" content="public advice ">
    <meta name="author" content="abdulandit">


    <title>covid19 |Services</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <script>
function validate() {
   var $valid = true;
   document.getElementById("username").innerHTML = "";
   document.getElementById("password").innerHTML = "";

   var userName = document.getElementById("username").value;
   var password = document.getElementById("password").value;
   if(userName == "")
   {
       document.getElementById("username").innerHTML = "required";
     $valid = false;
   }
   if(password == "")
   {
     document.getElementById("password").innerHTML = "required";
       $valid = false;
   }
   return $valid;
}
</script>
    <img>

      <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">C O </span>R O N A</h1>
          </div>
          <nav>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <liclass="current"><a href="news.php">login</a></li>
            </ul>
          </nav>
        </div>



    </header>


    </section>
    <section id="newsletter">
      <div class="container">
        <h1>subscribe to our newsletter</h1>

        <form>
         <input type="email" placeholder="enter email.....">
         <button type="submit" class="button1">subscribe</button>
        </form>
      </div>
    </section>
    <section id="main">
      <div class="container">
        <article id="main-col">




        <aside id="sidebar" style=" width:50%; height:50%; top: 50%; left: 50%; margin-bottom:5%; margin-right: -35%; transform: translate(-60%, -1%);">
          <div class="dark">

          <h3>LOGIN</h3>
        <form class="quote" action="login.php" method="post">
          <div>
            <label>Username</label><br>
            <input type="text"  name="username"placeholder="enter your username" >
          </div>

          <div>
            <label>Password</label><br>
          <input type="password" name="password" placeholder="enter password">
          </div>


            <button class="button1" type="submit" name="login">Login</button>

        </form>
         </dark>
        </aside>

      </div>
    </section>

    <footer>
      <h5>abdulandit@gmail.com,  &copy; Copyright 2020</h5>
    </footer>
  </body>
</html>
