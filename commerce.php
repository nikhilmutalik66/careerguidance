
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>commerce</title>
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
            
        ?>
    </div>
    
    <br>
    <!--Main Contents-->
    <div id="a" style=" margin-top:5%; height: 100%; text-align: justify; margin-left: 22%; margin-right: 21%;">
     <br>
     <br>   
    <!--Title Of Course-->
        <center>
            <h1 > <b> Commerce  </b> </h1>
        </center>
        <div class="w3-border-bottom"></div>
    <!--End Title-->

    <!--Deatails-->
    <h3 style="color: rgb(44, 44, 46); " > <b> Details about course : </b> </h3>
    
    <p style="font-size: 15spx;"> 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        Top courses to do after 12th commerce in 2019 (List)-
        Details of some good courses to do after 12th commerce stream

        <br><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </p>
    <!--Deatails End-->
    <br>
    <!--Eligibility-->
        <h3 style="color: rgb(44, 44, 46)" id="e"> <b> Eligibility : </b></h3>
        <p  style="font-size: 15px;">
         he basic eligibility criteria is class XII
                 </p>
     <!--Eligibility End-->
    <br>
    <!--Top Colleges-->
    <h3 style="color: rgb(44, 44, 46)" id="t"><b> Top course: </b></h3>

    <ul>
        <li>
         <p >
         1 B.Com.
        </p>
    </li>
    <li>
        <p >
            2 Law
        </p>
    </li>
    <li>
      <p >
3 C.A. (Chartered Accountancy)
      </p>
    </li>
    <li>
      <p>
4 B.B.A.
      </p>
    </li>
    <li>
      <p>
5 Bachelor of Economics
      </p>
    </li>
    <li>
      <p>
6 C.S. (Company Secretary) course
      </p>
    </li>
    <li>
      <p>
        7 Hospitality Diploma courses
      </p>
    </li>
    <li>
      <p>
        8 Bachelor of Statistics, etc,.
      </p>
    </li>

    </ul>
    <!--Top Colleges end-->

    <br>

    <!--Job Profiles 
    <h3 style="color: rgb(44, 44, 46)" id="j"> <b> Job Profiles:</b></h3>

    <ul>
      <li>
        <p >
          Aeronautical Engineers as the name suggest, specialize in creation and maintenance of aircraft and aircraft related technologies for improved functioning of aviation and defence industry.
        </p>
      </li>

    </ul>
    Job Profiles End-->
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