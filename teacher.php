<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TenderFoot</title>
    <meta name="description" content="Creative CV is a HTML resume template for professionals. Built with Bootstrap 4, Now UI Kit and FontAwesome, this modern and responsive design template is perfect to showcase your portfolio, skils and experience."/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="csss/aos.css" rel="stylesheet">
    <link href="csss/bootstrap.min.css" rel="stylesheet">
    <link href="styless/main.css" rel="stylesheet">
    <?php
      include("functions/init.php");
      //if(logged_in())
      //{

        $data=get_user_data();
      //}
      //else{
      //  redirect("index.php");
      //}
    ?>
  </head>
  <body id="top">
    <header>
      <div class="profile-page sidebar-collapse">
        <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary" color-on-scroll="400">
          <div class="container">
            <div class="navbar-translate"><a class="navbar-brand" href="#" rel="tooltip">TenderFoot</a>
              <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link smooth-scroll" href="index.php">About</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="carrer.php">carrer</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="login_t.php">Logout</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <div class="page-content">
      <div>
<div class="profile-page">
  <div class="wrapper">
    <div class="page-header page-header-small" filter-color="green">
      <div class="page-header-image" data-parallax="true" style="background-image: url('imagess/cc-bg-1.jpg');"></div>
      <div class="container">
        <div class="content-center">
          <a href="#"></a>
          <div class="h2 title"><h3>Hello </h3><?php echo $data['first_name']; ?></div>
          <p class="category text-white">Teacher</p>
        </div>
      </div>
      <div class="section">
        <div class="container">
          <div class="button-container"><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Facebook"><i class="fa fa-facebook"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Twitter"><i class="fa fa-twitter"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Google+"><i class="fa fa-google-plus"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Instagram"><i class="fa fa-instagram"></i></a></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section" id="about">
  <div class="container">
    <div class="card" data-aos="fade-up" data-aos-offset="10">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title">About</div>
            <!-- <p>Hello! I am Fatima Nevrekar. Web Developer, Graphic Designer and Photographer.</p>
            <p>Creative CV is a HTML resume template for professionals. Built with Bootstrap 4, Now UI Kit and FontAwesome, this modern and responsive design template is perfect to showcase your portfolio, skills and experience. <a href="https://templateflip.com/templates/creative-cv/" target="_blank">Learn More</a></p>
          </div>
        </div> -->
                    <textarea rows="4" cols="50">
write your content.....
</textarea>
          </div>
        </div>

        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title">Basic Information</div>
            <div class="row">
              <div class="col-sm-4"><strong class="text-uppercase">First name:</strong></div>
              <div class="col-sm-8"><?php echo $data['first_name']; ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Last name:</strong></div>
              <div class="col-sm-8"><?php echo $data['last_name']; ?>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">email_id:</strong></div>
              <div class="col-sm-8"><?php echo $data['email']; ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">BirthDay:</strong></div>
            <div class="col-sm-8">
              <input type="date" name="bday">
            </div>
    
      </div>
           <!--  <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Address:</strong></div>
              <div class="col-sm-8">140, City Center, New York, U.S.A</div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Language:</strong></div>
              <div class="col-sm-8">English</div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section" id="experience">
  <div class="container cc-experience">
    <div class="h4 text-center mb-4 title">Contents</div>

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="card" style="width: 50rem;">
              <img class="card-img-top" src="images/Attendance.jpg" alt="Student Attendance" style="width: 500px; height: 400px;">
                <div class="card-body">
                    <p class="card-text"><a href=""><h2>ATTENDENCE</h2></a>This is to Insert Student Attendance.</p>
                </div>
                <form action="upload.php" method="POST" enctype="multipart/form-data">
                  <input type="submit" name="submit">
                </form>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card" style="width: 50rem;">
              <img class="card-img-top" src="images/academics.jpg" alt="Student Academics" style="width: 500px; height: 400px;">
                <div class="card-body">
                    <p class="card-text"><a href=""><h2>ACADEMICS</h2></a><br>This is to Insert Academics Marks of Student.</p>
                </div>
            </div>
        </div>
    </div>
</div>

    <footer class="footer">
      <div class="container text-center"><a class="cc-facebook btn btn-link" href="#"><i class="fa fa-facebook fa-2x " aria-hidden="true"></i></a><a class="cc-twitter btn btn-link " href="#"><i class="fa fa-twitter fa-2x " aria-hidden="true"></i></a><a class="cc-google-plus btn btn-link" href="#"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a><a class="cc-instagram btn btn-link" href="#"><i class="fa fa-instagram fa-2x " aria-hidden="true"></i></a></div>
      <div class="h4 title text-center"><!-- Fatima Nevrekar --></div>
      <div class="text-center text-muted">
        <p>&copy; TenderFoot All rights reserved.<br>Design - <a class="credit" href="https://templateflip.com" target="_blank">TemplateFlip</a></p>
      </div>
    </footer>
    <script src="jss/core/jquery.3.2.1.min.js"></script>
    <script src="jss/core/popper.min.js"></script>
    <script src="jss/core/bootstrap.min.js"></script>
    <script src="jss/now-ui-kit.js?v=1.1.0"></script>
    <script src="jss/aos.js"></script>
    <script src="scriptss/main.js"></script>
  </body>
</html>