<?php
/**
 * Created by PhpStorm.
 * User: Nali
 * Date: 04/10/2014
 * Time: 12:57
 */

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    die();
} else {

    $url = mysqli_real_escape_string($con, $url);
    $result = mysqli_query($con,"SELECT * FROM `links` WHERE `prev_url` = '$url'");


    while($row = mysqli_fetch_assoc($result)) {
        $solutions[$row["rating"]] = $row["new_url"];

    }
    krsort($solutions);


    $linklist = [];
    foreach ($solutions as &$value) {
        $linklist[] = $value;

    }

    if ($linklist) {
        require_once("gatherlinks.php");

    } else {
      // redirect to google
    }

}



?>