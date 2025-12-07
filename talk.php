<?php
include("config.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
      $message=$_POST["message"];
      $error =""; 
      if(!empty($message)){
            $stmt=$conn->prepare("INSERT INTO AnonymousTable(name) VALUES(?)");
            $stmt->bind_param("s",$message);
            $stmt->execute();
      }else{
            $error="insert somthing ";
      }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Nuel.Anonymous</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    
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
   height:438px;
             
             margin-top:158px;
    box-shadow:10px 10px 35px  rgba(0,0,0.17);
  }
        .form{
            margin:8px;
            padding:34px;
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
       left:29px;
  }
  .btn:hover{
    padding:29px;
    background-color:#ddd;
  }
        h5{
          text-align:center; 
           font-size:29px; 
            font-family:Monospace;
            letter-spacing:-2px;

        }
.hh{
    color:#970747;
    background-color:#970747 ;
}
.err{
    
    text-align:center; 
           font-size:12px; 
            font-family:Monospace;
            letter-spacing:-2px;

}
        </style>
        <div class="formwrap">
        <form class="form" method="POST" ac >
            <h5>Chat Anonymously with Nuel</h5>
            <h6 class="err"><?php echo $error ; ?></h6>
            <input type="text" name="message"  id="input" placeholder="Send message here...."class="input " >
            <br><br>
            <button class="btn" id="btn">Send Anonymous </button>
        
            <br><br>
        </form>
        </div>
    <a href="thread.php" class="hh">hhh</a>
            <script>
            document.getElementById("btn").addEventListener("click",()=>{
              let in=  document.getElementById("input");
                in.tectContent="";
            })
            
            <script>
</body>
</html>
   
