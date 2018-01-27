<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="resume web developer javascript php html css">
    <meta name="author" content="Daniel Carroll">

    <title>DjCARROLL</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="/css/site.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

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


    <!-- Main -->
    <a id="main"></a>
    <div class="section-main img-index-bg">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h3>civil engineer</h3>
                        <h1>DANIEL<span class="lg-text">j</span>CARROLL</h1>
                        <br>
                        <h3>software developer</h3>
                        <hr class="intro-divider">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-xs-12 content-section">
                    <div class="clearfix"></div>
                    <i class="fa fa-cogs fa-5x" aria-hidden="true"></i>
                    <h2 class="section-heading">engineering</h2>
                    <p class="lead">I'm a senior civil engineer who has designed everything
                        from a two-lane park road to a five-level interchange.
                        My primary expertise is in road and highway engineering
                        and related fields like drainage, traffic control plans,
                        and signing and striping design. I'm also a traffic engineer
                        who has done numerous (>70) traffic impact analyses, arterial
                        signal timing plans, and corridor studies.                    </p>
                    <a href="/resume/resume.php" class="btn-link">
                        <button class="button">LEARN MORE</button>
                    </a>
                </div>
                <div class="col-md-5 col-xs-12 content-section">
                    <div class="clearfix"></div>
                    <i class="fa fa-code fa-5x" aria-hidden="true"></i>
                    <h2 class="section-heading">software development</h2>
                    <p class="lead">During a sabatical from civil engineering I trained at Codeup<link>
                        as a full stack web developer. Those skills now enable me to 
                        create web based solutions for civil engineers. Creating software as a service (SaaS) 
                        for the engineering design teams, will provide them access to fully controlled tools
                        where continual improvementscan be immediately distributed to every project and team.</p>
                    <a href="/portfolio/portfolio.php" class="btn-link">
                        <button class="button">SEE MY WORK</button>
                    </a>
                </div>
                <div class="col-md-5 col-lg-offset-2 col-xs-12 content-section">
                     <div class="clearfix"></div>
                     <i class="fa fa-linux fa-5x" aria-hidden="true"></i>
                     <h2 class="section-heading">linux system admin</h2>
                     <p class="lead">DevOps is the combination of developing software (Dev) and deployment (Ops).
                        System administration is an essential portion of deploying software
                        or getting a website on the internet. As a Red Hat certified Linux System Administrator
                        trained by Rackspace professionals I can utilize these skills to prepare and coordinate software or
                        website deployment within a company's IT infrastructure.</p>
                     <a href="/resume/resume.php" class="btn-link">
                         <button class="button">LEARN MORE</button>
                     </a>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.main -->

    <?php include 'footer.php';?>
     

    <!-- Bootstrap core JavaScript
        ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</body>

</html>