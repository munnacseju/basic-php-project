<?php

session_start();


?>









<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width" initial-scale=1>
    <title>Success</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    

    <div class="row text-center" >
        <div class="col-md-12">




            <?php
            if(isset($_SESSION['message']))
            {?>
                <div class="alert alert-success">
                    Congrats!!Your signup is successful.....
                </div>

            <?php }
            ?>

            <div class="mt-5">
                <a class="btn btn-primary" href="index.php">go back</a>

            </div>







        

       

    </div>
    </div>
</div>


    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


    <?php
    unset($_SESSION['message']);
    ?>
</body>
</html>