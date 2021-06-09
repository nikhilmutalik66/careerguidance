
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Designing </title>
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
            <h1 > <b> Web Designing </b> </h1>
        </center>
        <div class="w3-border-bottom"></div>
    <!--End Title-->

    <!--Deatails-->
    <h3 style="color: rgb(44, 44, 46); " > <b> Details about course : </b> </h3>
    
    <p style="font-size: 15spx;"> 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

       Certification in Web Designing is a 6 months certificate level course.
This course involves the teaching of Adobe Photoshop to design website layout, which will be helpful in creating suitable images and optimize them for efficient download. This course also provides a platform to learn many programming languages and many technologies that are used for web designing.


        <br><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

         Certification in Web Designing course is suitable for those who wish to learn how to create graphics, animations and web pages. Students learn how to implement these elements to make them accessible through the internet. Major web development software applications are covered in this program. After the completion of this certification, the candidate can be a web 
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
          • Freelance web designer
        </p>
      </li>
      <li>
        <p >
          • Graphic designer
        </p>
      </li>
      <li>
        <p >
         •  Graphic designer
        </p>
      </li>
      <li>
        <p >
          • PHP & CSS developer
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