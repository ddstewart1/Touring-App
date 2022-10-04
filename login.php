<?php
    $is_invalid = false;

    if($_SERVER["REQUEST_METHOD"] === "POST" ){
        $mysqli = require __DIR__ . "/database.php";

        $sql = sprintf("Select * From user 
                    Where username = '%s' " , 
                    $mysqli->real_escape_string( $_POST["username"] )) ;
    
        $result = $mysqli->query($sql);

        $user = $result->fetch_assoc();

        if($user){
            if(password_verify($_POST["pswd"] , $user["password_hash"])){
               
                session_start();

                session_regenerate_id();

            $_SESSION["user_id"] =$user["id"];

            header("Location: home.php");
            exit;
            
            }
        }
        $is_invalid = true;
    }

?>
  <?php if($is_invalid): ?>
                <em> Invalid Login </em>
            <?php endif; ?>