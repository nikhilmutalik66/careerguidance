
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aeronotical enginnering</title>
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
            <h1 > <b> Aeronotical enginnering </b> </h1>
        </center>
        <div class="w3-border-bottom"></div>
    <!--End Title-->

    <!--Deatails-->
    <h3 style="color: rgb(44, 44, 46); " > <b> Details about course : </b> </h3>
    
    <p style="font-size: 15spx;"> 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

       Aeronautical Engineering is a well-known branch of engineering that attracts students with interest in airplanes and their mechanism. The primary job of an Aeronautical Engineer is to devise aircraft and propulsion systems, but with time, the engineer is given many more responsibilities to carry out. Recruitment opportunities are available in defense services and aviation industry.

        <br><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


    </p>
    <!--Deatails End-->

    <br>

    <!--Eligibility-->
        <h3 style="color: rgb(44, 44, 46)" id="e"> <b> Eligibility : </b></h3>
        <p  style="font-size: 15px;">
        <ul>
            <li>
                <p>
                he basic eligibility criteria for aeronautical engineering is minimum 70-75% marks in aggregate in PCM in class XII.        </p>

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
          Aeronautical Engineers as the name suggest, specialize in creation and maintenance of aircraft and aircraft related technologies for improved functioning of aviation and defence industry.
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