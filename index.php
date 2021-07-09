<?php
session_start();
?>
<html>
    <head>
        <style>
            body{
                background-image: url("image.jpg");
                background-size: cover;
            }
           #box{
                width:200px;
                padding: 50px;
                margin: auto;
                margin-top: 10px;
                background-color: white;
                border-radius: 10px;
             }
        </style>
      
    </head>
    <body>
    <center>
  
    <h1>Card Validation</h1>
    <form method="post">
    <div id="box">
    User Name <input type="text" name="uname" required><br><br>
    Enter your Card Number <input name="cardNumber" type='text'required ></br></br>
    
    <input type="submit" value="Submit" name="submit"/>
    </div>
    <?php 
        if(isset($_POST['submit'])){

            $name= $_POST['uname'];
            $number = $_POST['cardNumber'];
            if(strlen($number) == 16){
                 $_SESSION['uname'] = $name;   
                 $_SESSION['cardNumber'] = $number;
                header("Location:card.php");

                }
                else{
                    echo " <h2 style='color: red;'> This credit card number is invalid. Enter 16 digit number </h2>"; 
               }
                
               
          
        }
                    
    ?>
</form>

    </center>

    </body>
</html>

