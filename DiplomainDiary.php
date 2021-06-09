
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Diploma in Diary </title>
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
            <h1 > <b> Diploma in Diary Technology </b> </h1>
        </center>
        <div class="w3-border-bottom"></div>
    <!--End Title-->

    <!--Deatails-->
    <h3 style="color: rgb(44, 44, 46); " > <b> Details about course : </b> </h3>
    
    <p style="font-size: 15spx;"> 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

       The Diploma in Dairy Technology is envisaged to create competent technician level human resource for the dairy industry. It intends to inculcate vocational and entrepreneurial skills to widen employment opportunities, particularly among rural youth and the disadvantaged section of the society as well as for self-employment. 

        <br><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

         It aims to address the work force requirement of the dairy and food processing industries and focus on upgrading the knowledge and skill of existing workers. The programme caters to educational requirements of the dairy farmers, milk processors, skilled workers/ technicians in dairy industry, personnel working in the State Dairy federations/ dairy departments of states and central Government/ educational institutions, entrepreneurs and NGO functionaries/extension trainers/ rural educators. The proposed programme is being developed with the support from the Ministry of Food Processing Industries.
    </p>
    <!--Deatails End-->

    <br>

    <!--Eligibility-->
        <h3 style="color: rgb(44, 44, 46)" id="e"> <b> Eligibility : </b></h3>
        <p  style="font-size: 15px;">
            The eligibility criteria for admission to Diploma in Aquaculture are mentioned below:
        </p>
        <ul>
            <li>
                <p>
                Applicants must qualify the class 10+2 in any stream of either Arts, Science or Commerce with a minimum
                aggregate of 45% and above from a recognized board..
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
          • Chemical Engineer   
        </p>
      </li>
      <li>
        <p >
          • Assistant Chemical Engineer
        </p>
      </li>
      <li>
        <p >
         •  Process Control Engineer
        </p>
      </li>
      <li>
        <p >
          • Plant Design Engineer
        </p>
      </li>
      <li>
        <p >
          • Plant Supervisor
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