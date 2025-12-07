<?php
session_start();
include("config.php");
if(!isset($_SESSION["ADMIN"])){
    header("location:thread.php");
    exit;
}
$stmt=$conn->prepare("SELECT*FROM AnonymousTable");
$stmt->execute();
$result=$stmt->get_result();

?>


<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

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
           @keyframes gradientAnimation {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }
.mess{
    display:grid;
    margin:0 auto;
    justify-content:center;
    text-align:center;
    width:230px;
     background:#000;
    overflow-y:auto;
    color:#ddd;
    padding:34px;
    margin-top:89px;
    border-radius:20px;
    font-size:24px;
    font-family:Monospace;
    box-shadow:0px 1px 10px rgba(0,0,0.1);
}
.intro{
    height:45px;
    background:yellow;
}

small{
    font-size:13px;
}

    </style>
</head>
<body>


<div class="form">
 <?php if($result->num_rows >0){?>
 <?php while($row=$result ->fetch_assoc()){?>
<div class="mess">
     <small>Sent from Anonymous -> ~Nuel</small>
  <h5>   <?php echo $row["name"];?><h5>
     </div>
     <?php }?>
     <?php } ?>
    </div>
    
</body>