<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "ravi";

$con = mysqli_connect($server, $username, $password, $database);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <title>container</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: rgba(0, 0, 0, 0.082);
    }

    /* scrollbar css */
    html {
      font-size: 64.5%;
      overflow-x: hidden;
    }

    html::-webkit-scrollbar {
      width: 1.1rem;

    }

    html::-webkit-scrollbar-track {
      background: #222;
    }

    html::-webkit-scrollbar-thumb {
      background-image: linear-gradient(blue, green, red);
      border-radius: 20px;
    }

    /* slider image */

    img {

      height: 50vh;
      background-size: 100% 100%;



    }

    /* saidbar css */
    #ravi {
      border-radius: 20px;
      border: solid 2px #0b69b6;
      background: -webkit-linear-gradient(0deg, transparent 50%, #0b69b6 50%);
      background-size: 1200px 600px;
      transition: 5s;
      margin-top: 50px;
      /* background-color: black; */


    }

    #ravi:hover {

      background-position: 400px 0px;
      background-color: #0b69b6;
      color: white;
      /* transform: scale(1.1); */

    }

    #name {
      text-align: center;
      font-size: 50px;


    }


    h3:hover {

      border: 2px solid green;
      font-size: 20px;
      border-radius: 10px;
    }

    h3:active {
      border: 2px solid blue;


    }

    .box-container .box {
      width: 27rem;
      margin: 5rem 1rem;
      padding-left: 4rem;
      border-left: .2rem solid black;
      position: relative;
    }

    .box i {
      position: absolute;
      top: -1.5rem;
      left: -2.4rem;
      height: 5rem;
      width: 5rem;
      border-radius: 50%;
      line-height: 5rem;
      text-align: center;
      font-size: 2rem;
      color: #fff;
      background: rgb(241, 171, 91);
    }

    /* banner */
    header {

      width: 100%;
      height: 30vh;
      background-image: url("skills.jpg");
      background-size: 100% 100%;
      background-repeat: no-repeat;
      clip-path: polygon(0 0, 100% 0, 100% 60%, 50% 100%, 0 60%);

      /* clip-path:polygon(0 0, 100% 0, 100% 75%, 75% 75%,75% 100% ,50% 75%, 0 75%); */

    }

    .header2 {

      width: 100%;
      height: 30vh;
      background-image: url("cont4.jpg");
      background-size: 100% 100%;
      background-repeat: no-repeat;
      clip-path: polygon(0 0, 100% 0, 100% 60%, 50% 100%, 0 60%);



      /* clip-path: polygon(0 0, 100% 0, 100% 75%, 75% 75%, 75% 100%, 50% 75%, 0 75%); */
    }


    #h:hover {

      color: blue;
    }
  </style>
</head>

<body>
  <!-- nevbar code -->
  <nav class="navbar fixed-top navbar-expand-lg  p-md-3 " style="height: 75px; background-color: rgba(0, 0,0,0.5);">
    <div class="container-fluid ">
      <a class="navbar-brand" href="#"><img src="logo10.jpg" alt="logo" style="width: 50px; height: 60px; border-radius: 60%;">
        <h4><span class="text-light">FOX CODER</span></h4>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto ml-auto my-2">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <h3 class="text-light">Home</h3>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#skil">
              <h3 class="text-light">skills</h3>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <h3 class="text-light">Pricing</h3>
            </a>
          </li>

        </ul>



        <a class="btn btn-primary btn-lg" href="#contect"> contect me

        </a>


      </div>
    </div>
  </nav>
  <!-- 
  carouselExampleCaptions code -->

  <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="image1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1>FOX CODER</h1>
          <p style="font-size:20px ;">Development of dynamic website or web Application.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="image2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1>Fox coder</h1>
          <p style="font-size:20px ;">Development of dynamic website or web Application.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="image3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1>Fox coder</h1>
          <p style="font-size:20px ;">Development of dynamic website or web Application.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <hr>

  <!-- card said bar code -->
  <div class="container-flex">
    <div class="row">
      <!-- first colam -->
      <div class="col-lg-4 col-12">
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;height:400px;border-radius: 25px;">
          <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32">
              <use xlink:href="#bootstrap"></use>
            </svg>
            <span class="fs-4 align-items-center">Information</span>
          </a>
          <hr>
          <div class="nev-img">

            <img src="logo10.jpg" id="profail" alt="" width="200" height="20" class="rounded-circle me-2 ml-4 align-items-center" style="height: 50px; width: 50px;">

          </div>
          <hr>
          <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">

              <a href="https://drive.google.com/file/d/1SJE_WLVA4T243h0MbzdV5JE2w3HX6dQZ/view?usp=sharing" class="nav-link  border text-light" aria-current="page">
                <svg class="bi me-2 " width="16" height="16">
                  <use xlink:href="#home"></use>


                </svg>

                <h1>Resume <span style="margin: 30px;"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                      <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                      <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                    </svg></span></h1>


              </a>
            </li>

            <hr>

            <li>
              <a href="#qali" class="nav-link text-white">
                <svg class="bi me-2" width="16" height="16">
                  <use xlink:href="#table"></use>
                </svg>
                <h1>Qualification</h1>
              </a>
            </li>
            <hr>
            <li>
              <a href="#" class="nav-link text-white">
                <svg class="bi me-2" width="16" height="16">
                  <use xlink:href="#grid"></use>
                </svg>
                <h1>About</h1>
              </a>
            </li>

          </ul>
          <hr>

        </div>


      </div>
      <!-- second colam -->
      <div class="col-lg-7 col-12  ml-4 " id="ravi">

        <h1 id="name" class="my-3">Hi i am ravi</h1>
        <div class="row">
          <!-- first colam -->
          <div class="col-lg-4 col-12">
            <img src="ravi.png" id="profail" alt="" width="150" height="20" class="img-thumbnail me-2 ml-4 align-items-center" style="border-radius: 20px;
               /* border-top: 10px solid rgb(16, 141, 224);  */
               border-bottom: 10px solid rgb(16, 141, 224);
               border-left: 10px solid rgb(16, 141, 224);
               /* border-right: 10px solid rgb(16, 141, 224);
                */

                border-image:linear-gradient( 45deg, blue, white);
                border-image-slice:1 ;
               ">
          </div>
          <div class="col-lg-4 col-12 my-5" style="font-size: 15px;">
            <p style="font-size: 20px;"> Fox coder creating a Develop Responsive Layouts and website and webapplication
              and conect to database Developer name Ravi gaud </p>
          </div>



        </div>

      </div>

    </div>
    <hr>

    <div class="container">


      <div class="row">
        <!-- first colam -->

        <h1 style="text-align: center;"><B><U class="text-success " style="width:10px ;"> <span class="text-primary">Project</span>Gallery</U></B>
        </h1>

        <h4>project tamplate Screenshots </h4>
        <div class="col-lg-4 col-12">

          <div class="box-container">


            <div class="box">

              <span style="font-size: 20px;font-style: oblique;">2021</span>
              <img src="gallery.png" alt="" style="height: 200px; width:200px ;">

            </div>

          </div>

        </div>


        <div class="col-lg-4 col-12">
          <div class="box-container">
            <div class="box">

              <span style="font-size: 20px;font-style: oblique;">2021</span>
              <img src="gallery4.png" alt="" style="height: 200px; width:200px ;">


            </div>

          </div>

        </div>

        <div class="col-lg-4 col-12">
          <div class="box-container">
            <div class="box">

              <span style="font-size: 20px;font-style: oblique;">2021</span>
              <img src="gallery1.png" alt="" style="height: 200px; width:200px ;">
            </div>

          </div>

        </div>

        <div class="row">
          <!-- first colam -->


          <div class="col-lg-4 col-12">

            <div class="box-container">


              <div class="box">

                <span style="font-size: 20px;font-style: oblique;">2021</span>
                <img src="gallery3.png" alt="" style="height: 200px; width:200px ;">

              </div>

            </div>

          </div>


          <div class="col-lg-4 col-12">
            <div class="box-container">
              <div class="box">

                <span style="font-size: 20px;font-style: oblique;">2021</span>
                <img src="gallery2.png" alt="" style="height: 200px; width:200px ;">


              </div>

            </div>

          </div>

          <div class="col-lg-4 col-12">
            <div class="box-container">
              <div class="box">

                <span style="font-size: 20px;font-style: oblique;">2021</span>
                <img src="gallery1.png" alt="" style="height: 200px; width:200px ;">
              </div>

            </div>

          </div>








          <hr>

          <!--Qualification code -->
          <div class="container" id="qali">


            <div class="row">
              <!-- first colam -->

              <h1 style="text-align: center;"><B><U class="text-success " style="width:10px ;"> <span class="text-primary">Qualification</span>S</U></B>
              </h1>

              <div class="col-lg-4 col-12">

                <div class="box-container">
                  <div class="box">
                    <i class="fas fa-graduation-cap"></i>
                    <span style="font-size: 20px;font-style: oblique;">2021</span>
                    <h1>Graduation</h1>
                    <p style="font-size: 25px;"> completed from Mumbai univercity in BSC(it)
                      college name is Anand Vishwa Gurukul college thane

                    </p>


                  </div>

                </div>

              </div>


              <div class="col-lg-4 col-12">
                <div class="box-container">
                  <div class="box">
                    <i class="fas fa-graduation-cap"></i>
                    <span style="font-size: 20px;font-style: oblique;">2018</span>
                    <h1>H.S.C</h1>
                    <p style="font-size: 25px;"> completed from Maharashtra Board
                      college name Gyanodaya Vidya Mandir college thane

                    </p>



                  </div>

                </div>

              </div>

              <div class="col-lg-4 col-12">
                <div class="box-container">
                  <div class="box">
                    <i class="fas fa-graduation-cap"></i>
                    <span style="font-size: 20px;font-style: oblique;">2016</span>
                    <h1>Graduation</h1>
                    <p style="font-size: 25px;"> completed from Maharashtra Board
                      college name chhatrapati Shivaji school college thane


                    </p>


                  </div>

                </div>

              </div>





              <!-- 
skills code -->

              <hr id="skil">


              <header></header>

              <br><br><br>
              <div class="container ">

                <br><br><br>

                <h1 style="text-align: center;"><B><U class="text-success " style="width:10px ;"> <span class="text-primary">SKILL</span>S</U></B>
                </h1>

                <br><br><br><br>
                <div class="row my-4">
                  <!-- first colam -->



                  <div class="col-lg-6 col-12">
                    <h2><b>HTML</b></h2>
                    <div class="progress" style="height: 20px;">
                      <div class="progress-bar progress-bar-striped  progress-bar-animated" role="progressbar" style="width: 70%; " aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                  </div>



                  <div class="col-lg-6 col-12">
                    <h2><b>CSS</b></h2>

                    <div class="progress" style="height: 20px;">
                      <div class="progress-bar progress-bar-striped  progress-bar-animated bg-success" role="progressbar" style="width: 50%; " aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>


                  </div>
                </div>
              </div>
            </div>

            <br><br><br>
            <div class="container ">



              <div class="row">
                <!-- first colam -->


                <div class="col-lg-6 col-12">
                  <h2><b>JavaScript</b></h2>
                  <div class="progress" style="height: 20px;">
                    <div class="progress-bar progress-bar-striped  progress-bar-animated bg-warning" role="progressbar" style="width: 40%; " aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>

                </div>




                <div class="col-lg-6 col-12">
                  <h2><b>Bootstrap</b></h2>

                  <div class="progress" style="height: 20px;">
                    <div class="progress-bar progress-bar-striped  progress-bar-animated bg-dark" role="progressbar" style="width: 90%; " aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>


                </div>
              </div>
            </div>

            <br><br>
            <hr id="contect">
            <div class="container border my-4">



              <header class="header2"></header>
              <div class="row">
                <!-- first colam -->

                <h1 style="text-align: center;"><B><U class="text-success " style="width:10px ;"> <span class="text-primary"> CONTECT </span>ME</U></B>
                </h1>
                <br><br><br> <br><br>
                <div class="col-lg-6 col-12">

                  <h2><i class="fas fa-phone"></i></span> Call Us:</h2>
                  <p style="font-size: 20px;">+91 8169474052</p>

                  <hr>
                  <h2><i class="fas fa-envelope"></i> Mail Us:</h2>
                  <p style="font-size: 20px;">gaudravi16@gmail.com</p>

                  <hr>
                  <h2><i class="fas fa-map-marker-alt"></i> Visit Us:</h2>
                  <p style="font-size: 20px;"> Thane Maharashtra flat no 599</p>

                </div>

                <div class="col-lg-6 col-12 ">
                  <?php

                  if (isset($_POST["submit"])) {
                    $name = $_POST['name'];
                    $email = $_POST['Email'];

                    $message = $_POST['Message'];

                    $sqlq = "INSERT INTO `user` (`name`, `Email`, `Massage`, `datetime`) VALUES ( '$name', '$email', '$message', CURRENT_TIMESTAMP)";

                    if (mysqli_query($con, $sqlq)) {
                      echo "<script> alert('Registed Succesfully!!!!') ;</script>";
                      echo "<script> document.location.href='portfolio.php'; </Script>";
                    }
                  }
                  ?>


                  <form class=" " action="portfolio.php" method="post" style="width: 400px;">
                    <div class="mb-3">
                      <label for="exampleInputname" class="form-label" style="font-size: 20px;">Name</label>
                      <input type="name" style="height: 40px;font-size: 20px;" name="name" required placeholder="Enter your Name" class="form-control form-lg" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label" style="font-size: 20px;">Email address</label>
                      <input type="email" name="Email" style="height: 40px;font-size: 20px;" required class="form-control" placeholder=" Enter your Email" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text"></div>
                    </div>
                    <div class="form-floating">
                      <h2>message</h2>
                      <textarea class="form-control" style="height: 40px;font-size: 20px;" required name="Message" placeholder="Leave a comment here" id="floatingTextarea"></textarea>

                    </div>

                    <br>

                    <button type="submit" name="submit" class="btn btn-primary btn-lg">Submit</button>
                  </form>

                  <br><br><br>

                </div>



              </div>


            </div>

            <hr>
            <!-- footer code -->

            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top footer-lg bg-dark">


              <p class="col-md-4 mb-0 text-active" style="font-size: 20px;color: white;">© 2021 Company, Inc</p>

              <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                  <use xlink:href="#bootstrap"></use>
                </svg>
              </a>

              <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item " style="font-size: 20px;"><a href="#" class="nav-link px-2 text-active" style="color: white;">Home</a></li>
                <li class="nav-item" style="font-size: 20px;"><a href="#" class="nav-link px-2 text-active" style="color: white;">Features</a></li>
                <li class="nav-item" style="font-size: 20px;"><a href="#" class="nav-link px-2 text-active" style="color: white;">Pricing</a></li>
                <li class="nav-item" style="font-size: 20px;"><a href="#" class="nav-link px-2 text-active" style="color: white;">FAQs</a></li>

                <span>
                  <h1 class="text-light"> fox coder</h1>


                </span> <img src="logo10.jpg" alt="logo" style="width: 50px; height: 60px; border-radius: 60%;">

              </ul>
            </footer>



            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

            <!-- Option 2: Separate Popper and Bootstrap JS -->

</body>

</html>