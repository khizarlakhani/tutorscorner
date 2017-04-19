<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tutor's Corner</title>

    <!-- Bootstrap Core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


    <!-- Custom CSS -->
    <link href="{{URL::asset('css/stylish-portfolio.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
        <li class="sidebar-brand">
            <a href="#top" onclick=$("#menu-close").click();>Tutor's Corner</a>
        </li>
        @if (Auth::guest())
            <li>
                <a href="#" onclick=$("#menu-close").click();>Home</a>
            </li>
            <li>
                <a href="#about" onclick=$("#menu-close").click();>Portfolio</a>
            </li>
            <li>
                <a href="#services" onclick=$("#menu-close").click();>Services</a>
            </li>
            <li>
                <a href="#portfolio" onclick=$("#menu-close").click();>Notes and Practice Material</a>
            </li>
            <li>
                <a href="#foot" onclick=$("#menu-close").click();>Contact</a>
            </li>
            <li>
                <a href="/login" onclick=$("#menu-close").click();>Login</a>
            </li>
        @else
            <li>
                <h4>Welcome {{ Auth::user()->name }}</h4>
            </li>
            <li>
                <a href="#" onclick=$("#menu-close").click();>Home</a>
            </li>
            <li>
                <a href="#about" onclick=$("#menu-close").click();>Portfolio</a>
            </li>
            <li>
                <a href="#services" onclick=$("#menu-close").click();>Services</a>
            </li>
            <li>
                <a href="#portfolio" onclick=$("#menu-close").click();>Notes and Practice Material</a>
            </li>
            <li>
                <a href="#foot" onclick=$("#menu-close").click();>Contact</a>
            </li>
            <li>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        @endif

    </ul>
</nav>

<!-- Header -->
<header id="top" class="header">
    <div class="text-vertical-center" style="color: #ffffff; font-size: large">
        <h1>Tutor's Corner</h1>
        <h3>For all your teaching solutions</h3>
        <br>
        <a href="#about" class="btn btn-dark btn-lg">Explore more</a>
    </div>
</header>

<!-- About -->
<aside id = "about" class="call-to-action bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <hr>
                <h2 style="font-color: #2D3130"><b>We provide high and best quality tutor at your doorstep</b></h2>
                <hr>
            </div>
        </div>
    </div>
</aside>


<!-- Services -->
<!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
<section id="services" class="services bg-primary">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-10 col-lg-offset-1">
                <h2><b>Services</b></h2>
                <hr class="small">
                <div class="row">
                    <div class="col-md-3 col-sm-5" style="width: 20%">
                        <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-user fa-stack-1x text-primary"></i>
                            </span>
                            <h4>
                                <strong>Get a Tutor</strong>
                            </h4>
                            <p>Search for a tutor in your area for any subject. It's free!</p>
                            @if (Auth::guest())
                                <a href="/login" class="btn btn-light"><b>Learn More</b></a>
                            @else
                                <a href="/getTutor" class="btn btn-light"><b>Learn More</b></a>
                            @endif

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-5" style="width: 20%">
                        <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-user fa-stack-1x text-primary"></i>
                            </span>
                            <h4>
                                <strong>Become a Tutor</strong>
                            </h4>
                            <p>Become a tutor. Just few steps and you are done.</p>
                            @if (Auth::guest())
                                <a href="/login" class="btn btn-light"><b>Learn More</b></a>
                            @else
                                <a href="/TutorRegister" class="btn btn-light"><b>Learn More</b></a>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-5" style="width: 20%">
                        <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-question-circle fa-stack-1x text-primary"></i>
                            </span>
                            <h4>
                                <strong>Questionaire</strong>
                            </h4>
                            <p>Our Forum can help you to solve your queries. Ask anything!</p>

                            @if (Auth::guest())
                                <a href="/login" class="btn btn-light"><b>Learn More</b></a>
                            @else
                                <a href="/questions" class="btn btn-light"><b>Learn More</b></a>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-5" style="width: 20%">
                        <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-book fa-stack-1x text-primary"></i>
                            </span>
                            <h4>
                                <strong>Notes</strong>
                            </h4>
                            <p>Explore our notes and practice material. It's easy and free</p>

                            @if (Auth::guest())
                                <a href="/login" class="btn btn-light"><b>Learn More</b></a>
                            @else
                                <a href="/notes" class="btn btn-light"><b>Learn More</b></a>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-5" style="width: 20%">
                        <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-book fa-stack-1x text-primary"></i>
                            </span>
                            <h4>
                                <strong>Past Papers</strong>
                            </h4>
                            <p>Past papers and there solutions are also available for free</p>

                            @if (Auth::guest())
                                <a href="/login" class="btn btn-light"><b>Learn More</b></a>
                            @else
                                <a href="/pastPapers" class="btn btn-light"><b>Learn More</b></a>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<!-- Callout

 <aside class="callout">
    <div class="text-vertical-center">
        <h1></h1>
    </div>
</aside>
 -->


<!-- Portfolio -->
<section id="portfolio" class="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h2>Notes & Practice material</h2>
                <hr class="small">
                <div class="row">
                    <div class="col-md-6">
                        <div class="portfolio-item">
                            <a href="#">
                                <img class="img-portfolio img-responsive" src="{{URL::asset('img/sindhboard.jpg')}}" height="500" width="500">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="portfolio-item">
                            <a href="#">
                                <img class="img-portfolio img-responsive" src="{{URL::asset('img/aghakhanboard.jpg')}}" height="500" width="500">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="portfolio-item">
                            <a href="#">
                                <img class="img-portfolio img-responsive" src="{{URL::asset('img/olevels.jpg')}}" height="1000" width="500">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="portfolio-item">
                            <a href="#">
                                <img class="img-portfolio img-responsive" src="{{URL::asset('img/alevels.jpg')}}" height="100" width="500" style="display: block">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row (nested) -->
                <!--<a href="#" class="btn btn-dark">View More</a>--!>
            </div>

            <!-- /.col-lg-10 --!>
        <!-- /.row -->
            </div>
        </div>
    </div>
    <!-- /.container -->
</section>

<!-- Call to Action
<aside class="call-to-action bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">


            </div>
        </div>
    </div>
</aside>-->

<!-- Map -->
<section id="location" class="map">
    <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3617.728082322339!2d67.11166631462498!3d24.941331584015856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb338bcd01921f5%3A0x5fd98736c5530784!2sInstitute+of+Business+Administration+Karachi+Main+Campus!5e0!3m2!1sen!2sus!4v1490783363910"  style="border:0" allowfullscreen></iframe>
    <br />
    <small>
        <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
    </small>
</section>

<!-- Footer -->
<footer class="bg-primary">
    <div id = "foot" class="container">

        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h4><strong>Find Us</strong>
                </h4>
                <p>IBA Main campus
                    <br>KU-circular road</p>
                <ul class="list-unstyled">
                    <li><i class="fa fa-phone fa-fw"></i> +92-21-3208279757</li>
                    <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:name@example.com">contact@tutorscorner.com</a>
                    </li>
                </ul>
                <br>
                <ul class="list-inline">
                    <li>
                        <a href="https://www.facebook.com/1214.edu/"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                    </li>
                </ul>
                <hr class="small">
                <p class="text-muted">Copyright &copy; Your Website 2017</p>
            </div>
        </div>
    </div>
    <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
</footer>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<!-- Custom Theme JavaScript -->
<script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    //#to-top button appears after scrolling
    var fixed = false;
    $(document).scroll(function() {
        if ($(this).scrollTop() > 250) {
            if (!fixed) {
                fixed = true;
                // $('#to-top').css({position:'fixed', display:'block'});
                $('#to-top').show("slow", function() {
                    $('#to-top').css({
                        position: 'fixed',
                        display: 'block'
                    });
                });
            }
        } else {
            if (fixed) {
                fixed = false;
                $('#to-top').hide("slow", function() {
                    $('#to-top').css({
                        display: 'none'
                    });
                });
            }
        }
    });
    // Disable Google Maps scrolling
    // See http://stackoverflow.com/a/25904582/1607849
    // Disable scroll zooming and bind back the click event
    var onMapMouseleaveHandler = function(event) {
        var that = $(this);
        that.on('click', onMapClickHandler);
        that.off('mouseleave', onMapMouseleaveHandler);
        that.find('iframe').css("pointer-events", "none");
    }
    var onMapClickHandler = function(event) {
        var that = $(this);
        // Disable the click handler until the user leaves the map area
        that.off('click', onMapClickHandler);
        // Enable scrolling zoom
        that.find('iframe').css("pointer-events", "auto");
        // Handle the mouse leave event
        that.on('mouseleave', onMapMouseleaveHandler);
    }
    // Enable map zooming with mouse scroll when the user clicks the map
    $('.map').on('click', onMapClickHandler);
</script>

</body>

</html>
