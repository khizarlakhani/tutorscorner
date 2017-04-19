<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login Form</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


    <link rel="stylesheet" href="{{URL::asset('css/style2.css')}}">


</head>

<body  background="{{URL::asset('img/cover3.jpg')}}">
<div class="form">


    <h1><b>Registration Form</b></h1>

    <form action="/" method="post">

        <div class="top-row">
            <div class="field-wrap">
                <fieldname>
                    First Name*
                </fieldname>
                <input type="text" required autocomplete="off" />
            </div>

            <div class="field-wrap">
                <fieldname>
                    Last Name*
                </fieldname>
                <input type="text"required autocomplete="off"/>
            </div>
        </div>

        <div class="field-wrap">
            <fieldname>
                Email Address*
            </fieldname>
            <input type="email"required autocomplete="off"/>
        </div>

        <div class="field-wrap">
            <fieldname>
                NIC*
            </fieldname>
            <input type="number" min="1" max="13" step="1" required autocomplete="off"/>
        </div>

        <div class="field-wrap">
            <fieldname>
                Phone Number*
            </fieldname>
            <input type="number" min="1" max="11" step="1" required autocomplete="off"/>
        </div>

        <div class="field-wrap">
            <fieldname>
                Address*
            </fieldname>
            <input type="text"required autocomplete="off"/>
        </div>

        <div>
            <fieldname>
                Degree*
            </fieldname>
            <select class="selectarea">
                <option value="" selected="selected">
                    <fieldname>None</fieldname>
                </option>
                <option style="color: black" value="1">Intermediate</option>
                <option style="color: black" value="2">Bachlors</option>
                <option style="color: black" value="3">Master</option>
                <option style="color: black" value="4">Certification</option>
            </select>
        </div>

        <div>
            <fieldname>
                Field of Study*
            </fieldname>
            <select class="selectarea">
                <option value=""  selected="selected">
                    <fieldname>None</fieldname>
                </option>
                <option style="color: black" value="1">Business</option>
                <option style="color: black" value="2">Computer Science</option>
                <option style="color: black" value="3">Engineering</option>
                <option style="color: black" value="4">Other</option>
            </select>
        </div>

        <button type="submit" class="button button-block"/>Become a Tutor</button>

    </form>

</div>


</div> <!-- /form -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="js/index1.js"></script>

</body>
</html>
