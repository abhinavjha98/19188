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
    <!-- <img src="img\phy1.jpg"> -->
    <?php
include("navbar_all.php");
?>
<div class="container">
    <section id="timer">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 countdown-wrapper text-center mb20">
                <div class="card">
                    <!-- <div class="card-header">
                        Upcomming Event countdown timer
                    </div> -->
                    <div class="card-block">
                        <div id="countdown">
                            <div class="well">
                                <!-- <span id="hour" class="timer bg-success"></span> -->
                                <span id="min" class="timer bg-info"></span>
                                <span id="sec" class="timer bg-primary"></span>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="card-footer">
                        <a href="#" class="btn btn-primary">Book now</a>
                        <a href="#" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Subscrib for upcomming</a>
                        <a href="#" class="btn btn-danger">14 remaining</a>
                    </div>
                </div> -->
            </div>
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
        </div>
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
<div class="container" >
<div class="container">
    <form role="form" method="post" id="reused_form">
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>1.Environment in my home is good.</label>
                                <p>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="bad" >
                                        a.  Does not suit me
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        b. Doesn’t suit me mostly  
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        c. Suits me partially
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        d. Suits me mostly 
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                       e. Suits me completely
                                    </p>
                            </div>
                        </div>    
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>2. What is your economic condition?</label>
                                <p>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="bad" >
                                        a.  Poor
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        b. Moderate  
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        c. Neutral  
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        d. Good
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                       e. Very Good 
                                    </p>
                            </div>
                        </div>    
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>3. I travel a lot to reach my institution/college.</label>
                                <p>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="bad" >
                                        a.  Does not suit me
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        b. Doesn’t suit me mostly  
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        c. Suits me half  
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        d. Suits me mostly 
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                       e. Suits me fully 
                                    </p>
                            </div>
                        </div>   
                           <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>4. I waste a lot of time in travelling to the college/institute.</label>
                                <p>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="bad" >
                                        a.  Does not suit me
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        b. Doesn’t suit me mostly  
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        c. Suits me half  
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        d. Suits me mostly 
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                       e. Suits me fully 
                                    </p>
                            </div>
                        </div>  
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>5. I'm a positive person</label>
                                <p>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="bad" >
                                        a.  Does not suit me
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        b. Doesn’t suit me mostly  
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        c. Suits me half  
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        d. Suits me mostly 
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                       e. Suits me fully 
                                    </p>
                            </div>
                        </div>  
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>6. I try to solve and overcome the problem.</label>
                                <p>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="bad" >
                                        a.  Does not suit me
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        b. Doesn’t suit me mostly  
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        c. Suits me half  
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        d. Suits me mostly 
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                       e. Suits me fully 
                                    </p>
                            </div>
                        </div>  
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>7. I Stay Motivated.</label>
                                <p>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="bad" >
                                        a.  Does not suit me
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        b. Doesn’t suit me mostly  
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        c. Suits me half  
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        d. Suits me mostly 
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                       e. Suits me fully 
                                    </p>
                            </div>
                        </div>  
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>8. I'm a localite.</label>
                                <p>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="bad" >
                                        a.  Does not suit me
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        b. Doesn’t suit me mostly  
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        c. Suits me half  
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        d. Suits me mostly 
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                       e. Suits me fully 
                                    </p>
                            </div>
                        </div>  
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