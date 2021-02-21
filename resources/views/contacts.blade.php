<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href={{asset('css/style.css')}}>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Contacts</title>
</head>
<body>

<nav class="navbar-fixed-top navbar-default">
<div class="container-fluid">
  <div class="navbar-header">
    <a class="navbar-brand" href="#">CONTACTS</a>
  </div>
  <div>
    <ul class="nav navbar-nav navbar-right">
      <li ><a href="/">Home</a></li>
      <li ><a href="/about_me">About me</a></li>
      <li><a href="/blog">Blog</a></li>
      <li><a href="/skills">Skills</a></li>
      <li class="active"><a href="/contacts">Contact</a></li>
    </ul>
  </div>
</div>


 <div class="containerr" >
            <div class="row" style="background-color: rgba(0,0,0,0.4);">
                <div class="col-md-6 col-md-offset-3" style="background-color: rgba(255,255,255,0.5);" data-aos="flip-left" data-aos-duration="1500">
                    <h2>Contact me</h2>
                    <p> Send me your message and we will get back to you as soon as possible </p>
                    <form role="form" method="post" id="reused_form" >
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="name"> First Name:</label>
                                <input type="text" class="form-control" id="firstname" name="firstname" maxlength="50">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="name"> Last Name:</label>
                                <input type="text" class="form-control" id="lastname" name="lastname" maxlength="50">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="email"> Email:</label>
                                <input type="text" class="form-control" id="email" name="email" maxlength="50">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="email"> Phone:</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required maxlength="50">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="name"> Message:</label>
                                <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Your Message Here" maxlength="6000" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <button type="submit" class="btn btn-lg btn-success btn-block" id="btnContactUs">Post It! </button>
                            </div>
                        </div>
                    </form>
                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Sent your message successfully!</h3> </div>
                    <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
                </div>
            </div>
        </div>



<script src="script.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>
</html>
