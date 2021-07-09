
<html>
    <head>
    </head>
        <body>
            <center>
        <?php
            session_start();
            if(isset($_SESSION['uname']) && ($_SESSION['cardNumber'])){
                $name = $_SESSION['uname'];
               echo "<h2>Welcome $name </h2>";
                $num = $_SESSION['cardNumber'];
                if(preg_match("/^([1111]{4})([0-9]{12})$/", $num)){
                    echo "<h2 style='color: green;'> Detected credit card is American Express </h2>";
                }
                elseif(preg_match( "/^([2222]{4})([0-9]{12})$/", $num)){
                    echo "<h2 style='color: green;'> Detected credit card is RuPay   </h2>";
                }
                elseif(preg_match( "/^([3333]{4})([0-9]{12})$/" ,$num)){
                    echo "<h2 style='color: green;'> Detected credit card is Discover Card </h2>"; 
                }
                elseif(preg_match( "/^([4444]{4})([0-9]{12})$/", $num)){
                    echo "<h2 style='color: green;'> Detected credit card is Mastercard  </h2>"; 
                }
                elseif(preg_match( "/^([5555]{4})([0-9]{12})$/", $num)){
                    echo "<h2 style='color: green;'> Detected credit card is Visa Card </h2>"; 
                }    
           
            else{
                echo " <h2 style='color: green;'>  Detected credit card is Other card </h2>"; 
            }
        }
?>

        <?php
            if(isset($_SESSION["cardNumber"])){
                echo"
                <a href='logout.php'>
                    <button>
                    Logout
                    </button>
                </a>
                 ";
            }
        ?>
    </center>
    </body>
</html>