<?php
session_start();
include("config.php");
if(isset($_SESSION["ADMIN"])){
    header("location:Port.php");
    exit;
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST["pass"];
    $stmt=$conn->prepare("SELECT * FROM Admin WHERE name=?");
    $stmt->bind_param("s",$name);
    $stmt->execute();
$stmt->store_result();
    if($stmt->num_rows == 1){
$_SESSION["ADMIN"]=$name; 
        header("location:Port.php");
        $succ=" login success
        ";
    }else{
        $succ="invalid user details"; 
    }
}
?>

<!DOCTYPE html>

<html>
<head>
  <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
  <title>Hello, World!</title>
</head>
<body>
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
.formwrap{
             display:flex;
    justify-content:center;
    background-image:linear-gradient(135deg,#970747,blue );
      background-size: 400% 400%;
      border-radius:45px;
   height:238px;
             
             margin-top:158px;
    box-shadow:10px 10px 35px  rgba(0,0,0.17);
  }
        .input{
            padding:34px;
           border:1px solid #ddd;
            background-color:#ddd;
          border-radius:20px;  
        }
   .btn{
    padding:18px;
    font-size:20px;
    border:1px solid #ddd;
    border-radius:30px;
   position:relative;
       left:52px;
       width:134px;
  }
  .btn:hover{
    padding:29px;
    background-color:#ddd;
  }
  .div{
    background:#343A40;
    display:grid;
    margin:0;
    justify-content:center;
    height:320px;
    width:320px;
    border-radius:12px;
    position:relative;
    left:12px;
   
    top:134px;
  }
  </style>
<br><br>
<nav>

</nav>
<div class="formwrap">
        <form class="form"  method="POST"  >
            
            <h6 class="err"><?php echo $succ ; ?></h6>
            <input type="text" name="pass"  id="input" placeholder="input...."class="input " >
            <br><br>
            <button class="btn" id="btn">SignIn</button>

            <br><br>
        </form>
        </div>
</body>
</html>
