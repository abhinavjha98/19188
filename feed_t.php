<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Feedback Form</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
    </head>
    <body >
        <div class="container">
            <div class="imagebg"></div>
            <div class="row " style="margin-top: 50px">
                <div class="col-md-6 col-md-offset-3 form-container">
                    <h2>Feedback</h2> 
                    <p> Please provide your feedback below: </p>
                    <form role="form" method="post" id="reused_form">
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>1.Work is clear, concise and set out according to guidelines </label>
                            </div>
                        </div>
                        <div class="rate">
                            <div class="rate-item">☆</div>
                            <div class="rate-item">☆</div>
                            <div class="rate-item">☆</div>
                            <div class="rate-item">☆</div>
                            <div class="rate-item">☆</div>
                        </div>
                         <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>2.Accuracy of solution </label>
                                 <p>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="bad" >
                                      Completely satisfies
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        Satisfies 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="good" >
                                       Dissatisfied
                                    </label>
                                </p>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>3.Comments on validity of solutions</label>
                            </div>
                        </div>
                       <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="comments"> Comments:</label>
                                <textarea class="form-control" type="textarea" name="comments" id="comments" placeholder="Your Comments" maxlength="6000" rows=""></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>4.Attendance </label>
                            </div>
                        </div>
                        <!--<div class="rate">
                            <div class="rate-item">☆</div>
                            <div class="rate-item">☆</div>
                            <div class="rate-item">☆</div>
                            <div class="rate-item">☆</div>
                            <div class="rate-item">☆</div>
                        </div> for percentile scale-->
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>5.Social behavior</label>
                                <p>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="bad" >
                                       Excellent
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                       Good 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="good" >
                                       Satisafactory 
                                    </label>
                                     <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="good" >
                                       Unattentive 
                                    </label>
                                </p>
                            </div>
                        </div>
                     
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>6. Rate the  overall website</label>
                            </div>
                        </div>
                        <div class="rate">
                            <div class="rate-item">☆</div>
                            <div class="rate-item">☆</div>
                            <div class="rate-item">☆</div>
                            <div class="rate-item">☆</div>
                            <div class="rate-item">☆</div>
                        </div>
                         <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>6.Overall description :</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="comments"> Comments:</label>
                                <textarea class="form-control" type="textarea" name="comments" id="comments" placeholder="Your Comments" maxlength="6000" rows=""></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <button type="submit" class="btn btn-lg btn-warning btn-block" >Submit </button>
                            </div>
                        </div>
                    </form>
                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Posted your feedback successfully!</h3> </div>
                    <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
                </div>
            </div>
        </div>
    </body>
</html>