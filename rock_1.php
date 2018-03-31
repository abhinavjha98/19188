<!DOCTYPE html>
<html>
<head>
    <title></title>
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
    <link rel="stylesheet" type="text/css" href="ss.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
   <?php include("functions/init.php"); ?>
    <?php
include("navbar_all.php");
?>
<?php validate_user();?>

    <!-- <div class="container"> -->
    <section id="timer">
       
            <div class="col-xs-12 col-sm-12 col-md-6 countdown-wrapper text-center mb20">
                
                    <!-- <div class="card-header">
                        Upcomming Event countdown timer
                    </div> -->
                    
                        <div id="countdown">
                            <div class="well">
                                <!-- <span id="hour" class="timer bg-success"></span> -->
                                <span id="min" class="timer bg-info"></span>
                                <span id="sec" class="timer bg-primary"></span>
                            </div>
                        </div>
                    
                    <!-- <div class="card-footer">
                        <a href="#" class="btn btn-primary">Book now</a>
                        <a href="#" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Subscrib for upcomming</a>
                        <a href="#" class="btn btn-danger">14 remaining</a>
                    </div>
                </div> -->
            
          <!--   <div class="col-xs-12 col-sm-12 col-md-6 countdown-wrapper text-center mb20">
                <div class="card">
                    <div class="card-header">
                        Upcomming Event countdown timer
                    </div>
                    <div class="card-block">
                        <div id="countdown">
                            <div class="well">
                                <span id="hour" class="timer bg-success"></span>
                                <span id="min" class="timer bg-info"></span>
                                <span id="sec" class="timer bg-primary"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Book now</a>
                        <a href="#" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Subscrib for upcomming</a>
                        <a href="#" class="btn btn-danger">14 remaining</a>
                    </div>
                </div>
            </div> -->
       
    </section>
</div>


<!-- Subscribe for upcomming event modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Subscribe for our upcomming Events</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email"> 
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> 
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">Save changes</button>
            </div>
        </div>
    </div>
</div> -->
<div class="big">
<div class="container">
  <!-- <h2>Form control: inline radio buttons</h2>
  <p>The form below contains three inline radio buttons:</p> -->
  <form id="radio-form" method="POST" role="form">
    <h2>1.I watch sports calmly.</h2>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="1"> a.  Does not suit me
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="2">b. Doesn’t suit me mostly
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="3">c. Suits me half
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="4">d. Suits me mostly
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="5">e. Suits me fully
    </label>
  </form>
</div>

<div class="container">
  <!-- <h2>Form control: inline radio buttons</h2>
  <p>The form below contains three inline radio buttons:</p> -->
  <form>
    <h2>2. I can do many things at a time and properly</h2>
   <label class="radio-inline">
      <input type="radio" name="optradio" value="1"> a.  Does not suit me
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="2">b. Doesn’t suit me mostly
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="3">c. Suits me half
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="4">d. Suits me mostly
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="5">e. Suits me fully
    </label>
  </form>
</div>
<div class="container">
  <!-- <h2>Form control: inline radio buttons</h2>
  <p>The form below contains three inline radio buttons:</p> -->
  <form>
    <h2>3. I continue to do things until they are perfect</h2>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="1"> a.  Does not suit me
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="2">b. Doesn’t suit me mostly
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="3">c. Suits me half
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="4">d. Suits me mostly
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="5">e. Suits me fully
    </label>
  </form>
</div>
<div class="container">
  <!-- <h2>Form control: inline radio buttons</h2>
  <p>The form below contains three inline radio buttons:</p> -->
  <form>
    <h2>4. I work hard to become better than others.</h2>
   <label class="radio-inline">
      <input type="radio" name="optradio" value="1"> a.  Does not suit me
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="2">b. Doesn’t suit me mostly
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="3">c. Suits me half
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="4">d. Suits me mostly
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="5">e. Suits me fully
    </label>
  </form>
</div>
<div class="container">
  <!-- <h2>Form control: inline radio buttons</h2>
  <p>The form below contains three inline radio buttons:</p> -->
  <form>
    <h2>5. I panic before exam</h2>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="5"> a.  Does not suit me
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="4">b. Doesn’t suit me mostly
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="3">c. Suits me half
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="2">d. Suits me mostly
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="1">e. Suits me fully
    </label>
  </form>
</div>

<div class="container">
  <!-- <h2>Form control: inline radio buttons</h2>
  <p>The form below contains three inline radio buttons:</p> -->
  <form>
    <h2>6. I talk a lot</h2>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="5"> a.  Does not suit me
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="4">b. Doesn’t suit me mostly
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="3">c. Suits me half
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="2">d. Suits me mostly
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="1">e. Suits me fully
    </label>
  </form>
</div>

<div class="container">
  <!-- <h2>Form control: inline radio buttons</h2>
  <p>The form below contains three inline radio buttons:</p> -->
  <form>
    <h2>7. I attend program related to my subject</h2>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="1"> a.  Does not suit me
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="2">b. Doesn’t suit me mostly
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="3">c. Suits me half
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="4">d. Suits me mostly
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="5">e. Suits me fully
    </label>
  </form>
</div>

<div class="container">
  <!-- <h2>Form control: inline radio buttons</h2>
  <p>The form below contains three inline radio buttons:</p> -->
  <form>
    <h2>8. I try to find meaning in information in which there is no order.</h2>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="1"> a.  Does not suit me
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="2">b. Doesn’t suit me mostly
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="3">c. Suits me half
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="4">d. Suits me mostly
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="5">e. Suits me fully
    </label>
    <br>
    <br>
        <button>
            <input type="submit" name="register-submit" id="radio-submit"  class="form-control btn btn-register" value="Submit">
        </button>
                                                
        
  </form>
</div>
</div>

<script >
    $( document ).ready(function() {
  setInterval(function time(){
  var d = new Date();
  d.setMinutes(1);
  var hours = 24 - d.getHours();
  var min = 60 - d.getMinutes();
  if((min + '').length == 1){
    min = '0' + min;
  }
  var sec = 60 - d.getSeconds();
  if((sec + '').length == 1){
        sec = '0' + sec;
  }
  jQuery('#countdown #hour').html(hours);
  jQuery('#countdown #min').html(min);
  jQuery('#countdown #sec').html(sec);
}, 1000); });
</script>
<?php
 include("footer_content.php")
 ?>
</body>
</html>