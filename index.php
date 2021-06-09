<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Careerguidance</title>
    <style>
    .a * {
        margin-top: 10%;
        padding-top: 5%;
    }
    </style>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    * {
        box-sizing: border-box;
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    /* Float four columns side by side */
    .column {
        float: left;
        width: 25%;
        padding: 0 5px;
    }

    .row {
        margin: 0 -5px;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Responsive columns */
    @media screen and (max-width: 600px) {
        .column {
            width: 100%;
            display: block;
            margin-bottom: 10px;
        }
    }

    /* Style the counter cards */
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        padding: 16px;
        text-align: center;
        background-color: #444;
        color: white;
    }

    .fa {
        font-size: 100px;
    }
    </style>
</head>

<body style="width: 100%; background-color: ;">


    <!-- Link file is connected-->
    <?php
        readfile('links.html');
        ?>
    <!--navigation bar files-->
    <?php
        readfile('navbar.html');
        ?>
    <!--Left and right bar files-->

    <?php
        
        $db_host='fdb22.awardspace.net'; //Should contain the "Database Host" value
        $db_name='3161813_career'; //Should contain the "Database Name" value
        $db_user='3161813_career'; //Should contain the "Database User" value
        $db_pass='Rama1234'; //Should contain the "Database Password" value
        $conn=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT visits FROM counter WHERE id = 1";
        $result1 = $conn->query($sql);
        $visits=0;
        if ($result1->num_rows > 0) {
        while($row = $result1->fetch_assoc()) {
        $visits = $row["visits"];
        }
        } else {
        echo "no results1";
        }
       
        $sql2 = "UPDATE counter SET visits = $visits+1 WHERE id = 1";
        $conn->query($sql2);

        $sql3 = "SELECT visits FROM counter WHERE id = 1";
        $result = $conn->query($sql3);
        $visits=0;
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        $visits = $row["visits"];
        }
        } else {
        echo "no results";
        }
      
        $conn->close();
        
        ?>
    <?php
            readfile('side_left.html');
           // readfile('side_right.html');
        ?>
    </div>

    <div>
        <br><br><br><br><br><br><br>
    
      <!--  <marquee direction = "right" style="margin-left: 20%; margin-right: 10%; color:black;" > -->
             
           
             <marquee direction = "left" style="margin-left: 20%; margin-right: 15%; color:black;" >
              <p style="color:#ff6633; font-size:20px;"><b> If You Can Dream It You Can Do It </b></p<p style="font-size:15px; color:grey;">-- Walt Disney</p>
             </marquee>
      
        <div style="border: 2px solid black; margin-left: 20%; margin-right: 10%;">
            <img src="images/career.jpg" alt="">
            </img>
        </div>
        <br>
    </div>
   

    <center>
        
        <!-- <marquee direction = "right" style="margin-left: 20%; margin-right: 15%; color:black;" >
              <p style="color:red; font-size:20px;"> Your Visitor Number:  <?php //echo $visits; ?> </p>
             </marquee> -->

        <br>
        <!--
        <div style="margin-left: 20%; margin-right: 10%; border:4px solid grey; background-color:white;">

            <br>
            <p id='' style="font-size:30px; color:grey; "> <b> If You Can Dream It
                    <!-- <p style="font-size:30px; color:grey;"> You Can Do It </b></p>
            <p style="font-size:15px; color:grey;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <b> -- Walt Disney</b></p>
        </div> -->
        <br>

<div class="row">
  <div class="column" style="margin-left:7%;">
    <div class="card">
      <p><i class="fa fa-user"></i></p>
      <h1><span class="count"><?php echo $visits; ?></span></h1>
      <p>Visitors</p>
    </div>
  </div>
	<div class="column" style="margin-left:7%;">
    <div class="card">
      <p><i class="fa fa-star"></i></p>
      <h1><span class="count">4.5</span></h1>
      <p>Average User Rating</p>
    </div>
  </div>
  <div class="column" style="margin-left:7%;">
    <div class="card">
      <p><i class="fa fa-book"></i></p>
      <h1><span class="count">100</span></h1>
      <p>UseFull Contents in Our Site</p>
    </div>
  </div>


  <script type="text/javascript" >
			$('.count').each(function () {
		$(this).prop('Counter',0).animate({
		Counter: $(this).text()
		}, {
		duration: 5000,
		easing: 'linear',
		step: function (now) {
		$(this).text(Math.ceil(now));
		}
		});
		});
		</script>

    </center>

    <br><br>
    <div id="m" style="margin-right:15%; background-color:grey;">
        <?php
            readfile('footer.html');
        ?>
    </div>

    <!--
        <center>
        <div class="w3-card-4 w3-gery" style="width: 25%; height: 25%; background-color: red ">
            <h3>Visitors</h3>
            
          
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