<?php
include("config.php");
?>


<!DOCTYPE html>
<html>
<head>
  <title>Nuel.Anonymous</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
  <style>
    body {
      margin: 0;
      padding:19px;
      height: 100vh;
      
      background: linear-gradient(135deg, #000, #970747,blue );
      background-size: 400% 400%;
      animation: gradientAnimation 6s ease infinite;
      
      color:#fff;
    
    }
.menu{
  font-size:23px;
  font-weight:300;
  text-align:center;
}
  .nav{
    
    display:flex;
    justify-content:center;
    background-image:linear-gradient(135deg,#970747,blue );
      background-size: 400% 400%;
     
    
    
  border-radius:45px;
   height:34px;
    box-shadow:10px 10px 35px  rgba(0,0,0.17);
  }
    @keyframes gradientAnimation {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }
  .main{
 
    padding:20px;
    
  }
  .intro{
    font-weight:400;
    font-size:50px;
    margin-top:134px;
 font-family:Monospace;
    letter-spacing:-8px;
  }
    
    .introSub{
    font-weight:500;
    font-size:32px;
   
 font-family:Monospace;
    letter-spacing:-2px;
     position:relative;
      bottom:49px;
  }
  .btn{
    padding:18px;
    font-size:20px;
    border:1px solid #ddd;
    border-radius:30px;
    position:relative;
    bottom:34px;
  }
  .btn:hover{
    padding:19px;
    background-color:#ddd;
  }
  </style>
</head>
<body>
  <nav class="nav">
    <div>
      <h3 class="menu"></h3>
    </div>
    
  </nav>
  
  <section class="main">
    <h4 class="intro">
      
      Got something on your mind ?
    </h4>
    <h5 class="introSub">If yes 
      Send in Anonymous message 
    </h5>
    <form action="talk.php" method="POST">
    
    <button class="btn">Send Anonymously</button>
    </form>
  </section>
</body>
</html>
