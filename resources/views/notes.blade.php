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
        <h2 class="title">Notes</h2>

    </div>
    <!-- Start Group Sindh Board -->
    <div class="panel-group" id="group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#group" href="#collapse1">Sindh Board</a>
                </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="panel-group" id="sbphysics">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#sb" href="#sbcollapse1">Physics</a>
                                    </h3>
                                </div>
                                <div id="sbcollapse1" class="panel-collapse collapse">
                                    <ul class="list-group">
                                        <li class="list-group-item">chapter 1</li>
                                        <li class="list-group-item">chapter 2</li>
                                        <li class="list-group-item">chapter 3</li>
                                        <li class="list-group-item">chapter 4</li>
                                        <li class="list-group-item">chapter 5</li>
                                        <li class="list-group-item">chapter 6</li>
                                        <li class="list-group-item">chapter 7</li>
                                        <li class="list-group-item">chapter 8</li>
                                        <li class="list-group-item">chapter 9</li>
                                        <li class="list-group-item">chapter 10</li>
                                        <li class="list-group-item">chapter 11</li>
                                        <li class="list-group-item">chapter 12</li>

                                    </ul>
                                    <div class="panel-footer"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="panel-group" id="sbchem">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#sb" href="#sbcollapse2">Chemistry</a>
                                    </h3>
                                </div>
                                <div id="sbcollapse2" class="panel-collapse collapse">
                                    <ul class="list-group">
                                        <li class="list-group-item">chapter 1</li>
                                        <li class="list-group-item">chapter 2</li>
                                        <li class="list-group-item">chapter 3</li>
                                        <li class="list-group-item">chapter 4</li>
                                        <li class="list-group-item">chapter 5</li>
                                        <li class="list-group-item">chapter 6</li>
                                        <li class="list-group-item">chapter 7</li>
                                        <li class="list-group-item">chapter 8</li>
                                        <li class="list-group-item">chapter 9</li>
                                        <li class="list-group-item">chapter 10</li>
                                        <li class="list-group-item">chapter 11</li>
                                        <li class="list-group-item">chapter 12</li>

                                    </ul>
                                    <div class="panel-footer"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="panel-group" id="sbmaths">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#sb" href="#sbcollapse3">Mathematics</a>
                                    </h3>
                                </div>
                                <div id="sbcollapse3" class="panel-collapse collapse">
                                    <ul class="list-group">
                                        <li class="list-group-item">chapter 1</li>
                                        <li class="list-group-item">chapter 2</li>
                                        <li class="list-group-item">chapter 3</li>
                                        <li class="list-group-item">chapter 4</li>
                                        <li class="list-group-item">chapter 5</li>
                                        <li class="list-group-item">chapter 6</li>
                                        <li class="list-group-item">chapter 7</li>
                                        <li class="list-group-item">chapter 8</li>
                                        <li class="list-group-item">chapter 9</li>
                                        <li class="list-group-item">chapter 10</li>
                                        <li class="list-group-item">chapter 11</li>
                                        <li class="list-group-item">chapter 12</li>

                                    </ul>
                                    <div class="panel-footer"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="panel-footer"></div>
            </div>
        </div>

    </div>
    <!-- End Sindh Board -->

    <!-- Start Group Agha Board -->
    <div class="panel-group" id="group2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#group2" href="#collapse2">Agha Khan Board</a>
                </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="panel-group" id="agphysics">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#ag" href="#agcollapse1">Physics</a>
                                    </h3>
                                </div>
                                <div id="agcollapse1" class="panel-collapse collapse">
                                    <ul class="list-group">
                                        <li class="list-group-item">chapter 1</li>
                                        <li class="list-group-item">chapter 2</li>
                                        <li class="list-group-item">chapter 3</li>
                                        <li class="list-group-item">chapter 4</li>
                                        <li class="list-group-item">chapter 5</li>
                                        <li class="list-group-item">chapter 6</li>
                                        <li class="list-group-item">chapter 7</li>
                                        <li class="list-group-item">chapter 8</li>
                                        <li class="list-group-item">chapter 9</li>
                                        <li class="list-group-item">chapter 10</li>
                                        <li class="list-group-item">chapter 11</li>
                                        <li class="list-group-item">chapter 12</li>

                                    </ul>
                                    <div class="panel-footer"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="panel-group" id="agchem">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#ag" href="#agcollapse2">Chemistry</a>
                                    </h3>
                                </div>
                                <div id="agcollapse2" class="panel-collapse collapse">
                                    <ul class="list-group">
                                        <li class="list-group-item">chapter 1</li>
                                        <li class="list-group-item">chapter 2</li>
                                        <li class="list-group-item">chapter 3</li>
                                        <li class="list-group-item">chapter 4</li>
                                        <li class="list-group-item">chapter 5</li>
                                        <li class="list-group-item">chapter 6</li>
                                        <li class="list-group-item">chapter 7</li>
                                        <li class="list-group-item">chapter 8</li>
                                        <li class="list-group-item">chapter 9</li>
                                        <li class="list-group-item">chapter 10</li>
                                        <li class="list-group-item">chapter 11</li>
                                        <li class="list-group-item">chapter 12</li>

                                    </ul>
                                    <div class="panel-footer"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="panel-group" id="agmaths">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#ag" href="#agcollapse3">Mathematics</a>
                                    </h3>
                                </div>
                                <div id="agcollapse3" class="panel-collapse collapse">
                                    <ul class="list-group">
                                        <li class="list-group-item">chapter 1</li>
                                        <li class="list-group-item">chapter 2</li>
                                        <li class="list-group-item">chapter 3</li>
                                        <li class="list-group-item">chapter 4</li>
                                        <li class="list-group-item">chapter 5</li>
                                        <li class="list-group-item">chapter 6</li>
                                        <li class="list-group-item">chapter 7</li>
                                        <li class="list-group-item">chapter 8</li>
                                        <li class="list-group-item">chapter 9</li>
                                        <li class="list-group-item">chapter 10</li>
                                        <li class="list-group-item">chapter 11</li>
                                        <li class="list-group-item">chapter 12</li>

                                    </ul>
                                    <div class="panel-footer"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="panel-footer"></div>
            </div>
        </div>

    </div>
    <!-- End Agha Khan Board -->

    <!-- Start O-levels -->
    <div class="panel-group" id="group3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#group3" href="#collapse3">O-levels</a>
                </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="panel-group" id="olphysics">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#ol" href="#olcollapse1">Physics</a>
                                    </h3>
                                </div>
                                <div id="olcollapse1" class="panel-collapse collapse">
                                    <ul class="list-group">
                                        <li class="list-group-item">chapter 1</li>
                                        <li class="list-group-item">chapter 2</li>
                                        <li class="list-group-item">chapter 3</li>
                                        <li class="list-group-item">chapter 4</li>
                                        <li class="list-group-item">chapter 5</li>
                                        <li class="list-group-item">chapter 6</li>
                                        <li class="list-group-item">chapter 7</li>
                                        <li class="list-group-item">chapter 8</li>
                                        <li class="list-group-item">chapter 9</li>
                                        <li class="list-group-item">chapter 10</li>
                                        <li class="list-group-item">chapter 11</li>
                                        <li class="list-group-item">chapter 12</li>

                                    </ul>
                                    <div class="panel-footer"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="panel-group" id="olchem">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#ol" href="#olcollapse2">Chemistry</a>
                                    </h3>
                                </div>
                                <div id="olcollapse2" class="panel-collapse collapse">
                                    <ul class="list-group">
                                        <li class="list-group-item">chapter 1</li>
                                        <li class="list-group-item">chapter 2</li>
                                        <li class="list-group-item">chapter 3</li>
                                        <li class="list-group-item">chapter 4</li>
                                        <li class="list-group-item">chapter 5</li>
                                        <li class="list-group-item">chapter 6</li>
                                        <li class="list-group-item">chapter 7</li>
                                        <li class="list-group-item">chapter 8</li>
                                        <li class="list-group-item">chapter 9</li>
                                        <li class="list-group-item">chapter 10</li>
                                        <li class="list-group-item">chapter 11</li>
                                        <li class="list-group-item">chapter 12</li>

                                    </ul>
                                    <div class="panel-footer"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="panel-group" id="olmaths">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#ol" href="#olcollapse3">Mathematics</a>
                                    </h3>
                                </div>
                                <div id="olcollapse3" class="panel-collapse collapse">
                                    <ul class="list-group">
                                        <li class="list-group-item">chapter 1</li>
                                        <li class="list-group-item">chapter 2</li>
                                        <li class="list-group-item">chapter 3</li>
                                        <li class="list-group-item">chapter 4</li>
                                        <li class="list-group-item">chapter 5</li>
                                        <li class="list-group-item">chapter 6</li>
                                        <li class="list-group-item">chapter 7</li>
                                        <li class="list-group-item">chapter 8</li>
                                        <li class="list-group-item">chapter 9</li>
                                        <li class="list-group-item">chapter 10</li>
                                        <li class="list-group-item">chapter 11</li>
                                        <li class="list-group-item">chapter 12</li>

                                    </ul>
                                    <div class="panel-footer"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="panel-footer"></div>
            </div>
        </div>

    </div>
    <!-- End O-levels -->

    <!-- Start A-levels -->
    <div class="panel-group" id="group4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#group4" href="#collapse4">A-levels</a>
                </h4>
            </div>
            <div id="collapse4" class="panel-collapse collapse">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="panel-group" id="alphysics">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#al" href="#alcollapse1">Physics</a>
                                    </h3>
                                </div>
                                <div id="alcollapse1" class="panel-collapse collapse">
                                    <ul class="list-group">
                                        <li class="list-group-item">chapter 1</li>
                                        <li class="list-group-item">chapter 2</li>
                                        <li class="list-group-item">chapter 3</li>
                                        <li class="list-group-item">chapter 4</li>
                                        <li class="list-group-item">chapter 5</li>
                                        <li class="list-group-item">chapter 6</li>
                                        <li class="list-group-item">chapter 7</li>
                                        <li class="list-group-item">chapter 8</li>
                                        <li class="list-group-item">chapter 9</li>
                                        <li class="list-group-item">chapter 10</li>
                                        <li class="list-group-item">chapter 11</li>
                                        <li class="list-group-item">chapter 12</li>

                                    </ul>
                                    <div class="panel-footer"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="panel-group" id="alchem">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#al" href="#alcollapse2">Chemistry</a>
                                    </h3>
                                </div>
                                <div id="alcollapse2" class="panel-collapse collapse">
                                    <ul class="list-group">
                                        <li class="list-group-item">chapter 1</li>
                                        <li class="list-group-item">chapter 2</li>
                                        <li class="list-group-item">chapter 3</li>
                                        <li class="list-group-item">chapter 4</li>
                                        <li class="list-group-item">chapter 5</li>
                                        <li class="list-group-item">chapter 6</li>
                                        <li class="list-group-item">chapter 7</li>
                                        <li class="list-group-item">chapter 8</li>
                                        <li class="list-group-item">chapter 9</li>
                                        <li class="list-group-item">chapter 10</li>
                                        <li class="list-group-item">chapter 11</li>
                                        <li class="list-group-item">chapter 12</li>

                                    </ul>
                                    <div class="panel-footer"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="panel-group" id="almaths">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#al" href="#alcollapse3">Mathematics</a>
                                    </h3>
                                </div>
                                <div id="alcollapse3" class="panel-collapse collapse">
                                    <ul class="list-group">
                                        <li class="list-group-item">chapter 1</li>
                                        <li class="list-group-item">chapter 2</li>
                                        <li class="list-group-item">chapter 3</li>
                                        <li class="list-group-item">chapter 4</li>
                                        <li class="list-group-item">chapter 5</li>
                                        <li class="list-group-item">chapter 6</li>
                                        <li class="list-group-item">chapter 7</li>
                                        <li class="list-group-item">chapter 8</li>
                                        <li class="list-group-item">chapter 9</li>
                                        <li class="list-group-item">chapter 10</li>
                                        <li class="list-group-item">chapter 11</li>
                                        <li class="list-group-item">chapter 12</li>

                                    </ul>
                                    <div class="panel-footer"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="panel-footer"></div>
            </div>
        </div>

    </div>
    <!-- End A-levels -->
</div>


</body>
</html>