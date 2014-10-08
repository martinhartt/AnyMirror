<head>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <title>AnyMirror</title>
</head>

<style>

    @import url(http://fonts.googleapis.com/css?family=Lato:300,400);

    body {
        font-family: 'Lato', sans-serif !important;
        font-weight: 300;
        margin: 0;
    }

    .anymirror_left {
        width: 300px;
        height: 100%;
        float:left;
        position:absolute;
        left:0;
        z-index: 999999999999999;
        background: #6FB3CE url("img/bg.png");
        padding:10px;
        color:#FFF;


    }
    h2 {

        font-size:22px;


    }

    h3{

         font-size : 20px;
         position: absolute;
         top: 100%;
         border: none ;

     }

    .main {
        width: calc(100% - 310px);
        position: absolute;
        right: 0;
    }

    .link {
        word-wrap: break-word;
    }

    a.link {
        color: #FFF;
        background: transparent;
        text-decoration: none;
        transition: 0.4s all ease;
        padding: 10px;
        display: block;
        margin-bottom: 10px;
    }

    a.link:hover {
        background: rgba(255, 255, 255, 0.4);
    }

    .active {
        border: 2px solid rgba(0, 0, 0, 0.33);
    }

    .no {
        display: inline-block;
        padding: 20px 30px;
        float: right;
        cursor: pointer;
    }

    .yes {
        display: inline-block;
        float: left;
        position: relative;
        padding: 20px;
        cursor: pointer;
    }

    .poll {
        font-size: 39pt;
        position: absolute;
        bottom: 0;
        width: 100%;
    }
</style>


<div class="anymirror_left">
    <img src="img/logo.png" class="logo">
    <?php
    $t = 0;
    $linknum = $_GET["link"];
    if (empty($linknum)) {
        $linknum = 0;
    } else {
        $linknum -= 1;
    }


    for ($sol = 0; $sol < (count($linklist)); $sol++) {

        if ($sol == $linknum) {
            $xyz = "active";
            $t++;
        }
        $ll = $sol + 1;
        echo "<a class='link " . $xyz . "' href='http://www.anymirror.me/crunch.php?url={$_GET["url"]}&link=$ll'><div class='link'>{$linklist[$sol]}</div></a>";
        $xyz = "";

    }

    /*
    foreach ($linklist as &$value) {
        if (!$t) {
            $xyz = "active";
            $t++;
        }
        echo "<a class='link " . $xyz . "' href='$value'><div class='link'>$value</div></a>";
        $xyz = "";
    };*/
    ?>
    <div class="poll">
        <div class="yes"><i class="fa fa-thumbs-up"></i></div>
        <div class="no"><i class="fa fa-thumbs-down"></i></div>
    </div>
</div>

</div>
<div class = "main">
    <?php



    if (getimagesize($linklist[$linknum])) {
        echo "<img src='" . $linklist[$linknum] . "'>";
    } else {
        echo file_get_contents($linklist[$linknum]);
            }
    ?>

</div>


