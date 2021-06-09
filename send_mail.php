<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Answer </title>
    </head>
    <body>
        <form action="" method="GET">
              <!--Link file is connected-->
        <?php
            readfile('links.html');
            ?>
        <!--navigation bar files-->
       
            <div class="w3-row w3-section" style="margin-top: 10%; padding-top: 10%;">
                <?php
                if(isset($_GET['b']))
                {
                 

                
                $id=$_GET['id'];
                $name=$_GET['name'];
                $email=$_GET['email'];
               
                $msg=$_GET['msg'];
               
                $db_host='fdb22.awardspace.net'; //Should contain the "Database Host" value
                $db_name='3161813_career'; //Should contain the "Database Name" value
                $db_user='3161813_career'; //Should contain the "Database User" value
                $db_pass='Rama1234'; //Should contain the "Database Password" value

                $con=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
                if(!$con)
                {
                        echo mysqli_connect_error();
                  }      
                else
                {
                
               
                //require 'mail1.php';
                require 'mail2.php';
                
                //send_mail($email,$msg,$name);
                send_mail1($email,$msg,$name);
                
                $sql="update query set state=1 where id='$id'";

                mysqli_query($con,$sql);
                
                ?>
               
                <?php
                
                
                }
                mysqli_close($con);
               

                }                 ?>
                
               
          <center>
           <h2>&nbsp;&nbsp;&nbsp;&nbsp;Replay to User <br> <div id="element"></div></h2>
           
         
         </center>
            <input type="hidden" name="name" value="<?php echo $_GET['name']; ?>" >
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" >
            <div class="w3-row w3-section">
                <div class="w3-col" style="width:50px; padding-left: 35%;"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
                <div class="w3-rest"style="width: 31%;padding-left: 3%;">
                    <input class="w3-input w3-border" name="email" type="text" required pattern=".+@gmail.com" placeholder="Email" value="<?php echo $_GET['email']; ?>" >
                </div>
            </div>
           
             <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px; padding-left: 35%;"><i class="w3-xxlarge fa fa-pencil"></i></div>
                    <div class="w3-rest" style="width: 31%;padding-left: 3%;">
                        <textarea name="msg" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
             <input type="hidden" name="rate" id="rate" value="" placeholder="">
            <button name="b" class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding" style="width: 28%;margin-left: 38%; padding-left:35%; ">Send</button>
            
            
        </body>
    </html>