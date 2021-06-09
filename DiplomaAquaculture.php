
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    <div id="a" style=" margin-top:0%; height: 100%; text-align: justify; margin-left: 22%; margin-right: 21%;">
     <br>
     <br> 
     <br><br><br><br>  
    <!--Title Of Course-->
        <center>
            <h1 > <b> Dimploma in Aquaculture </b> </h1>
        </center>
        <div class="w3-border-bottom"></div>
    <!--End Title-->

    <!--Deatails-->
    <h3 style="color: rgb(44, 44, 46); " > <b> Details about course : </b> </h3>
    
    <p style="font-size: 15spx;"> 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        Aquaculture deals with the science of Aquatic environment and organisms. Diploma in Aquaculture aims at
        acquainting students with the science of breeding and rearing of aquatic animals and plants,
        the underwater environment and its enclosures.
        Aqua science is a blooming field which opens up a lot of career options for candidates in the future.

        <br><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        It brings to fore the science of aqua farming or aquaculture primarily viewed as an occupation for
        catching fishes, providing them food and building a pollution free environment for saving their lives.
        It includes the process of freshwater and saltwater breeding under proper conditions.
        Diploma in Aquaculture course offers self-employment opportunities as it is a rich source of cheap
        proteins used to combat malnutrition problems in the country.

    </p>
    <!--Deatails End-->

    <br>

    <!--Eligibility-->
        <h3 style="color: rgb(44, 44, 46)" id="t"> <b> Eligibility : </b></h3>
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
    <h3 style="color: rgb(44, 44, 46)" id=""><b> Top Colleges: </b></h3>

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
          Regional Manager: 9-12 lacs
        </p>
      </li>
      <li>
        <p >
          Area Sales Manager: 5-6 lacs
        </p>
      </li>
      <li>
        <p >
          Credit Manager: 4-9 lacs
        </p>
      </li>
      <li>
        <p >
          Research Assistant:2-4 lacs
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