<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <style>
        .a
        * {
        margin-top: 10%;
        padding-top: 5%;
        }
        
        </style>
    </head>
    <body style="width: 100%;">
        
        
        Link file is connected-->
        <?php
        readfile('links.html');
        ?>
        <!--navigation bar files-->
        <?php
        readfile('navbar.html');
        ?>
            
            <center>
                <br><br><br><br><br><br>
                <h1>IF YOU CAN DREAM IT</h1><br>
                <h1>YOU CAN DO IT</h1><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <h5>--Walt Disney</h5>
                
            </center>
            








        
        <?php
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "career";
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $sql = "UPDATE counter SET visits = visits+1 WHERE id = 1";
        $conn->query($sql);

        $sql = "SELECT visits FROM counter WHERE id = 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        $visits = $row["visits"];
        }
        } else {
        echo "no results";
        }
        
        $conn->close();
        
        ?>
        <!--
        <center>
        <div class="w3-card-4 w3-gery" style="width: 25%; height: 25%; background-color: red ">
            <h3>Visitors</h3>
            <?php
            echo "<br> <h1> $visits <h1>";
            ?>
        </div>
        </center>
        <div class="w3-card-4 w3-gery" style="background-color:  gray; color: rgb(0, 0, 0);">
           <center>
        <h4> <b> About </b> </h4>
        While using this site, you agree to have read and accepted our terms of use, <br> cookie and privacy policy.
        Copyright 2019 by Refsnes Data. All Rights Reserved.

        <br>
        <b>
            <a> Provided By : careerguidance.site </a>
            <br>
            Created By : NS Creations
        </b>
        <br>
    </center>-->
        </div>
    </div>
</body>
</html>