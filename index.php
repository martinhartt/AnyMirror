<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AnyMirror</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        @import url(http://fonts.googleapis.com/css?family=Lato:300,400);

        body, *{
            font-family: 'Lato', sans-serif !important;
            font-weight:300;
        }
        input, button{
            font-family: 'Lato', sans-serif !important;
            font-weight:300;

        }
        h2 {
            font-size:20px;


        }

        p{

            color:#222222;
        }

        div.cover{
            height: 500px;
            margin-bottom: 30px;
            background:#93CDE4  url("img/bg.png");
        }

        input[type="text"] {
            box-shadow: none;
            border: 0;
            font-size: 18px;
            border-radius: 3px;
            border-bottom-right-radius: 0;
            border-top-right-radius: 0;
            background:#FFF;
            transition:all 0.5s ease;
        }


        input[type="text"]:focus {
            background:#F1F1F1;
        }


        input[type="submit"] {
            -webkit-appearance: none;
            height: 100%;
            width: 100%;
            font-size: 18px;
            margin: 0;
            padding: 0;
            border: 0;
            box-shadow: none;
            background: #555;
            color: #FFF;
            content: "";
            border-bottom-right-radius: 3px;
            border-top-right-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {

            background: #888;
        }


        form.search {
            max-width: 500px;
            margin: auto;
            margin-top: 13%;
            text-align: center;
        }

        a.bookm {
            background: #EEE;
            padding: 5px 7px;
            border-radius: 3px;
            position: relative;
            bottom: 0px;
            font-size: 16pt;
            color: #222;
            display: inline-block;
            margin: auto;
            font-weight: 500;
            transition: all 0.3s ease;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0);
            margin-top: 30px;
            margin-bottom: 5px;
        }
        a.bookm:hover {
            background: #F5F5F5;
            bottom: 3px;
            margin-bottom: 5px;
            box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2);
        }
        h1 {
            color: #FFF;
            font-family: 'Inconsolata', sans-serif !important;
            text-shadow: 2px 2px rgba(0, 0, 0, 0.64);
        }

        .mirror {
            display: block;
            position: absolute;
            top: 0;
            height: 500px;
            width: 100%;
            background: url("img/bg.png");
        }

        .flash {
            display: block;
            position: absolute;
            top: 0;
            height: 500px;
            width: 100%;
            opacity:0.6;
            background: url("img/flash.png");
            background-repeat: repeat-x;
            animation: animatedBackground 12s linear infinite;
            -ms-animation: animatedBackground 12s linear infinite;
            -moz-animation: animatedBackground 12s linear infinite;
            -webkit-animation: animatedBackground 12s linear infinite;
        }


        @keyframes animatedBackground {
            from { background-position: 0 0; }
            to { background-position: 800px 0; }
        }
        @-webkit-keyframes animatedBackground {
            from { background-position: 0 0; }
            to { background-position: 800px 0; }
        }
        @-ms-keyframes animatedBackground {
            from { background-position: 0 0; }
            to { background-position: 800px 0; }
        }
        @-moz-keyframes animatedBackground {
            from { background-position: 0 0; }
            to { background-position: 800px 0; }
        }

        span.sub{


            border-left: none;
            border: none;
            color: #333333;
            border-color: #cccccc;
            background: #555;
            border-bottom-right-radius: 3px;
            border-top-right-radius: 3px;
        }
    </style>
</head>
<body>
<div class="cover">
    <div class="flash">
    </div>
    <div class="mirror">
    </div>

<div class="row">
    <div class="large-12 columns">
            <h1><img src="img/logo.png" class="logo"></h1>
            <form action="crunch.php" method="GET" class="search">

                <div class="large-12 columns">
                    <div class="row collapse">
                        <div class="small-11 columns">
                            <input id="url" type="text" name="url" placeholder="Enter the url of the broken site." autofocus>
                        </div>
                        <div class="small-1 columns">
                            <span class="postfix sub"><input type="submit" value="Fix!"></input></span>
                        </div>
                    </div>
                </div>

                <a class="bookm" href="javascript:window.location='http://anymirror.me/crunch.php?url='+document.URL">anyMirror!</a>
                <p>
                    ...or drag this button to your bookmarks bar.
                </p>
            </form>
    </div>

</div></div>


    <div class="row">

                    <div class="small-4 large-4 columns"><h2><b>About us</b></h2><p>This project was created by students for a hackathon competition.
                            </p></div>
                    <div class="small-4 large-4 columns"><h2><b>Purpose</b></h2><p>Its purpose is to transfer the user from an unavailable video to a mirror of the video that is viewable.
                    </p></div>
                    <div class="small-4 large-4 columns"> <h2><b>Instructions</b></h2><p>To get access to all the working mirrors, just simply put
                            in the broken URL into the textbox above and press submit.
                            </p></div>
                </div>




<hr>

<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>
