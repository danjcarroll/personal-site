<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="resume web developer javascript php html css">
    <meta name="author" content="Daniel Carroll">

    <title>DjC | Portfolio</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="/css/site.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top topnav navbar-inverse" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav brand-text" href="/index.php">DjC</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="/portfolio/portfolio.php">PORTFOLIO</a>
                    </li>
                    <li>
                        <a href="/resume/resume.php">RESUME</a>
                    </li>
                    <li>
                        <a href="/contact/contact.php">CONTACT</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- .Navigation -->


    <!-- Page Content -->

    <!-- Intro -->
    <a id="main"></a>
    <div class="section-main img-portfolio-bg">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h3>what I've been working on recently</h3>
                        <h1>PORT<span class="lg-text">f</span>OLIO</h1>
                        <hr class="intro-divider">
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro -->
	
	<div class="content-section-b">
        <div class="container">
        	<a id="quote"></a>
            <div class="row">
                <div class="col-sm-12 text-center">
                	<h2 class="section heading"><em>I used to think that working as a civil engineer was a lot like being a coder, <br>but I had it bassakwards.<br>
                        I was a coder working as a civil engineer...I fixed that.</em></h2>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.content-section-a -->   

    <div class="content-section-a">
        <div class="container">
        	<a id="portfolio"></a>
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <a target="_blank" href="https://whiskr.net" class="link-on-white"><img src="/img/whiskr_square.svg" alt="whisker" class="img-portfolio">
                        <h4>Whiskr.net</h4>
                        <p>Internship opportunity at a travel deals startup.</p>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <a target="_blank" href="http://skillet-ninja.com" class="link-on-white"><img src="/img/skillet-ninja-head-pan.png" alt="skillet-ninja" class="img-portfolio">
                        <h4>Skillet-Ninja.com</h4>
                        <p>Codeup capstone project.</p>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <a target="_blank" href="https://github.com/danjcarroll" class="link-on-white"><img src="/img/github.png" 
                        alt="github" class="img-portfolio">
                        <h4>All the rest...</h4>
                        <p>Visit my Github account to see all my projects and classwork.</p>
                    </a>
                </div> 
            </div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.content-section-a -->
 
    <?php include '../footer.php';?>
 
     <!-- Bootstrap core JavaScript
        ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</body>
</html>