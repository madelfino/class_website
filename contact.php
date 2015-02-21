<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="bN.png">

    <title>Mr. Delfino's Class Website - Contact</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="delfino.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body role="document">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Mr. Delfino</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li class="active"><a href="contact.html">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Classes <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="geo.html">Geometry</a></li>
                <li><a href="preenggeo.html">Pre-Engineering Geometry</a></li>
                <li><a href="compprog.html">Computer Programming</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
    <h2>Contact me</h2>
			<?php
					$to = "megabeano@gmail.com";
					$name = $_POST['name'];
					$subject = "Message from " .$name;
					$phonenum = $_POST['phonenum'];
					$email =$_POST['email'];
					$comments=$_POST['comments'];
					$body = "New message from www.michaeldelfino.com:\n";
					$body .= "\nName: " . $name;
					$body .= "\nPhone number: " . $phonenum;
					$body .= "\nEmail address: " . $email;
					$body .= "\nMessage: " . $comments;
					if (mail($to, $subject, $body, $headers)) {
					  echo('<br><br>Message sent.  Thank you!');
 					} else {
 					 echo('<br><br>Message delivery failed... Please try again.');
 					}
				?>

      <hr>

      <footer>
        <p>&copy; Michael Delfino 2015</p>
      </footer>

    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>