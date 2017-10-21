<!DOCTYPE html>
<html lang=en>
    <head>
        <meta charset="UTF-8">
        <title>
            Yuting's Website
        </title>
        <script type="text/javascript" src="script.js"></script>
        <?php 
            if(!session_id()) session_start();
            include("index.php");
            $userName = $_SESSION['userName'];
            $_SESSION['link'] = 0;
        ?>
        <style><?php include 'styles.css'; ?></style>
    </head>
    <body>
        <?php
            include "navbar.php";
        ?>
        <div class="content">
            <div class="post">
                <h2>Hey There</h2>
                <h4>
                    <?php 
                    if($userName != "Login"){
                        echo "Welcome, ";
                        echo $userName;
                        echo ". What's up?";
                    }
                    else{
                        echo "Please log in";
                    }
                    ?> 
                </h4>
            </div>
        </div>
    </body>
</html>
