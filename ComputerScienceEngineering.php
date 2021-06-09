
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Computer Science Engineering</title>
</head>
<body>
    
    <!--Link file is connected-->
    <?php
        readfile('links.html');
    ?>

    <!--navigation bar files-->
    <?php
        readfile('navbar.html');
    ?>

    <!--Left and right bar files-->
    <div id="sidenav">

        <?php
            readfile('side_left.html');
            readfile('side_right.html');
        ?>
    </div>
    
    <br>
    <!--Main Contents-->
    <div id="a" style=" margin-top:5%; height: 100%; text-align: justify; margin-left: 22%; margin-right: 21%;">
     <br>
     <br>   
    <!--Title Of Course-->
        <center>
            <h1 > <b>Computer Science Engineering </b> </h1>
        </center>
        <div class="w3-border-bottom"></div>
    <!--End Title-->

    <!--Deatails-->
    <h3 style="color: rgb(44, 44, 46); " > <b> Details about course : </b> </h3>
    
    <p style="font-size: 15spx;"> 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

       One of the most sought after courses amongst engineering students, Computer Science Engineering (CSE) is an academic programme which integrates the field of computer Engineering and Computer Science. The programme, which lays emphasis on the basics of computer programming and networking, comprises a plethora of topics. The said topics are related to computation, algorithms, programming languages, program design, computer software, computer hardware etc.

        <br><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


    </p>
    <!--Deatails End-->

    <br>

    <!--Eligibility-->
        <h3 style="color: rgb(44, 44, 46)" id="e"> <b> Eligibility : </b></h3>
        <p  style="font-size: 15px;">
       </p>
        <ul>
            <li>
                <p>
                he basic eligibility criteria for Computer Science Engineering is minimum 70-75% marks in aggregate in PCM in class XII. 
                </p>
            </li>
        </ul>

    <!--Eligibility End-->
    <br>
    <!--Top Colleges-->
    <h3 style="color: rgb(44, 44, 46)" id="t"><b> Top Colleges: </b></h3>

    <ul>
        <li>
         <p >
         Thiagarajar College, Tamil Nadu
        </p>
    </li>
    <li>
        <p >
            The Faculty of Veterinary Science and Animal Husbandry, Jharkhand
        </p>
    </li>
    <li>
      <p >
        Bisra Agricultural University, Jharkhand
      </p>
    </li>
    <li>
      <p >
        Indira Gandhi National Open University – IGNOU, New Delhi
      </p>
    </li>

    </ul>
    <!--Top Colleges end-->

    <br>

    <!--Job Profiles -->
    <h3 style="color: rgb(44, 44, 46)" id="j"> <b> Job Profiles:</b></h3>

    <ul>
      <li>
        <p >
          Computer science Engineers as the name suggest, Developer, System analyst, Research Analyst.
        </p>
      </li>

    </ul>
    <!--Job Profiles End-->
    <br>
    <br>

</div>

   

    <!--Footer-->
    <div id="m" style="margin-right:15%;">
        <?php
            readfile('footer.html');
        ?>
    </div>

    <!--Footer Ends-->
</body>


</html>