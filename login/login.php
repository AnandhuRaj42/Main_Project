<?php
if(isset($_REQUEST['id']))
{
if($_REQUEST['id']==1)
$message="user not found";
else if($_REQUEST['id']==2)
$message="invalid email or password";
}
else
$message="";

?>

<html>
<head>
<title>campus bridge</title>
<link rel="stylesheet" href="style.css">
</head>
 <style type="text/css">
           
html {
  height: 100%;
}
  body {
  margin:0;
  padding:0;
  color:black;
  font-family: sans-serif;
  background:linear-gradient(#6699ff, #33cccc);
}

.login-box {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 30%;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: linear-gradient(to bottom, #ccffcc 0%, #ffffff 100%);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}

.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: black;
  text-align: center;

}

.login-box .user-box {
  position: relative;

}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: black;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid black;
  outline: none;
  background: transparent;
}
.login-box .user-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: black;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: black;
  font-size: 12px;
}

.login-box form a {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: black;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  letter-spacing: 4px
}

.login-box a:hover {
  background: #03e9f4;
  color: black;
  border-radius: 5px;
  box-shadow: 0 0 5px #03e9f4,
              0 0 25px #03e9f4,
              0 0 50px #03e9f4,
              0 0 100px #03e9f4;
}

.login-box a span {
  position: absolute;
  display: block;
}

.login-box a span:nth-child(1) {
  top: 0;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #03e9f4);
  animation: btn-anim1 1s linear infinite;
}

@keyframes btn-anim1 {
  0% {
    left: -100%;
  }
  50%,100% {
    left: 100%;
  }
}

.login-box a span:nth-child(2) {
  top: -100%;
  right: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(180deg, transparent, #03e9f4);
  animation: btn-anim2 1s linear infinite;
  animation-delay: .25s
}

@keyframes btn-anim2 {
  0% {
    top: -100%;
  }
  50%,100% {
    top: 100%;
  }
}

.login-box a span:nth-child(3) {
  bottom: 0;
  right: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(270deg, transparent, #03e9f4);
  animation: btn-anim3 1s linear infinite;
  animation-delay: .5s
}

@keyframes btn-anim3 {
  0% {
    right: -100%;
  }
  50%,100% {
    right: 100%;
  }
}

.login-box a span:nth-child(4) {

  bottom: -100%;
  left: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(360deg, transparent, #03e9f4);
  animation: btn-anim4 1s linear infinite;
  animation-delay: .75s

}

@keyframes btn-anim4 {
  0% {
    bottom: -100%;
  }
  50%,100% {
    bottom: 100%;
  }
}

input[type="submit"] {
position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: white;
  background-color:black;
  font-size: 13px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  letter-spacing: 4px
}

/*.login-box input[type="submit"]:hover {
  background: #6d95df;
  color: black;
  border-radius: 5px;
  box-shadow: 0 0 5px #03e9f4,
              0 0 25px #03e9f4,
              0 0 50px #03e9f4,
              0 0 100px #03e9f4;
}*/

h4 {
  color: red;
  text-align:center;
}
.hd
{
  text-align: center;
  margin-top: 50px;
  font-size: 70px;
  font-family: fantasy;
}



</style>
<body>
  <div class=hd>Stock and Maintenance</div>
<div class="login-box">
  <h2 style="color: blue; font-family: cursive; font-size: 30px;">Login</h2>
 
  <form action="login_check.php" method="post">
    <h4><?php echo $message; ?></h4>
    <div class="user-box">
      <input type="email" name="email" required="" autocomplete="off">
      <label>Email</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" required="">
      <label>Password</label>
    </div>
    <center><input type="submit" value="login" name="login"></center>
  </form>


</div>
</body>
</html>

  

