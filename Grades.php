


<!DOCTYPE html>
<?php session_start();  ?>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Navbar</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">


    </head>
    <body>
        <header>
            <p class="logo" ><img src="diamond.png" alt="logo"></p>
            <nav>
                <ul class="nav__links">
                    <li><a class="cta" href="Grades.php">Grades</a></li>
                    <li><a href="NewsandEvents.html">News and Events</a></li>
                    <li><a href="Account.html">Account</a></li>
                    <li><a href="index.php">Logout</a></li>
                    <li><a href="Contact.html">Contact</a></li>

                </ul>
            </nav>
            
            <p class="menu cta">Menu</p>
        </header>

        <div class="overlay">
            <a class="close">&times;</a>
            <div class="overlay__content">

                    <li><a href="#">Grades</a></li>
                    <li><a href="#">News and Events</a></li>
                    <li><a href="#">Account</a></li>
                    <li><a href="#">Logout</a></li>
                    <li><a href="#">Contact</a></li>
            </div>
        </div>
        <script type="text/javascript" src="mobile.js"></script>
        <div class = "login-box">
            <div class="col-md-6 login-right">
        <form action="" method= "post">
            <div class="firstname">
                <label>First name</label>
                <input  type="text" name="first" class="form-control" required>
            </div>
            <div class="lastname">
                <label>Last name</label>
                <input  type="text" name="second" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary" name = "submit"> Search </button>
        </form>


        <?php

        error_reporting(E_ERROR | E_PARSE);

        if(isset($_POST['submit'])) {        //THIS OPERATION CHECKS IF THE BUTTON HAS BEEN PUSHED


        $connection = new mysqli("localhost", "root", "", "searchdetails");             //CONNECTING TO THE DATABASE
        $first = $_POST['first'];  //TAKING INPUT FROM THE SEARCH BOXES
        $second = $_POST['second'];  //TAKING INPUT FROM THE SEARCH BOXES

        $query = $connection->query("select coolpoints from searchtable where name ='" . $first . "'AND lastname='" . $second . "'"); //THIS IS THE QUERY FOR TAKING THE COOLPOINTS FROM THE DATABASE


        $emptycheck = 1; // CHECK IF THE INPUT FIELDS ARE FULL
        $array = Array();
        while($result = $query->fetch_assoc()){   //THIS LOOP TAKES EACH RESULT IN AN ARRAY
            $array[] = $result['coolpoints'];  //TAKES THE COLUMN WITH THE "COOLPOINTS"IN THE ARRAY
        }

        $query -> close(); //CLOSE THE DATABASE CONNECTION


        }
        ?>

<p><?php if (empty($array) && $emptycheck == 1) {    // CHECK WHETHER THERE IS DATA FOR THIS PERSON IN THE DATABASE
        echo "There is no data for this student ";
    }
    if (!empty($array) && $emptycheck == 1){   // CHECK WHETHER THERE IS DATA FOR THIS PERSON IN THE DATABASE
        echo "Your points are " . $array[0];
    }?></p>
            </div>
        </div>



    </body>
</html>