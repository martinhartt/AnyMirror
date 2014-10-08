<?php
/**
 * Created by PhpStorm.
 * User: Nali
 * Date: 04/10/2014
 * Time: 12:56
 */
require_once("reddit.php");
$reddit = new reddit();

$url = $_GET["url"];



$con = mysqli_connect("XXX","XXX","XXX","XXX");

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {

$url = mysqli_real_escape_string($con, $url);

    $hi = $reddit->getPageInfo($url);
// if video is on reddit if(on reddit){}


    $setup = $hi->data->children;
    $size = count($setup);


    $test = $setup[0]->data->title;

    $noth = 0;

    if ($test) {

        for ($x = 0; $x < $size; $x++) {
            $useme = $setup[$x]->data;
            $rTitle = $useme->title;
            //echo "<b>".$rTitle."</b><br>";
            //var_dump($setup[$x]->data);

            //var_dump($useme);

            // if ($useme->domain == "youtube.com"){
            // it is a youtube video!

            $perma = $reddit->getRawJSON($useme->permalink);
            for ($i = 0; $i < (count($perma[1]->data->children)); $i++) {
                $thecomment = $perma[1]->data->children[$i]->data->body;
                if (strpos($thecomment, 'http') !== FALSE) {
                    if (strpos($thecomment, 'mirror') !== FALSE) {

                        preg_match_all('!https?://\S+!', $thecomment, $matches);
                        $nice = str_replace(").","",$matches[0][0]);


                        $noth = 1;

                        $checkdb = mysqli_query($con,"SELECT * FROM `links` WHERE `prev_url` = '$url' AND `new_url` = '$nice'");

                        if (mysqli_num_rows($checkdb) == 0){

                            $result = mysqli_query($con, "INSERT INTO `links`(`prev_url`, `new_url`, `rating`) VALUES ('$url','{$nice}','75')");
                        }

                    } else {

                        preg_match_all('!https?://\S+!', $thecomment, $matches);
                        $new_url = $matches[0];
                        $nice = str_replace(").","",$matches[0][0]);

                        $noth = 1;
                        $checkdb = mysqli_query($con,"SELECT * FROM `links` WHERE `prev_url` = '$url' AND `new_url` = '$nice'");

                        if (mysqli_num_rows($checkdb) == 0){

                            $result = mysqli_query($con, "INSERT INTO `links`(`prev_url`, `new_url`, `rating`) VALUES ('$url','{$nice}','50')");
                        }
                    }

                }

            }


            //  var_dump($perma);
            //}
        }


    } else {
        //include("reddit.php");
        parse_str(parse_url($url, PHP_URL_QUERY), $id);
        $videoTitle = file_get_contents("http://gdata.youtube.com/feeds/api/videos/${id['v']}?v=2&fields=title");
        preg_match("/<title>(.+?)<\/title>/is", $videoTitle, $titleOfVideo);
        $videoTitle = urlencode($titleOfVideo[1]);
        header("Location: http://www.bing.com/videos/search?mkt=en-gb&q=" . $videoTitle);
        exit;
    }
}


require_once("analyseresults.php");

?>