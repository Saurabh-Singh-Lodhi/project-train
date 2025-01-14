<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <title>Hello, world!</title>
  <style>
    /*.carousel-item{
        background: url('first.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
      }*/
      body{
        overflow-x: hidden;
        font-family: 'Gilroy light';
      }
      

    .Appoinment {

      background: url("service 1.jpg");
      background-size: cover;
      background-repeat: no-repeat;
      /* margin-top: 5rem; */
      height: 18rem;  

    }

    .Appoinment .row4 {
      margin-top: 4rem;
      text-align: center;
    }

    .Appoinment .row4 .first2 {
      padding: 2rem;
      font-size: 24px;
      color: green;
      font-weight: 700;
    }

    .Appoinment .row4 .second2 {
      font-size: 32px;
      color: green;
      font-weight: bolder;
    }

    .Appoinment .row4 .btn4 {
      width: 233px;
      margin-top: 1rem;
      margin-right: 0;
      display: inline-block;
      padding: 11px 23px;
      border-radius: 0;
      border: 2px solid rgb(253, 251, 251);
      cursor: pointer;
      font-size: 14px;
      color: green;
      font-weight: bold;
    }

    .Appoinment .row4 .btn4:hover {
      background-color: green;
      border: 2px solid green;
    }

    @media (max-width: 500px) {
      .Appoinment {
        height: 0rem;
      }


      .Appoinment .row4 {
        margin-top: 10px;
      }

      .Appoinment .row4 .first2 {
        font-size: 13px;
        margin-top: 10px;

      }

      .Appoinment .row4 .second2 {
        font-size: 23px;
      }

      .Appoinment .row4 .btn4 {
        width: 225px;
        margin-top: 3rem;

      }
    }

    .badge-notification {
      position: absolute;
      top: -8px;
      left: 6px;
      padding: 3px;
      width: 18px;
    }

    .navbar {
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1000;
    }
   
.inner{
  overflow: hidden;
}
.inner img{
  transition: all 1.3s ease;
}
.inner img:hover{
  transform: scale(1.3);
}
    
  </style>
</head>

<body>
  <!--Main Navigation-->
  <header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: white">
      <!-- Container wrapper -->
      <div class="container-fluid">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
          data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Navbar brand -->
          <a class="navbar-brand  mt-lg-0" href="#">
            <img src="logo.png" height="50" alt="MDB Logo" loading="lazy"/>

          </a>
          <h4 my-0><B><i>My Travel Partner</i></B></h4>
          <!-- Left links -->
          <ul class="navbar-nav  " style="justify-content: center; align-content: center; margin: auto; ">
            <li class="nav-item">
              <a class="nav-link" href="home.php">HOME </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ABOUT US </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">SERVICE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"> BLOG</a>
            </li>

          </ul>
          <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->
        <div class="d-flex align-items-center">
          <!-- Icon -->
          <a class="text-reset me-3" href="#">
            <i class="fas fa-shopping-cart"></i>
          </a>

          <!-- Notifications -->
          <div class="dropdown">
            <a class="text-reset me-3 dropdown-toggle hidden-arrow" id="navbarDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-bell"></i>
              <span class="badge rounded-pill badge-notification bg-danger">1</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <a class="dropdown-item" href="#">Notifications</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">News</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Request</a>
              </li>
            </ul>
          </div>


          <!-- Avatar -->
          <div class="dropdown">
            <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar"
              role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="download.jpg" class="rounded-circle" height="26" width="28"
                alt="Black and White Portrait of a Man" loading="lazy" />
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
              <li>
                <a class="dropdown-item" href="#">My profile</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Settings</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Logout</a>
              </li>
            </ul>
          </div>
          <!--Main Navigation-->

        </div>
        <!-- Right elements -->
      </div>
      <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->

  </header>

  <!------photo page     -->
  <div id="carouselExampleDark" class="carousel carousel-dark slide " data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="first.jpg" class="d-block w-100" alt="..." style="height: 750px; width: 1400px; opacity: 0.9;">

        <div class="carousel-caption d-none d-md-block ">
          <!-- <h4>Welcome To The Station</h4>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora laudantium, porro, magnam quaerat officia
            ex animi perferendis et obcaecati fugiat cumque eum omnis quod, sequi delectus eos quo eaque quia.</p> -->
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="second.jpg" class="d-block w-100" alt="..." style="height: 750px; width: 1400px;">
        <div class="carousel-caption d-none d-md-block">
          <!-- <h4>Welcome To The Station</h4>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora laudantium, porro, magnam quaerat officia
            ex animi perferendis et obcaecati fugiat cumque eum omnis quod, sequi delectus eos quo eaque quia.</p> -->
        </div>
      </div>
      <div class="carousel-item">
        <img src="third.jpg" class="d-block w-100" alt="..." style="height: 750px; width: 1400px;">
        <div class="carousel-caption d-none d-md-block">
          <!-- <h4>Welcome To The Station</h4>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora laudantium, porro, magnam quaerat officia
            ex animi perferendis et obcaecati fugiat cumque eum omnis quod, sequi delectus eos quo eaque quia.</p> -->
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="container2">
  <Marquee direction="right" class="bg-warning text-uppercase " style="letter-spacing: 2px;
   word-spacing: 4px;"><i class="fa-solid fa-phone-volume"></i> Helpline No 1234567890 <i
      class="fa-solid fa-phone-volume"></i></Marquee>
  <!------about page     -->
  <div class="container1 text-center text-align-center " style="color: rgb(20, 20, 19);">
    <h2 style="font-size: 3rem; background-color: rgb(243, 242, 240);"><span>About Us
     
      </span></h2>
    <div class="row featurette d-flex justify-content-center align-items-center text-center my-5">
      <div class="col-md-5"
      data-aos="fade-right"
      data-aos-offset="200"
      data-aos-delay="300"
      data-aos-duration="800"
      data-aos-easing="ease-in-out"
      data-aos-mirror="true"
      data-aos-once="false" >
    
        <img class="mb-3" alt="Marketing manager, HR specialist and sales director sharing their experience with Survio." height="260"
          loading="lazy" src="about.jpg" width="288">
      </div>
      <div class="col-md-7 text-start" data-aos="fade-left"
      data-aos-duration="1000" >
        <h2 class="featurette-heading ">First featurette heading. <span class="text-muted">It’ll blow your mind.</span>
        </h2>
        <p class="lead ">Some great placeholder content for the first featurette here. Imagine some exciting prose
          hereSome great placeholder content for the first featurette here. Imagine some exciting prose hereSome great
          placeholder content for the first featurette here. Imagine some exciting prose here.</p>
      </div>
      
    </div>
  </div>





  </div>

  <div class="container1 text-center text-align-center mt-4  " style="color: rgb(20, 20, 19); ">
    <h2 style="font-size: 3rem; background-color: rgb(243, 242, 240);">Our service
      <hr>
    </h2>





    <div class="row text-center mx-4 ">
      <div class="col-lg-4"
      data-aos="zoom-in" 
      data-aos-offset="100"
      data-aos-delay="50"
      data-aos-easing="ease-in"

      data-aos-anchor-placement="top-bottom"
      data-aos-duration="700">
        <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
        <img src="https://singgurkhainvestment.com.np/wp-content/uploads/2021/08/restaurant-hotel.png"
          style="height: 18rem; width: 25rem;" class="rounded-circle">
        <h2>Hygenic food</h2>
        <p>Some representative placeholder content for the three columns of text below the carousel. This is the first
          column.</p>

      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4"
      data-aos="zoom-in" 
      data-aos-offset="100"
      data-aos-delay="100"
      data-aos-easing="ease-in"

      data-aos-anchor-placement="top-bottom"
      data-aos-duration="700">
        <img src="service-removebg-preview.png" style="height: 18rem;" class="rounded-circle">
        <h2>porter Service</h2>
        <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.
        </p>

      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4"
      data-aos="zoom-in" 
      data-aos-offset="100"
      data-aos-delay="150"
      data-aos-easing="ease-in"

      data-aos-anchor-placement="top-bottom"
      data-aos-duration="700">
        <img src="service11-removebg-preview.png" style="height: 18rem; " class="rounded-circle">
        <h2>Cleaning Service</h2>
        <p>And lastly this, the third column of representative placeholder content.</p>

      </div><!-- /.col-lg-4 -->
    </div>
  </div>

</div>
  <section class="Appoinment ">
    <div class="row4 "
    data-aos="fade-right"
      data-aos-offset="200"
      data-aos-delay="200"
      data-aos-duration="600"
      data-aos-easing="ease-in"
     >

      <p class="first2 ">

      </p>
      <p class="second2">
        Just reserve your seat & you are done!
      </p>
      <a href="usertrain.php" class="btn4" style="text-decoration: none;">Book Ticket</a>



    </div>
  </section>
  <div class="album py-5 bg-light">

    <div class="container1 text-center text-align-center mt-4 mb-2  " style="color: rgb(20, 20, 19); ">
      <h2 style="font-size: 3rem; background-color: rgb(243, 242, 240); ">Blog
        <hr>
      </h2>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mx-3 ">
        <div class="col"
        >
          <div class="card shadow-sm">
            <div class="inner">
            <img src="service 1.jpg" width="100%" height="225">
            </div>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary ">View</button>

                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col"
        >
          <div class="card shadow-sm">
            <div class="inner">
            <img src="country-train.jpg" width="100%" height="225">
            </div>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary ">View</button>

                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col"
        >
          <div class="card shadow-sm ">
            <div class="inner">
            <img src="rlyb-e1655190618621.jpg" width="100%" height="225">
            </div>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>

                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <div class="inner">
            <img src="pexels-rajat-jain-325200.jpg" width="100%" height="225">
            </div>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>

                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <div class="inner">
            <img src="pngtree-new-railway-station-platform-image_1060569.jpg" width="100%" height="225">
            </div>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>

                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <div class="inner">
            <img src="indian-railways-industry-2.jpg" width="100%" height="225">
            </div>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>

                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>



      </div>
    </div>
  </div>

  <div class="container1 text-center text-align-center mt-4  " style="color: rgb(20, 20, 19); ">
    <h2 style="font-size: 3rem; background-color: rgb(243, 242, 240);">Location</h2>
    <div class="card mb-4 ">
      <div class="card-body">

        <div class="row py-4">
          <div class="col-lg-12">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3666.6139171305313!2d77.43193947524085!3d23.220736779035448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c425abd5b1bf1%3A0xbe55c166b8a85448!2sAgnito%20Technologies%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1686640884269!5m2!1sen!2sin"
              width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container6 " style="background-color: rgb(246, 250, 253);">
    <div class="container my-5">
      <div class="row">
        <div class="row">
          <h2 class="mt-3 text-center">Frequently Ask Question</h2>
        </div>
        <div class="accordion my-3" id="accordionExample">
          <div class="accordion-item my-4">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                aria-expanded="true" aria-controls="collapseOne">
                How to booked ticket?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse
                plugin adds the appropriate classes that we use to style each element. These classes control the overall
                appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                within the <code>.accordion-body</code>, though the transition does limit overflow.
                <!-- <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow. -->
              </div>
            </div>
          </div>
          <div class="accordion-item my-4">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                How to find my train ?
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse
                plugin adds the appropriate classes that we use to style each element. These classes control the overall
                appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item my-4">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                How to cancel ticket ?
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse
                plugin adds the appropriate classes that we use to style each element. These classes control the overall
                appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class=" my-5 mt-3 mb-1 ">
    <!-- Footer -->
    <footer class="text-center text-lg-start text-white " style="background-color: #59657e">
      <!-- Grid container -->
      <div class="">
        <!-- Section: Links -->

        <section class="">
          <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
              <!-- Grid column -->
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto  mt-4">
                <!-- Content -->
                <h4 class=" fw-bold mb-4">
                  <i class="fa-solid fa-train"></i> My Travel Partner
                </h4>
                <p>
                  Here you can use rows and columns to organize your footer content. Lorem ipsum
                  dolor sit amet, consectetur adipisicing elit.
                </p>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 mt-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                  Products
                </h6>
                <p>
                  <a href="#!" class="text-reset">Angular</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">React</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">Vue</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">Laravel</a>
                </p>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 mt-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                  Useful links
                </h6>
                <p>
                  <a href="#!" class="text-reset">Privacy</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">Settings</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">Blog</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">Help</a>
                </p>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 mt-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                <p>
                  <i class="fas fa-envelope me-3"></i>
                  info@example.com
                </p>
                <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
              </div>
              <!-- Grid column -->
            </div>
            <!-- Grid row -->
          </div>
        </section>
        <!-- Section: Links -->

        <hr class="my-3">

        <!-- Section: Copyright -->
        <section class="p-3 pt-0">
          <div class="row d-flex align-items-center">
            <!-- Grid column -->
            <div class="col-md-7 col-lg-8 text-center text-md-start">
              <!-- Copyright -->
              <div class="p-3">
                © 2020 Copyright:
                <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
              </div>
              <!-- Copyright -->
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
              <!-- Facebook -->
              <a class="btn btn-outline-light btn-floating m-1" style="color:rgb(7, 34, 244);" role="button"><i
                  class="fab fa-facebook-f"></i></a>

              <!-- Twitter -->
              <a class="btn btn-outline-light btn-floating m-1" style="color:rgb(56, 148, 214);" role="button"><i
                  class="fab fa-twitter"></i></a>

              <!-- Google -->
              <a class="btn btn-outline-light btn-floating m-1" style="color:rgb(240, 4, 4);" role="button"><i
                  class="fab fa-google"></i></a>

              <!-- Instagram -->
              <a class="btn btn-outline-light btn-floating m-1" style="color:rgb(221, 9, 254);" role="button"><i
                  class="fab fa-instagram"></i></a>
            </div>
            <!-- Grid column -->
          </div>
        </section>
        <!-- Section: Copyright -->
      </div>
      <!-- Grid container -->
    </footer>
    <!-- Footer -->
  </div>
  <!-- End of .container -->
  <!-- Footer -->
  </div>
  <!--Main Navigation-->

  <!-- Optional JavaScript; choose one of the two! -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 3
        },
        1000: {
          items: 3
        }
      }
    })
  </script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<script>
  AOS.init({
    offset : 300,
  
  });
</script>
<div data-aos="new-animation"></div>



  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>