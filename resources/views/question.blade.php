<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <div class="collapse navbar-collapse" id="app-navbar-collapse">
        <!-- Left Side Of Navbar -->
        <ul class="nav navbar-nav">
            &nbsp;<li><a href="/">Home</a></li>
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
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
                    </ul>
                </li>
            @endif
        </ul>
    </div>

    <div class="row">
        <div class="tutorcornerlogo">
            <img src="{{URL::asset('img/tutorcornerlogo.jpg')}}" style="float: left;" width="100px" height="100px"/>

        </div>
        <h2 class="title">Questionaire</h2>

    </div>



    <div class="container">
        <h2>Top Questions</h2>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Interesting</a></li>
            <li><a data-toggle="tab" href="#menu1">Featured</a></li>
            <li><a data-toggle="tab" href="#menu2">Hot</a></li>
            <li><a data-toggle="tab" href="#menu3">week</a></li>
            <li><a data-toggle="tab" href="#menu4">month</a></li>
        </ul>

        <div class="tab-content">

            <!-- HOME-->
            <div id="home" class="tab-pane fade in active">
                <div class="row" style="height: 50px;">
                    <div class="col-lg-1" style="height: 50px;">
                        <div style="height: 50px">
                            <a href="">
                                <h4 style="text-align: center">4</h4>
                                <p style="text-align: center">Answers</p>
                            </a>
                        </div>

                    </div>
                    <div class="col-lg-11" style="height: 50px;">
                        <a href="">
                            <h4 style=" vertical-align: middle">
                                What does Rollback mean?
                            </h4>
                        </a>
                        <div>
                            <a href="">Database</a>
                            <a href="">Relational Database</a>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row" style="height: 50px;">
                    <div class="col-lg-1" style="height: 50px;">
                        <div style="height: 50px">
                            <a href="">
                                <h4 style="text-align: center">4</h4>
                                <p style="text-align: center">Answers</p>
                            </a>
                        </div>

                    </div>
                    <div class="col-lg-11" style="height: 50px;">
                        <a href="">
                            <h4 style=" vertical-align: middle">
                                What does Rollback mean?
                            </h4>
                        </a>
                        <div>
                            <a href="">Database</a>
                            <a href="">Relational Database</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END OF HOME -->

            <!-- Menu 1 -->
            <div id="menu1" class="tab-pane fade">
                <div class="row" style="height: 50px;">
                    <div class="col-lg-1" style="height: 50px;">
                        <div style="height: 50px">
                            <a href="">
                                <h4 style="text-align: center">4</h4>
                                <p style="text-align: center">Answers</p>
                            </a>
                        </div>

                    </div>
                    <div class="col-lg-11" style="height: 50px;">
                        <a href="">
                            <h4 style=" vertical-align: middle">
                                What does Rollback menu1?
                            </h4>
                        </a>
                        <div>
                            <a href="">Database</a>
                            <a href="">Relational Database</a>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row" style="height: 50px;">
                    <div class="col-lg-1" style="height: 50px;">
                        <div style="height: 50px">
                            <a href="">
                                <h4 style="text-align: center">4</h4>
                                <p style="text-align: center">Answers</p>
                            </a>
                        </div>

                    </div>
                    <div class="col-lg-11" style="height: 50px;">
                        <a href="">
                            <h4 style=" vertical-align: middle">
                                What is DBMS menu1?
                            </h4>
                        </a>
                        <div>
                            <a href="">Database</a>
                            <a href="">Relational Database</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END OF MENU 1 -->

            <!-- Menu 2 -->
            <div id="menu2" class="tab-pane fade">
                <div class="row" style="height: 50px;">
                    <div class="col-lg-1" style="height: 50px;">
                        <div style="height: 50px">
                            <a href="">
                                <h4 style="text-align: center">4</h4>
                                <p style="text-align: center">Answers</p>
                            </a>
                        </div>

                    </div>
                    <div class="col-lg-11" style="height: 50px;">
                        <a href="">
                            <h4 style=" vertical-align: middle">
                                What does Rollback mean menu2?
                            </h4>
                        </a>
                        <div>
                            <a href="">Database</a>
                            <a href="">Relational Database</a>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row" style="height: 50px;">
                    <div class="col-lg-1" style="height: 50px;">
                        <div style="height: 50px">
                            <a href="">
                                <h4 style="text-align: center">4</h4>
                                <p style="text-align: center">Answers</p>
                            </a>
                        </div>

                    </div>
                    <div class="col-lg-11" style="height: 50px;">
                        <a href="">
                            <h4 style=" vertical-align: middle">
                                What is DBMS menu2?
                            </h4>
                        </a>
                        <div>
                            <a href="">Database</a>
                            <a href="">Relational Database</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END OF MENU 2 -->

            <!-- Menu 3 -->
            <div id="menu3" class="tab-pane fade">
                <div class="row" style="height: 50px;">
                    <div class="col-lg-1" style="height: 50px;">
                        <div style="height: 50px">
                            <a href="">
                                <h4 style="text-align: center">4</h4>
                                <p style="text-align: center">Answers</p>
                            </a>
                        </div>

                    </div>
                    <div class="col-lg-11" style="height: 50px;">
                        <a href="">
                            <h4 style=" vertical-align: middle">
                                What does Rollback mean3?
                            </h4>
                        </a>
                        <div>
                            <a href="">Database</a>
                            <a href="">Relational Database</a>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row" style="height: 50px;">
                    <div class="col-lg-1" style="height: 50px;">
                        <div style="height: 50px">
                            <a href="">
                                <h4 style="text-align: center">4</h4>
                                <p style="text-align: center">Answers</p>
                            </a>
                        </div>

                    </div>
                    <div class="col-lg-11" style="height: 50px;">
                        <a href="">
                            <h4 style=" vertical-align: middle">
                                What is DBMS menu 3?
                            </h4>
                        </a>
                        <div>
                            <a href="">Database</a>
                            <a href="">Relational Database</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END OF MENU 3 -->

            <!-- Menu 4 -->
            <div id="menu4" class="tab-pane fade">
                <div class="row" style="height: 50px;">
                    <div class="col-lg-1" style="height: 50px;">
                        <div style="height: 50px">
                            <a href="">
                                <h4 style="text-align: center">4</h4>
                                <p style="text-align: center">Answers</p>
                            </a>
                        </div>

                    </div>
                    <div class="col-lg-11" style="height: 50px;">
                        <a href="">
                            <h4 style=" vertical-align: middle">
                                What does Rollback mean3?
                            </h4>
                        </a>
                        <div>
                            <a href="">Database</a>
                            <a href="">Relational Database</a>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row" style="height: 50px;">
                    <div class="col-lg-1" style="height: 50px;">
                        <div style="height: 50px">
                            <a href="">
                                <h4 style="text-align: center">4</h4>
                                <p style="text-align: center">Answers</p>
                            </a>
                        </div>

                    </div>
                    <div class="col-lg-11" style="height: 50px;">
                        <a href="">
                            <h4 style=" vertical-align: middle">
                                What is DBMS menu 3?
                            </h4>
                        </a>
                        <div>
                            <a href="">Database</a>
                            <a href="">Relational Database</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END OF MENU 4 -->
        </div>
    </div>
</div>

</body>
</html>
Chat