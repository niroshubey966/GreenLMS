<DOCTYPE html>
<html>
<head>
   <link href="login.css" type="text/css" rel="stylesheet" />
    <style type="text/css">
        
                   body{
            background-image: url(lmsbackground.jpg);
            background-size: cover;
            
        }
        
        .logform{
            width: auto;
            height: auto;
            background-color: darkcyan;
            opacity: 0.8;
            margin-top: 150px;
            /*margin-right:  400px;*/
            margin-bottom: 150px;
           /* margin-left:400px;*/
            padding-top:10px;
            padding-right: 50px;
            padding-bottom: 10px;
            padding-left: 50px;
            border-radius: 20px;
            color: black;  
            font-weight: bolder;
            box-shadow: inset -8px -8px rgba(0,0,0,.5);
        }
        
        .logform input[type="text"]{
            width: 450px;
            padding-left: 150px;
            height:30px;
            border:1px;
            border-radius:5px;
            -webkit-border-radius:5px;
            -o-border-radius:5px;
            -moz-border-radius:5px;
        }
        
        .logform input[type="password"]{
            width:450px;
            padding-left: 150px;
            height:30px;
            border:1px;
            border-radius:5px;
            -webkit-border-radius:5px;
            -o-border-radius:5px;
            -moz-border-radius:5px;
        }
        
        .logform input[type="submit"]{
            width: 450px;
            height:30px;
            border:1px;
            font-size: 18px;
            background-color: lightblue;
            font-weight:700;
            -webkit-transition-duration: 0.4s; 
    transition-duration: 0.4s;
        }
        
        .logform input[type="submit"]:active{
             background-color: red;
    color: grey;
}
::-webkit-input-placeholder {
   text-align: left;
} </style>
</head>
<body onload="choosePic(); document.getElementById('id01').style.display='block';">
<div class="logform">
<?php
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if(!empty($username) && !empty($password)){
     $query ="SELECT * FROM `login` WHERE `username`='$username' AND password='$password'";
        $query_run=mysqli_query($conn,$query);
     if($query_run){
     $query_num_rows=mysqli_num_rows($query_run);
      if($query_num_rows==0){
          echo '<script>alert("Invalid username/password combination.");</script>';
      }else if($query_num_rows==1){
          echo $username;
          $_SESSION['username']=$username;
          header('Location: home.php');
     }
     }
        
    }else{
        echo '<script>alert("You must supply username and password.");</script>';
    }
}

?>
<form class="center" method="post" action="<?php echo "$current_file"; ?>">
    <img src="useraccount.png" alt="User_Account" width="150px" height="150px" >
    <font size=36 align=center color="white"></font>
    <h3>Welcome to the <br/>KNMT Green Univerity.</h3>
    <input type="text" name="username" class="mobile" placeholder="Please enter your username..">
<br/><br/>
<input type="password" name="password" class="mobile" placeholder="Please enter your password..">
    <br/><br/>
<input type="submit" class="mobile" value="Login">
    <br/><br/>
    <a class="" href="https://en.wikipedia.org/wiki/KNMT">forgot password..</a>
    
</form>


<div class="container">


  <div id="id01" class="modal">
    <div class="modal-content card-4 animate-zoom" style="max-width:600px">

      <div class="center">Type the caracters you see in the picture below.<br>
        <img src="" alt="Avatar" style="width:30%" id="myPicture" class="margin-top">

        <script src="login.js"></script>

      </div>
  
      <form class="container">
        <div class="section">
          <label><b>Letters are case sensitive.</b></label>
          <input class="input border margin-bottom" type="text" id="text" placeholder="Please provide your answer" name="usrname" required>


        </div>
      </form>

      <div class="container border-top padding-16 light-grey">
        <button type="button" class="button red">Back to Home</button>
          <button class="button red" onclick="test();">continue</button>
        <button  type="button" class="button red right" onclick="choosePic();">Refresh</button>
      </div>

    </div>
  </div>
</div>
            

</div>
</body>
</html>