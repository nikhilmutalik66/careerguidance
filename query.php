<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>query </title>
    </head>
    <body>
        <form action="query.php" method="GET">
              <!--Link file is connected-->
        <?php
            readfile('links.html');
            ?>
        <!--navigation bar files-->
        <?php
            readfile('navbar.html');
            ?>
            <div class="w3-row w3-section" style="margin-top: 10%; padding-top: 10%;">
                <?php
                if(isset($_GET['b']))
                {
                 

                
                
                $name=$_GET['fname'];
                $email=$_GET['email'];
                $phone=$_GET['phone'];
                $msg=$_GET['msg'];
                $rate=$_GET['rate'];
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
                $sql="INSERT INTO query VALUES (DEFAULT,'$name','$email','$phone','$msg',$rate,0)";
                if(mysqli_query($con,$sql))
                {
                require 'mail1.php';
                //require 'mail2.php';
                
                send_mail($email,$msg,$name);
                //send_mail1($email,$msg,$name);
                
                
                ?>
                <div class="w3-card-4 w3-green w3-display-container">
                    <span onclick="this.parentElement.style.display='none'"
                    class="w3-button w3-large w3-display-topright">&times;</span>
                    <center>
                        <p>success...!</p>
                    <p> the query is  submitted....</p>
                    </center>
                </div>
                <?php
                }
                
                }
                mysqli_close($con);
               

                }                 ?>
                
               
          <center>
           <h2>&nbsp;&nbsp;&nbsp;&nbsp;Give Your Rating To Our Site <br> <div id="element"></div></h2>
           <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
           <script src="dist/emotion-ratings.js"></script>
           <script>
            var emotionsArray = ['angry','disappointed','meh', 'happy', 'inLove'];
            $("#element").emotionsRating({
            emotionSize: 30,
            bgEmotion: 'happy',
            emotions: emotionsArray,
            color: 'red'
            });
           </script>
         
            
        
           
                <h1>&nbsp;&nbsp;&nbsp;&nbsp; Enter Your details and Query</h1>
                <br>
         </center>
                <div class="w3-col" style="width:50px; padding-left: 35%;"><i class="w3-xxlarge fa fa-user"></i></div>
                <div class="w3-rest" style="width: 31%;padding-left: 3%;">
                    <input class="w3-input w3-border" name="fname" type="text" placeholder="First Name">
                </div>
            </div>
            <div class="w3-row w3-section">
                <div class="w3-col" style="width:50px; padding-left: 35%;"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
                <div class="w3-rest"style="width: 31%;padding-left: 3%;">
                    <input class="w3-input w3-border" name="email" type="text" required pattern=".+@gmail.com" placeholder="Email">
                </div>
            </div>
            <div class="w3-row w3-section">
                <div class="w3-col" style="width:50px; padding-left: 35%;"><i class="w3-xxlarge fa fa-phone"></i></div>
                <div class="w3-rest"style="width: 31%;padding-left: 3%;">
                    <input class="w3-input w3-border" name="phone" type="text" maxlength="10" required pattern="[6789]{1}[0-9]{9}" placeholder="Phone">
                </div>
            </div>
            
             <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px; padding-left: 35%;"><i class="w3-xxlarge fa fa-pencil"></i></div>
                    <div class="w3-rest" style="width: 31%;padding-left: 3%;">
                        <textarea placeholder="Your Query" name="msg" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
             <input type="hidden" name="rate" id="rate" value="" placeholder="">
            <button name="b" class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding" style="width: 28%;margin-left: 38%; padding-left:35%; ">Send</button>
            
            
        </body>
    </html>