<!DOCTYPE html>
<html>
<head>
    <title>Analysis</title>
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
    <link rel="stylesheet" type="text/css" href="ss.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <?php
include("navbar_all.php");
?>

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
<div  style=" padding-top:80px; background-color: #c0c0c0 ">
    <form role="form" method="post" id="reused_form">
                            <div class="col-sm-12 form-group">
                                <label>1. Positive attitude towards communication with society.</label>
                                
                                <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="bad" >
                                        a.  Does not suit me
                                    </label><br>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        b. Doesn’t suit me mostly  </label><br>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        c. Suits me partially</label><br>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        d. Suits me mostly </label><br>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                       e. Suits me completely</label><br>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>2. Willing to accept new things upcoming in your life irrespective of its realtion with subject or not.</label><br>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="bad" >
                                        a.  Does not suit me
                                    </label><br>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        b. Doesn’t suit me mostly  </label><br>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        c. Suits me half  </label><br>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        d. Suits me mostly </label><br>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                       e. Suits me fully </label><br>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>3. Do you practically work in the field(i.e bank, documentation etc).</label>
                                <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="bad" >
                                        a.  Does not suit me
                                    </label><br>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        b. Doesn’t suit me mostly </label><br> 
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        c. Suits me half  </label><br>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        d. Suits me mostly </label><br>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                       e. Suits me fully </label><br>
                            </div>  
                            <div class="col-sm-12 form-group">
                                <label>4. I analyze and purchase product.</label>
                                <p>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="bad" >
                                        a.  Does not suit me
                                    </label><br>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        b. Doesn’t suit me mostly  </label><br>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        c. Suits me half  </label><br>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        d. Suits me mostly</label><br> 
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                       e. Suits me fully 
                                    </label><br>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>5. I'm able to marketize my issued or point.</label>
                                <br>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="bad" >
                                        a.  Does not suit me
                                    </label><br>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        b. Doesn’t suit me mostly  </label><br>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        c. Suits me half  </label><br>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        d. Suits me mostly</label><br> 
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                       e. Suits me fully 
                                    <br>
                            </div>
                        
</div>

<?php
 include("footer_content.php")
 ?>
</body>
</html>